<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminContactsController
 *
 * @property Contact $Contact
 */
class AdminContactsController extends AdminAppController {

	public $uses = array('Contact');

    public function index() {
	    $conditions = array();
        $contactsTableURL = array('controller' => 'admin_contacts', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'Contact';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'Contact' || !empty($this->Contact->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $contactsTableURL[$key] = $value;
                        //add it to conditions
                        switch($columnType)
                        {
                            case 'string':
                                $conditions[$modelName . '.' . $property . ' LIKE'] = '%'.$value.'%';
                                break;
                            default:
                                $conditions[$modelName . '.' . $property] = $value;
                                break;
                        }
                    }
                }
            }

        }

		$this->Contact->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('contacts', $this->Paginator->paginate('Contact'));
		$this->set('contactsTableURL', $contactsTableURL);
        $this->set('contactsTableModelAlias', 'Contact');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->Contact->id = $id;
        if (!$this->Contact->exists()) {
            throw new NotFoundException(__('Invalid contact'));
        }
        $contact = $this->Contact->read(null, $id);
        $this->set('contact', $contact);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->Contact->create();
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('The contact has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->Contact->id));
				}
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->Contact->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['Contact'])) $this->request->data['Contact'] = array();
                    $this->request->data['Contact'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->Contact->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->Contact->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Invalid contact'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('The contact has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$contact = $this->Contact->read(null, $id);
			$this->request->data = $contact;
			$this->set('contact', $contact);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Invalid contact'));
		}
		if ($this->Contact->delete()) {
			$this->Session->setFlash(__('Contact deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Contact was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
