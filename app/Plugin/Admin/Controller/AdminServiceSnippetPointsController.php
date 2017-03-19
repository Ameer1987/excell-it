<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminServiceSnippetPointsController
 *
 * @property ServiceSnippetPoint $ServiceSnippetPoint
 */
class AdminServiceSnippetPointsController extends AdminAppController {

	public $uses = array('ServiceSnippetPoint');

    public function index() {
	    $conditions = array();
        $serviceSnippetPointsTableURL = array('controller' => 'admin_service_snippet_points', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'ServiceSnippetPoint';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'ServiceSnippetPoint' || !empty($this->ServiceSnippetPoint->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $serviceSnippetPointsTableURL[$key] = $value;
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

		$this->ServiceSnippetPoint->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('serviceSnippetPoints', $this->Paginator->paginate('ServiceSnippetPoint'));
		$this->set('serviceSnippetPointsTableURL', $serviceSnippetPointsTableURL);
        $this->set('serviceSnippetPointsTableModelAlias', 'ServiceSnippetPoint');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->ServiceSnippetPoint->id = $id;
        if (!$this->ServiceSnippetPoint->exists()) {
            throw new NotFoundException(__('Invalid service snippet point'));
        }
        $serviceSnippetPoint = $this->ServiceSnippetPoint->read(null, $id);
        $this->set('serviceSnippetPoint', $serviceSnippetPoint);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->ServiceSnippetPoint->create();
			if ($this->ServiceSnippetPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The service snippet point has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->ServiceSnippetPoint->id));
				}
			} else {
				$this->Session->setFlash(__('The service snippet point could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->ServiceSnippetPoint->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['ServiceSnippetPoint'])) $this->request->data['ServiceSnippetPoint'] = array();
                    $this->request->data['ServiceSnippetPoint'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->ServiceSnippetPoint->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->ServiceSnippetPoint->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
		$serviceSnippets = $this->ServiceSnippetPoint->ServiceSnippet->find('all', array('order' => 'ServiceSnippet.'.$this->ServiceSnippetPoint->ServiceSnippet->displayField));
		$serviceSnippetsSelect = Hash::combine($serviceSnippets, '{n}.ServiceSnippet.id', '{n}.ServiceSnippet');
		$serviceSnippetsSelect = $this->ServiceSnippetPoint->convertToListItemsWithDataAttributes($serviceSnippetsSelect);
		$serviceSnippetsSelect = Hash::sort($serviceSnippetsSelect, '{n}.name', 'asc');
		$this->set(compact('serviceSnippets', 'serviceSnippetsSelect'));
	}


	public function edit($id = null) {
		$this->ServiceSnippetPoint->id = $id;
		if (!$this->ServiceSnippetPoint->exists()) {
			throw new NotFoundException(__('Invalid service snippet point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ServiceSnippetPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The service snippet point has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The service snippet point could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$serviceSnippetPoint = $this->ServiceSnippetPoint->read(null, $id);
			$this->request->data = $serviceSnippetPoint;
			$this->set('serviceSnippetPoint', $serviceSnippetPoint);
		}
		$serviceSnippets = $this->ServiceSnippetPoint->ServiceSnippet->find('all', array('order' => 'ServiceSnippet.'.$this->ServiceSnippetPoint->ServiceSnippet->displayField));
		$serviceSnippetsSelect = Hash::combine($serviceSnippets, '{n}.ServiceSnippet.id', '{n}.ServiceSnippet');
		$serviceSnippetsSelect = $this->ServiceSnippetPoint->convertToListItemsWithDataAttributes($serviceSnippetsSelect);
		$serviceSnippetsSelect = Hash::sort($serviceSnippetsSelect, '{n}.name', 'asc');
		asort($serviceSnippetsSelect);
		$this->set(compact('serviceSnippets', 'serviceSnippetsSelect'));
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ServiceSnippetPoint->id = $id;
		if (!$this->ServiceSnippetPoint->exists()) {
			throw new NotFoundException(__('Invalid service snippet point'));
		}
		if ($this->ServiceSnippetPoint->delete()) {
			$this->Session->setFlash(__('Service snippet point deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Service snippet point was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
