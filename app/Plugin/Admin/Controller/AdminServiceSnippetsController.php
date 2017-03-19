<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminServiceSnippetsController
 *
 * @property ServiceSnippet $ServiceSnippet
 */
class AdminServiceSnippetsController extends AdminAppController {

	public $uses = array('ServiceSnippet');

    public function index() {
	    $conditions = array();
        $serviceSnippetsTableURL = array('controller' => 'admin_service_snippets', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'ServiceSnippet';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'ServiceSnippet' || !empty($this->ServiceSnippet->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $serviceSnippetsTableURL[$key] = $value;
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

		$this->ServiceSnippet->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('serviceSnippets', $this->Paginator->paginate('ServiceSnippet'));
		$this->set('serviceSnippetsTableURL', $serviceSnippetsTableURL);
        $this->set('serviceSnippetsTableModelAlias', 'ServiceSnippet');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->ServiceSnippet->id = $id;
        if (!$this->ServiceSnippet->exists()) {
            throw new NotFoundException(__('Invalid service snippet'));
        }
        $serviceSnippet = $this->ServiceSnippet->read(null, $id);
        $this->set('serviceSnippet', $serviceSnippet);
		//related serviceSnippetPoints
		$this->ServiceSnippet->ServiceSnippetPoint->recursive = 0;
		$this->paginate = array('conditions' => array('ServiceSnippetPoint.service_snippet_id' => $id), 'limit' => 15);
		$this->set('serviceSnippetPoints', $this->Paginator->paginate('ServiceSnippetPoint'));
		$this->set('serviceSnippetPointsTableURL', array('controller' => 'admin_service_snippet_points', 'action' => 'index', 'ServiceSnippetPoint-service_snippet_id' => $id));
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->ServiceSnippet->create();
			if ($this->ServiceSnippet->save($this->request->data)) {
				$this->Session->setFlash(__('The service snippet has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->ServiceSnippet->id));
				}
			} else {
				$this->Session->setFlash(__('The service snippet could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->ServiceSnippet->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['ServiceSnippet'])) $this->request->data['ServiceSnippet'] = array();
                    $this->request->data['ServiceSnippet'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->ServiceSnippet->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->ServiceSnippet->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->ServiceSnippet->id = $id;
		if (!$this->ServiceSnippet->exists()) {
			throw new NotFoundException(__('Invalid service snippet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ServiceSnippet->save($this->request->data)) {
				$this->Session->setFlash(__('The service snippet has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The service snippet could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$serviceSnippet = $this->ServiceSnippet->read(null, $id);
			$this->request->data = $serviceSnippet;
			$this->set('serviceSnippet', $serviceSnippet);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ServiceSnippet->id = $id;
		if (!$this->ServiceSnippet->exists()) {
			throw new NotFoundException(__('Invalid service snippet'));
		}
		if ($this->ServiceSnippet->delete()) {
			$this->Session->setFlash(__('Service snippet deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Service snippet was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
