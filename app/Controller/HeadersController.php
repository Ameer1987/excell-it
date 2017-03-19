<?php
App::uses('AppController', 'Controller');
/**
 * Headers Controller
 *
 * @property Header $Header
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class HeadersController extends AppController {

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
		$this->Header->recursive = 0;
		$this->set('headers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Header->exists($id)) {
			throw new NotFoundException(__('Invalid header'));
		}
		$options = array('conditions' => array('Header.' . $this->Header->primaryKey => $id));
		$this->set('header', $this->Header->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Header->create();
			if ($this->Header->save($this->request->data)) {
				$this->Flash->success(__('The header has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The header could not be saved. Please, try again.'));
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
		if (!$this->Header->exists($id)) {
			throw new NotFoundException(__('Invalid header'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Header->save($this->request->data)) {
				$this->Flash->success(__('The header has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The header could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Header.' . $this->Header->primaryKey => $id));
			$this->request->data = $this->Header->find('first', $options);
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
		$this->Header->id = $id;
		if (!$this->Header->exists()) {
			throw new NotFoundException(__('Invalid header'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Header->delete()) {
			$this->Flash->success(__('The header has been deleted.'));
		} else {
			$this->Flash->error(__('The header could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Header->recursive = 0;
		$this->set('headers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Header->exists($id)) {
			throw new NotFoundException(__('Invalid header'));
		}
		$options = array('conditions' => array('Header.' . $this->Header->primaryKey => $id));
		$this->set('header', $this->Header->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Header->create();
			if ($this->Header->save($this->request->data)) {
				$this->Flash->success(__('The header has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The header could not be saved. Please, try again.'));
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
		if (!$this->Header->exists($id)) {
			throw new NotFoundException(__('Invalid header'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Header->save($this->request->data)) {
				$this->Flash->success(__('The header has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The header could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Header.' . $this->Header->primaryKey => $id));
			$this->request->data = $this->Header->find('first', $options);
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
		$this->Header->id = $id;
		if (!$this->Header->exists()) {
			throw new NotFoundException(__('Invalid header'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Header->delete()) {
			$this->Flash->success(__('The header has been deleted.'));
		} else {
			$this->Flash->error(__('The header could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
