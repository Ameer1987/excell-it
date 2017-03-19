<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminBottom4BlocksController
 *
 * @property Bottom4Block $Bottom4Block
 */
class AdminBottom4BlocksController extends AdminAppController {

	public $uses = array('Bottom4Block');

    public function index() {
	    $conditions = array();
        $bottom4BlocksTableURL = array('controller' => 'admin_bottom4_blocks', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'Bottom4Block';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'Bottom4Block' || !empty($this->Bottom4Block->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $bottom4BlocksTableURL[$key] = $value;
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

		$this->Bottom4Block->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('bottom4Blocks', $this->Paginator->paginate('Bottom4Block'));
		$this->set('bottom4BlocksTableURL', $bottom4BlocksTableURL);
        $this->set('bottom4BlocksTableModelAlias', 'Bottom4Block');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->Bottom4Block->id = $id;
        if (!$this->Bottom4Block->exists()) {
            throw new NotFoundException(__('Invalid bottom4 block'));
        }
        $bottom4Block = $this->Bottom4Block->read(null, $id);
        $this->set('bottom4Block', $bottom4Block);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->Bottom4Block->create();
			if ($this->Bottom4Block->save($this->request->data)) {
				$this->Session->setFlash(__('The bottom4 block has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->Bottom4Block->id));
				}
			} else {
				$this->Session->setFlash(__('The bottom4 block could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->Bottom4Block->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['Bottom4Block'])) $this->request->data['Bottom4Block'] = array();
                    $this->request->data['Bottom4Block'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->Bottom4Block->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->Bottom4Block->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->Bottom4Block->id = $id;
		if (!$this->Bottom4Block->exists()) {
			throw new NotFoundException(__('Invalid bottom4 block'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bottom4Block->save($this->request->data)) {
				$this->Session->setFlash(__('The bottom4 block has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The bottom4 block could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$bottom4Block = $this->Bottom4Block->read(null, $id);
			$this->request->data = $bottom4Block;
			$this->set('bottom4Block', $bottom4Block);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Bottom4Block->id = $id;
		if (!$this->Bottom4Block->exists()) {
			throw new NotFoundException(__('Invalid bottom4 block'));
		}
		if ($this->Bottom4Block->delete()) {
			$this->Session->setFlash(__('Bottom4 block deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Bottom4 block was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
