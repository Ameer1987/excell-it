<?php
App::uses('AppController', 'Controller');
/**
 * HomeUpperSnippets Controller
 *
 * @property HomeUpperSnippet $HomeUpperSnippet
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class HomeUpperSnippetsController extends AppController {

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
		$this->HomeUpperSnippet->recursive = 0;
		$this->set('homeUpperSnippets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HomeUpperSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid home upper snippet'));
		}
		$options = array('conditions' => array('HomeUpperSnippet.' . $this->HomeUpperSnippet->primaryKey => $id));
		$this->set('homeUpperSnippet', $this->HomeUpperSnippet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HomeUpperSnippet->create();
			if ($this->HomeUpperSnippet->save($this->request->data)) {
				$this->Flash->success(__('The home upper snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The home upper snippet could not be saved. Please, try again.'));
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
		if (!$this->HomeUpperSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid home upper snippet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HomeUpperSnippet->save($this->request->data)) {
				$this->Flash->success(__('The home upper snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The home upper snippet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HomeUpperSnippet.' . $this->HomeUpperSnippet->primaryKey => $id));
			$this->request->data = $this->HomeUpperSnippet->find('first', $options);
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
		$this->HomeUpperSnippet->id = $id;
		if (!$this->HomeUpperSnippet->exists()) {
			throw new NotFoundException(__('Invalid home upper snippet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HomeUpperSnippet->delete()) {
			$this->Flash->success(__('The home upper snippet has been deleted.'));
		} else {
			$this->Flash->error(__('The home upper snippet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->HomeUpperSnippet->recursive = 0;
		$this->set('homeUpperSnippets', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HomeUpperSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid home upper snippet'));
		}
		$options = array('conditions' => array('HomeUpperSnippet.' . $this->HomeUpperSnippet->primaryKey => $id));
		$this->set('homeUpperSnippet', $this->HomeUpperSnippet->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HomeUpperSnippet->create();
			if ($this->HomeUpperSnippet->save($this->request->data)) {
				$this->Flash->success(__('The home upper snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The home upper snippet could not be saved. Please, try again.'));
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
		if (!$this->HomeUpperSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid home upper snippet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HomeUpperSnippet->save($this->request->data)) {
				$this->Flash->success(__('The home upper snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The home upper snippet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HomeUpperSnippet.' . $this->HomeUpperSnippet->primaryKey => $id));
			$this->request->data = $this->HomeUpperSnippet->find('first', $options);
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
		$this->HomeUpperSnippet->id = $id;
		if (!$this->HomeUpperSnippet->exists()) {
			throw new NotFoundException(__('Invalid home upper snippet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HomeUpperSnippet->delete()) {
			$this->Flash->success(__('The home upper snippet has been deleted.'));
		} else {
			$this->Flash->error(__('The home upper snippet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
