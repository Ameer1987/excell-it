<?php
App::uses('AppController', 'Controller');
/**
 * HomeMiddleSnippets Controller
 *
 * @property HomeMiddleSnippet $HomeMiddleSnippet
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class HomeMiddleSnippetsController extends AppController {

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
		$this->HomeMiddleSnippet->recursive = 0;
		$this->set('homeMiddleSnippets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HomeMiddleSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid home middle snippet'));
		}
		$options = array('conditions' => array('HomeMiddleSnippet.' . $this->HomeMiddleSnippet->primaryKey => $id));
		$this->set('homeMiddleSnippet', $this->HomeMiddleSnippet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HomeMiddleSnippet->create();
			if ($this->HomeMiddleSnippet->save($this->request->data)) {
				$this->Flash->success(__('The home middle snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The home middle snippet could not be saved. Please, try again.'));
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
		if (!$this->HomeMiddleSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid home middle snippet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HomeMiddleSnippet->save($this->request->data)) {
				$this->Flash->success(__('The home middle snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The home middle snippet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HomeMiddleSnippet.' . $this->HomeMiddleSnippet->primaryKey => $id));
			$this->request->data = $this->HomeMiddleSnippet->find('first', $options);
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
		$this->HomeMiddleSnippet->id = $id;
		if (!$this->HomeMiddleSnippet->exists()) {
			throw new NotFoundException(__('Invalid home middle snippet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HomeMiddleSnippet->delete()) {
			$this->Flash->success(__('The home middle snippet has been deleted.'));
		} else {
			$this->Flash->error(__('The home middle snippet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->HomeMiddleSnippet->recursive = 0;
		$this->set('homeMiddleSnippets', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->HomeMiddleSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid home middle snippet'));
		}
		$options = array('conditions' => array('HomeMiddleSnippet.' . $this->HomeMiddleSnippet->primaryKey => $id));
		$this->set('homeMiddleSnippet', $this->HomeMiddleSnippet->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->HomeMiddleSnippet->create();
			if ($this->HomeMiddleSnippet->save($this->request->data)) {
				$this->Flash->success(__('The home middle snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The home middle snippet could not be saved. Please, try again.'));
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
		if (!$this->HomeMiddleSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid home middle snippet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HomeMiddleSnippet->save($this->request->data)) {
				$this->Flash->success(__('The home middle snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The home middle snippet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HomeMiddleSnippet.' . $this->HomeMiddleSnippet->primaryKey => $id));
			$this->request->data = $this->HomeMiddleSnippet->find('first', $options);
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
		$this->HomeMiddleSnippet->id = $id;
		if (!$this->HomeMiddleSnippet->exists()) {
			throw new NotFoundException(__('Invalid home middle snippet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HomeMiddleSnippet->delete()) {
			$this->Flash->success(__('The home middle snippet has been deleted.'));
		} else {
			$this->Flash->error(__('The home middle snippet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
