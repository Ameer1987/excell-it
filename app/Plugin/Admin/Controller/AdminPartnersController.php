<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminPartnersController
 *
 * @property Partner $Partner
 */
class AdminPartnersController extends AdminAppController {

	public $uses = array('Partner');

    public function index() {
	    $conditions = array();
        $partnersTableURL = array('controller' => 'admin_partners', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'Partner';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'Partner' || !empty($this->Partner->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $partnersTableURL[$key] = $value;
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

		$this->Partner->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('partners', $this->Paginator->paginate('Partner'));
		$this->set('partnersTableURL', $partnersTableURL);
        $this->set('partnersTableModelAlias', 'Partner');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->Partner->id = $id;
        if (!$this->Partner->exists()) {
            throw new NotFoundException(__('Invalid partner'));
        }
        $partner = $this->Partner->read(null, $id);
        $this->set('partner', $partner);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->Partner->create();
			if ($this->Partner->save($this->request->data)) {
				$this->Session->setFlash(__('The partner has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->Partner->id));
				}
			} else {
				$this->Session->setFlash(__('The partner could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->Partner->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['Partner'])) $this->request->data['Partner'] = array();
                    $this->request->data['Partner'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->Partner->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->Partner->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->Partner->id = $id;
		if (!$this->Partner->exists()) {
			throw new NotFoundException(__('Invalid partner'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Partner->save($this->request->data)) {
				$this->Session->setFlash(__('The partner has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The partner could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$partner = $this->Partner->read(null, $id);
			$this->request->data = $partner;
			$this->set('partner', $partner);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Partner->id = $id;
		if (!$this->Partner->exists()) {
			throw new NotFoundException(__('Invalid partner'));
		}
		if ($this->Partner->delete()) {
			$this->Session->setFlash(__('Partner deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Partner was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
