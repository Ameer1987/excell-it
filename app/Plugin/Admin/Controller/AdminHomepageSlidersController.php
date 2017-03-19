<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * AdminHomepageSlidersController
 *
 * @property HomepageSlider $HomepageSlider
 */
class AdminHomepageSlidersController extends AdminAppController {

	public $uses = array('HomepageSlider');

    public function index() {
	    $conditions = array();
        $homepageSlidersTableURL = array('controller' => 'admin_homepage_sliders', 'action' => 'index');

        //join get query & named params
        $params = array_merge($this->request->params['named']);
        foreach($this->request->query as $key => $value) $params[$key] = $value;

        foreach($params as $key => $value) {
            $split = explode('-', $key);
            $modelName = (sizeof($split) > 1) ? $split[0] : 'HomepageSlider';
            $property = (sizeof($split) > 1) ? $split[1] : $key;
            if($modelName == 'HomepageSlider' || !empty($this->HomepageSlider->belongsTo[$modelName])) {
                $this->loadModel($modelName);
                $modelObj = new $modelName();
                if(!empty($modelObj)) {
                    $columnType = $modelObj->getColumnType($property);
                    if(!empty($columnType)){
                        //add it to url
                        $homepageSlidersTableURL[$key] = $value;
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

		$this->HomepageSlider->recursive = 0;
		$this->paginate = array('conditions' => $conditions, 'limit' => 15);
        $this->set('homepageSliders', $this->Paginator->paginate('HomepageSlider'));
		$this->set('homepageSlidersTableURL', $homepageSlidersTableURL);
        $this->set('homepageSlidersTableModelAlias', 'HomepageSlider');
		//render as local table if it is an ajax request
        if($this->request->is('ajax'))
        {
            $this->render('table');
        }
	}
    
    public function view($id = null) {
        $this->HomepageSlider->id = $id;
        if (!$this->HomepageSlider->exists()) {
            throw new NotFoundException(__('Invalid homepage slider'));
        }
        $homepageSlider = $this->HomepageSlider->read(null, $id);
        $this->set('homepageSlider', $homepageSlider);
    }
    
	public function add() {
		if ($this->request->is('post')) {
			$this->HomepageSlider->create();
			if ($this->HomepageSlider->save($this->request->data)) {
				$this->Session->setFlash(__('The homepage slider has been saved'), 'default', array(), 'good');
                if(!empty($this->request->query['redirect'])) {
					$this->redirect($this->redirectUrl);
				} else {
					$this->redirect(array('action' => 'view', $this->HomepageSlider->id));
				}
			} else {
				$this->Session->setFlash(__('The homepage slider could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
            //add the named params as data
            foreach($this->request->params['named'] as $param => $value) {
                $columnType = $this->HomepageSlider->getColumnType($param);
                if(!empty($columnType)) {
                    if(empty($this->request->data['HomepageSlider'])) $this->request->data['HomepageSlider'] = array();
                    $this->request->data['HomepageSlider'][$param] = $value;
                    //is this a reference to a related object?
                    foreach ($this->HomepageSlider->belongsTo as $relationName => $relationInfo) {
                    	if($relationInfo['foreignKey'] == $param) {
                    		$relatedRecord = $this->HomepageSlider->$relationInfo['className']->find('first', array('conditions' => array($relationInfo['className'] . '.id' => $value), 'recursive' => 0));
                    		$this->set(Inflector::variable($relationInfo['className']), $relatedRecord);
                    	}
                    }
                }
            }
        }
	}


	public function edit($id = null) {
		$this->HomepageSlider->id = $id;
		if (!$this->HomepageSlider->exists()) {
			throw new NotFoundException(__('Invalid homepage slider'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HomepageSlider->save($this->request->data)) {
				$this->Session->setFlash(__('The homepage slider has been saved'), 'default', array(), 'good');
				$this->redirect($this->redirectUrl);
			} else {
				$this->Session->setFlash(__('The homepage slider could not be saved. Please, try again.'), 'default', array(), 'bad');
			}
		} else {
			$homepageSlider = $this->HomepageSlider->read(null, $id);
			$this->request->data = $homepageSlider;
			$this->set('homepageSlider', $homepageSlider);
		}
	}


	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->HomepageSlider->id = $id;
		if (!$this->HomepageSlider->exists()) {
			throw new NotFoundException(__('Invalid homepage slider'));
		}
		if ($this->HomepageSlider->delete()) {
			$this->Session->setFlash(__('Homepage slider deleted'), 'default', array(), 'good');
            $this->redirect($this->redirectUrl);
		}
		$this->Session->setFlash(__('Homepage slider was not deleted'), 'default', array(), 'bad');
		$this->redirect(array('action' => 'index'));
	}

}
