<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminContactBranchesController
 *
 * @property ContactBranch $ContactBranch
 */
class AdminContactBranchesController extends AdminAppController {

	public $uses = array('ContactBranch');

    public function index() {
	    $conditions = array();
        $contactBranchesTableURL = array('controller' => 'admin_contact_branches', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'ContactBranch';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'ContactBranch' || !empty($this->ContactBranch->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $contactBranchesTableURL[$key] = $value;
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

		$this->ContactBranch->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('contactBranches', $this->Paginator->paginate('ContactBranch'));
		$this->set('contactBranchesTableURL', $contactBranchesTableURL);
        $this->set('contactBranchesTableModelAlias', 'ContactBranch');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->ContactBranch->id = $id;
        if (!$this->ContactBranch->exists()) {
            throw new NotFoundException(__('Invalid contact branch'));
        }
        $contactBranch = $this->ContactBranch->read(null, $id);
        $this->set('contactBranch', $contactBranch);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactBranch->create();
			if ($this->ContactBranch->save($this->request->data)) {
				$this->Session->setFlash(__('The contact branch has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->ContactBranch->id));
				}
			} else {
				$this->Session->setFlash(__('The contact branch could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->ContactBranch->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['ContactBranch'])) $this->request->data['ContactBranch'] = array();
                    $this->request->data['ContactBranch'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->ContactBranch->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->ContactBranch->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->ContactBranch->id = $id;
		if (!$this->ContactBranch->exists()) {
			throw new NotFoundException(__('Invalid contact branch'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContactBranch->save($this->request->data)) {
				$this->Session->setFlash(__('The contact branch has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The contact branch could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$contactBranch = $this->ContactBranch->read(null, $id);
			$this->request->data = $contactBranch;
			$this->set('contactBranch', $contactBranch);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ContactBranch->id = $id;
		if (!$this->ContactBranch->exists()) {
			throw new NotFoundException(__('Invalid contact branch'));
		}
		if ($this->ContactBranch->delete()) {
			$this->Session->setFlash(__('Contact branch deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Contact branch was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
