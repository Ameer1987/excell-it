<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminHomeUpperSnippetsController
 *
 * @property HomeUpperSnippet $HomeUpperSnippet
 */
class AdminHomeUpperSnippetsController extends AdminAppController {

	public $uses = array('HomeUpperSnippet');

    public function index() {
	    $conditions = array();
        $homeUpperSnippetsTableURL = array('controller' => 'admin_home_upper_snippets', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'HomeUpperSnippet';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'HomeUpperSnippet' || !empty($this->HomeUpperSnippet->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $homeUpperSnippetsTableURL[$key] = $value;
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

		$this->HomeUpperSnippet->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('homeUpperSnippets', $this->Paginator->paginate('HomeUpperSnippet'));
		$this->set('homeUpperSnippetsTableURL', $homeUpperSnippetsTableURL);
        $this->set('homeUpperSnippetsTableModelAlias', 'HomeUpperSnippet');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->HomeUpperSnippet->id = $id;
        if (!$this->HomeUpperSnippet->exists()) {
            throw new NotFoundException(__('Invalid home upper snippet'));
        }
        $homeUpperSnippet = $this->HomeUpperSnippet->read(null, $id);
        $this->set('homeUpperSnippet', $homeUpperSnippet);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->HomeUpperSnippet->create();
			if ($this->HomeUpperSnippet->save($this->request->data)) {
				$this->Session->setFlash(__('The home upper snippet has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->HomeUpperSnippet->id));
				}
			} else {
				$this->Session->setFlash(__('The home upper snippet could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->HomeUpperSnippet->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['HomeUpperSnippet'])) $this->request->data['HomeUpperSnippet'] = array();
                    $this->request->data['HomeUpperSnippet'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->HomeUpperSnippet->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->HomeUpperSnippet->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->HomeUpperSnippet->id = $id;
		if (!$this->HomeUpperSnippet->exists()) {
			throw new NotFoundException(__('Invalid home upper snippet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HomeUpperSnippet->save($this->request->data)) {
				$this->Session->setFlash(__('The home upper snippet has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The home upper snippet could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$homeUpperSnippet = $this->HomeUpperSnippet->read(null, $id);
			$this->request->data = $homeUpperSnippet;
			$this->set('homeUpperSnippet', $homeUpperSnippet);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->HomeUpperSnippet->id = $id;
		if (!$this->HomeUpperSnippet->exists()) {
			throw new NotFoundException(__('Invalid home upper snippet'));
		}
		if ($this->HomeUpperSnippet->delete()) {
			$this->Session->setFlash(__('Home upper snippet deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Home upper snippet was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
