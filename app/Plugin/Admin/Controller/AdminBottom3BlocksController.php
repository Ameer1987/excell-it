<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminBottom3BlocksController
 *
 * @property Bottom3Block $Bottom3Block
 */
class AdminBottom3BlocksController extends AdminAppController {

	public $uses = array('Bottom3Block');

    public function index() {
	    $conditions = array();
        $bottom3BlocksTableURL = array('controller' => 'admin_bottom3_blocks', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'Bottom3Block';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'Bottom3Block' || !empty($this->Bottom3Block->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $bottom3BlocksTableURL[$key] = $value;
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

		$this->Bottom3Block->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('bottom3Blocks', $this->Paginator->paginate('Bottom3Block'));
		$this->set('bottom3BlocksTableURL', $bottom3BlocksTableURL);
        $this->set('bottom3BlocksTableModelAlias', 'Bottom3Block');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->Bottom3Block->id = $id;
        if (!$this->Bottom3Block->exists()) {
            throw new NotFoundException(__('Invalid bottom3 block'));
        }
        $bottom3Block = $this->Bottom3Block->read(null, $id);
        $this->set('bottom3Block', $bottom3Block);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->Bottom3Block->create();
			if ($this->Bottom3Block->save($this->request->data)) {
				$this->Session->setFlash(__('The bottom3 block has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->Bottom3Block->id));
				}
			} else {
				$this->Session->setFlash(__('The bottom3 block could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->Bottom3Block->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['Bottom3Block'])) $this->request->data['Bottom3Block'] = array();
                    $this->request->data['Bottom3Block'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->Bottom3Block->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->Bottom3Block->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->Bottom3Block->id = $id;
		if (!$this->Bottom3Block->exists()) {
			throw new NotFoundException(__('Invalid bottom3 block'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bottom3Block->save($this->request->data)) {
				$this->Session->setFlash(__('The bottom3 block has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The bottom3 block could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$bottom3Block = $this->Bottom3Block->read(null, $id);
			$this->request->data = $bottom3Block;
			$this->set('bottom3Block', $bottom3Block);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Bottom3Block->id = $id;
		if (!$this->Bottom3Block->exists()) {
			throw new NotFoundException(__('Invalid bottom3 block'));
		}
		if ($this->Bottom3Block->delete()) {
			$this->Session->setFlash(__('Bottom3 block deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Bottom3 block was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
