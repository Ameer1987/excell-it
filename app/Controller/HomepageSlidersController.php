<?php
App::uses('AppController', 'Controller');
/**
 * HomepageSliders Controller
 *
 * @property HomepageSlider $HomepageSlider
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class HomepageSlidersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HomepageSlider->recursive = 0;
		$this->set('homepageSliders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HomepageSlider->exists($id)) {
			throw new NotFoundException(__('Invalid homepage slider'));
		}
		$options = array('conditions' => array('HomepageSlider.' . $this->HomepageSlider->primaryKey => $id));
		$this->set('homepageSlider', $this->HomepageSlider->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HomepageSlider->create();
			if ($this->HomepageSlider->save($this->request->data)) {
				$this->Flash->success(__('The homepage slider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The homepage slider could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HomepageSlider->exists($id)) {
			throw new NotFoundException(__('Invalid homepage slider'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HomepageSlider->save($this->request->data)) {
				$this->Flash->success(__('The homepage slider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The homepage slider could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HomepageSlider.' . $this->HomepageSlider->primaryKey => $id));
			$this->request->data = $this->HomepageSlider->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HomepageSlider->id = $id;
		if (!$this->HomepageSlider->exists()) {
			throw new NotFoundException(__('Invalid homepage slider'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HomepageSlider->delete()) {
			$this->Flash->success(__('The homepage slider has been deleted.'));
		} else {
			$this->Flash->error(__('The homepage slider could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->HomepageSlider->recursive = 0;
		$this->set('homepageSliders', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HomepageSlider->exists($id)) {
			throw new NotFoundException(__('Invalid homepage slider'));
		}
		$options = array('conditions' => array('HomepageSlider.' . $this->HomepageSlider->primaryKey => $id));
		$this->set('homepageSlider', $this->HomepageSlider->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HomepageSlider->create();
			if ($this->HomepageSlider->save($this->request->data)) {
				$this->Flash->success(__('The homepage slider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The homepage slider could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->HomepageSlider->exists($id)) {
			throw new NotFoundException(__('Invalid homepage slider'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HomepageSlider->save($this->request->data)) {
				$this->Flash->success(__('The homepage slider has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The homepage slider could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HomepageSlider.' . $this->HomepageSlider->primaryKey => $id));
			$this->request->data = $this->HomepageSlider->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->HomepageSlider->id = $id;
		if (!$this->HomepageSlider->exists()) {
			throw new NotFoundException(__('Invalid homepage slider'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HomepageSlider->delete()) {
			$this->Flash->success(__('The homepage slider has been deleted.'));
		} else {
			$this->Flash->error(__('The homepage slider could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
