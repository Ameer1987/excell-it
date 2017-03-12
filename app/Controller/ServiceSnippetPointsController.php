<?php
App::uses('AppController', 'Controller');
/**
 * ServiceSnippetPoints Controller
 *
 * @property ServiceSnippetPoint $ServiceSnippetPoint
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ServiceSnippetPointsController extends AppController {

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
		$this->ServiceSnippetPoint->recursive = 0;
		$this->set('serviceSnippetPoints', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ServiceSnippetPoint->exists($id)) {
			throw new NotFoundException(__('Invalid service snippet point'));
		}
		$options = array('conditions' => array('ServiceSnippetPoint.' . $this->ServiceSnippetPoint->primaryKey => $id));
		$this->set('serviceSnippetPoint', $this->ServiceSnippetPoint->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ServiceSnippetPoint->create();
			if ($this->ServiceSnippetPoint->save($this->request->data)) {
				$this->Flash->success(__('The service snippet point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The service snippet point could not be saved. Please, try again.'));
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
		if (!$this->ServiceSnippetPoint->exists($id)) {
			throw new NotFoundException(__('Invalid service snippet point'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ServiceSnippetPoint->save($this->request->data)) {
				$this->Flash->success(__('The service snippet point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The service snippet point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ServiceSnippetPoint.' . $this->ServiceSnippetPoint->primaryKey => $id));
			$this->request->data = $this->ServiceSnippetPoint->find('first', $options);
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
		$this->ServiceSnippetPoint->id = $id;
		if (!$this->ServiceSnippetPoint->exists()) {
			throw new NotFoundException(__('Invalid service snippet point'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ServiceSnippetPoint->delete()) {
			$this->Flash->success(__('The service snippet point has been deleted.'));
		} else {
			$this->Flash->error(__('The service snippet point could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ServiceSnippetPoint->recursive = 0;
		$this->set('serviceSnippetPoints', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ServiceSnippetPoint->exists($id)) {
			throw new NotFoundException(__('Invalid service snippet point'));
		}
		$options = array('conditions' => array('ServiceSnippetPoint.' . $this->ServiceSnippetPoint->primaryKey => $id));
		$this->set('serviceSnippetPoint', $this->ServiceSnippetPoint->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ServiceSnippetPoint->create();
			if ($this->ServiceSnippetPoint->save($this->request->data)) {
				$this->Flash->success(__('The service snippet point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The service snippet point could not be saved. Please, try again.'));
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
		if (!$this->ServiceSnippetPoint->exists($id)) {
			throw new NotFoundException(__('Invalid service snippet point'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ServiceSnippetPoint->save($this->request->data)) {
				$this->Flash->success(__('The service snippet point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The service snippet point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ServiceSnippetPoint.' . $this->ServiceSnippetPoint->primaryKey => $id));
			$this->request->data = $this->ServiceSnippetPoint->find('first', $options);
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
		$this->ServiceSnippetPoint->id = $id;
		if (!$this->ServiceSnippetPoint->exists()) {
			throw new NotFoundException(__('Invalid service snippet point'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ServiceSnippetPoint->delete()) {
			$this->Flash->success(__('The service snippet point has been deleted.'));
		} else {
			$this->Flash->error(__('The service snippet point could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
