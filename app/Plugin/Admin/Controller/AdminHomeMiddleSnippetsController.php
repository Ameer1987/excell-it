<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminHomeMiddleSnippetsController
 *
 * @property HomeMiddleSnippet $HomeMiddleSnippet
 */
class AdminHomeMiddleSnippetsController extends AdminAppController {

	public $uses = array('HomeMiddleSnippet');

    public function index() {
	    $conditions = array();
        $homeMiddleSnippetsTableURL = array('controller' => 'admin_home_middle_snippets', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'HomeMiddleSnippet';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'HomeMiddleSnippet' || !empty($this->HomeMiddleSnippet->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $homeMiddleSnippetsTableURL[$key] = $value;
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

		$this->HomeMiddleSnippet->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('homeMiddleSnippets', $this->Paginator->paginate('HomeMiddleSnippet'));
		$this->set('homeMiddleSnippetsTableURL', $homeMiddleSnippetsTableURL);
        $this->set('homeMiddleSnippetsTableModelAlias', 'HomeMiddleSnippet');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->HomeMiddleSnippet->id = $id;
        if (!$this->HomeMiddleSnippet->exists()) {
            throw new NotFoundException(__('Invalid home middle snippet'));
        }
        $homeMiddleSnippet = $this->HomeMiddleSnippet->read(null, $id);
        $this->set('homeMiddleSnippet', $homeMiddleSnippet);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->HomeMiddleSnippet->create();
			if ($this->HomeMiddleSnippet->save($this->request->data)) {
				$this->Session->setFlash(__('The home middle snippet has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->HomeMiddleSnippet->id));
				}
			} else {
				$this->Session->setFlash(__('The home middle snippet could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->HomeMiddleSnippet->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['HomeMiddleSnippet'])) $this->request->data['HomeMiddleSnippet'] = array();
                    $this->request->data['HomeMiddleSnippet'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->HomeMiddleSnippet->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->HomeMiddleSnippet->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->HomeMiddleSnippet->id = $id;
		if (!$this->HomeMiddleSnippet->exists()) {
			throw new NotFoundException(__('Invalid home middle snippet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HomeMiddleSnippet->save($this->request->data)) {
				$this->Session->setFlash(__('The home middle snippet has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The home middle snippet could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$homeMiddleSnippet = $this->HomeMiddleSnippet->read(null, $id);
			$this->request->data = $homeMiddleSnippet;
			$this->set('homeMiddleSnippet', $homeMiddleSnippet);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->HomeMiddleSnippet->id = $id;
		if (!$this->HomeMiddleSnippet->exists()) {
			throw new NotFoundException(__('Invalid home middle snippet'));
		}
		if ($this->HomeMiddleSnippet->delete()) {
			$this->Session->setFlash(__('Home middle snippet deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Home middle snippet was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
