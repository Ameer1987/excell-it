<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminBottom1BlocksController
 *
 * @property Bottom1Block $Bottom1Block
 */
class AdminBottom1BlocksController extends AdminAppController {

	public $uses = array('Bottom1Block');

    public function index() {
	    $conditions = array();
        $bottom1BlocksTableURL = array('controller' => 'admin_bottom1_blocks', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'Bottom1Block';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'Bottom1Block' || !empty($this->Bottom1Block->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $bottom1BlocksTableURL[$key] = $value;
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

		$this->Bottom1Block->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('bottom1Blocks', $this->Paginator->paginate('Bottom1Block'));
		$this->set('bottom1BlocksTableURL', $bottom1BlocksTableURL);
        $this->set('bottom1BlocksTableModelAlias', 'Bottom1Block');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->Bottom1Block->id = $id;
        if (!$this->Bottom1Block->exists()) {
            throw new NotFoundException(__('Invalid bottom1 block'));
        }
        $bottom1Block = $this->Bottom1Block->read(null, $id);
        $this->set('bottom1Block', $bottom1Block);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->Bottom1Block->create();
			if ($this->Bottom1Block->save($this->request->data)) {
				$this->Session->setFlash(__('The bottom1 block has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->Bottom1Block->id));
				}
			} else {
				$this->Session->setFlash(__('The bottom1 block could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->Bottom1Block->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['Bottom1Block'])) $this->request->data['Bottom1Block'] = array();
                    $this->request->data['Bottom1Block'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->Bottom1Block->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->Bottom1Block->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->Bottom1Block->id = $id;
		if (!$this->Bottom1Block->exists()) {
			throw new NotFoundException(__('Invalid bottom1 block'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bottom1Block->save($this->request->data)) {
				$this->Session->setFlash(__('The bottom1 block has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The bottom1 block could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$bottom1Block = $this->Bottom1Block->read(null, $id);
			$this->request->data = $bottom1Block;
			$this->set('bottom1Block', $bottom1Block);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Bottom1Block->id = $id;
		if (!$this->Bottom1Block->exists()) {
			throw new NotFoundException(__('Invalid bottom1 block'));
		}
		if ($this->Bottom1Block->delete()) {
			$this->Session->setFlash(__('Bottom1 block deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Bottom1 block was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
