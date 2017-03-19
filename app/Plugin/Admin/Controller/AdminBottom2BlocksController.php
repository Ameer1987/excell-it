<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminBottom2BlocksController
 *
 * @property Bottom2Block $Bottom2Block
 */
class AdminBottom2BlocksController extends AdminAppController {

	public $uses = array('Bottom2Block');

    public function index() {
	    $conditions = array();
        $bottom2BlocksTableURL = array('controller' => 'admin_bottom2_blocks', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'Bottom2Block';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'Bottom2Block' || !empty($this->Bottom2Block->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $bottom2BlocksTableURL[$key] = $value;
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

		$this->Bottom2Block->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('bottom2Blocks', $this->Paginator->paginate('Bottom2Block'));
		$this->set('bottom2BlocksTableURL', $bottom2BlocksTableURL);
        $this->set('bottom2BlocksTableModelAlias', 'Bottom2Block');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->Bottom2Block->id = $id;
        if (!$this->Bottom2Block->exists()) {
            throw new NotFoundException(__('Invalid bottom2 block'));
        }
        $bottom2Block = $this->Bottom2Block->read(null, $id);
        $this->set('bottom2Block', $bottom2Block);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->Bottom2Block->create();
			if ($this->Bottom2Block->save($this->request->data)) {
				$this->Session->setFlash(__('The bottom2 block has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->Bottom2Block->id));
				}
			} else {
				$this->Session->setFlash(__('The bottom2 block could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->Bottom2Block->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['Bottom2Block'])) $this->request->data['Bottom2Block'] = array();
                    $this->request->data['Bottom2Block'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->Bottom2Block->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->Bottom2Block->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->Bottom2Block->id = $id;
		if (!$this->Bottom2Block->exists()) {
			throw new NotFoundException(__('Invalid bottom2 block'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bottom2Block->save($this->request->data)) {
				$this->Session->setFlash(__('The bottom2 block has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The bottom2 block could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$bottom2Block = $this->Bottom2Block->read(null, $id);
			$this->request->data = $bottom2Block;
			$this->set('bottom2Block', $bottom2Block);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Bottom2Block->id = $id;
		if (!$this->Bottom2Block->exists()) {
			throw new NotFoundException(__('Invalid bottom2 block'));
		}
		if ($this->Bottom2Block->delete()) {
			$this->Session->setFlash(__('Bottom2 block deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Bottom2 block was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
