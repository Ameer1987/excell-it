<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminHeadersController
 *
 * @property Header $Header
 */
class AdminHeadersController extends AdminAppController {

	public $uses = array('Header');

    public function index() {
	    $conditions = array();
        $headersTableURL = array('controller' => 'admin_headers', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'Header';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'Header' || !empty($this->Header->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $headersTableURL[$key] = $value;
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

		$this->Header->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('headers', $this->Paginator->paginate('Header'));
		$this->set('headersTableURL', $headersTableURL);
        $this->set('headersTableModelAlias', 'Header');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->Header->id = $id;
        if (!$this->Header->exists()) {
            throw new NotFoundException(__('Invalid header'));
        }
        $header = $this->Header->read(null, $id);
        $this->set('header', $header);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->Header->create();
			if ($this->Header->save($this->request->data)) {
				$this->Session->setFlash(__('The header has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->Header->id));
				}
			} else {
				$this->Session->setFlash(__('The header could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->Header->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['Header'])) $this->request->data['Header'] = array();
                    $this->request->data['Header'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->Header->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->Header->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->Header->id = $id;
		if (!$this->Header->exists()) {
			throw new NotFoundException(__('Invalid header'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Header->save($this->request->data)) {
				$this->Session->setFlash(__('The header has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The header could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$header = $this->Header->read(null, $id);
			$this->request->data = $header;
			$this->set('header', $header);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Header->id = $id;
		if (!$this->Header->exists()) {
			throw new NotFoundException(__('Invalid header'));
		}
		if ($this->Header->delete()) {
			$this->Session->setFlash(__('Header deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Header was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
