<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminContactGeneralsController
 *
 * @property ContactGeneral $ContactGeneral
 */
class AdminContactGeneralsController extends AdminAppController {

	public $uses = array('ContactGeneral');

    public function index() {
	    $conditions = array();
        $contactGeneralsTableURL = array('controller' => 'admin_contact_generals', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'ContactGeneral';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'ContactGeneral' || !empty($this->ContactGeneral->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $contactGeneralsTableURL[$key] = $value;
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

		$this->ContactGeneral->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('contactGenerals', $this->Paginator->paginate('ContactGeneral'));
		$this->set('contactGeneralsTableURL', $contactGeneralsTableURL);
        $this->set('contactGeneralsTableModelAlias', 'ContactGeneral');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->ContactGeneral->id = $id;
        if (!$this->ContactGeneral->exists()) {
            throw new NotFoundException(__('Invalid contact general'));
        }
        $contactGeneral = $this->ContactGeneral->read(null, $id);
        $this->set('contactGeneral', $contactGeneral);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactGeneral->create();
			if ($this->ContactGeneral->save($this->request->data)) {
				$this->Session->setFlash(__('The contact general has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->ContactGeneral->id));
				}
			} else {
				$this->Session->setFlash(__('The contact general could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->ContactGeneral->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['ContactGeneral'])) $this->request->data['ContactGeneral'] = array();
                    $this->request->data['ContactGeneral'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->ContactGeneral->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->ContactGeneral->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->ContactGeneral->id = $id;
		if (!$this->ContactGeneral->exists()) {
			throw new NotFoundException(__('Invalid contact general'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContactGeneral->save($this->request->data)) {
				$this->Session->setFlash(__('The contact general has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The contact general could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$contactGeneral = $this->ContactGeneral->read(null, $id);
			$this->request->data = $contactGeneral;
			$this->set('contactGeneral', $contactGeneral);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ContactGeneral->id = $id;
		if (!$this->ContactGeneral->exists()) {
			throw new NotFoundException(__('Invalid contact general'));
		}
		if ($this->ContactGeneral->delete()) {
			$this->Session->setFlash(__('Contact general deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Contact general was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
