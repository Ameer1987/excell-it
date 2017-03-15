<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminCareersController
 *
 * @property Career $Career
 */
class AdminCareersController extends AdminAppController {

	public $uses = array('Career');

    public function index() {
	    $conditions = array();
        $careersTableURL = array('controller' => 'admin_careers', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'Career';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'Career' || !empty($this->Career->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $careersTableURL[$key] = $value;
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

		$this->Career->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('careers', $this->Paginator->paginate('Career'));
		$this->set('careersTableURL', $careersTableURL);
        $this->set('careersTableModelAlias', 'Career');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->Career->id = $id;
        if (!$this->Career->exists()) {
            throw new NotFoundException(__('Invalid career'));
        }
        $career = $this->Career->read(null, $id);
        $this->set('career', $career);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->Career->create();
			if ($this->Career->save($this->request->data)) {
				$this->Session->setFlash(__('The career has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->Career->id));
				}
			} else {
				$this->Session->setFlash(__('The career could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->Career->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['Career'])) $this->request->data['Career'] = array();
                    $this->request->data['Career'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->Career->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->Career->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->Career->id = $id;
		if (!$this->Career->exists()) {
			throw new NotFoundException(__('Invalid career'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Career->save($this->request->data)) {
				$this->Session->setFlash(__('The career has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The career could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$career = $this->Career->read(null, $id);
			$this->request->data = $career;
			$this->set('career', $career);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Career->id = $id;
		if (!$this->Career->exists()) {
			throw new NotFoundException(__('Invalid career'));
		}
		if ($this->Career->delete()) {
			$this->Session->setFlash(__('Career deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Career was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
