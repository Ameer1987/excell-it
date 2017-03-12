<?php
App::uses('AppController', 'Controller');
/**
 * ServiceSnippets Controller
 *
 * @property ServiceSnippet $ServiceSnippet
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ServiceSnippetsController extends AppController {

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
		$this->ServiceSnippet->recursive = 0;
		$this->set('serviceSnippets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ServiceSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid service snippet'));
		}
		$options = array('conditions' => array('ServiceSnippet.' . $this->ServiceSnippet->primaryKey => $id));
		$this->set('serviceSnippet', $this->ServiceSnippet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ServiceSnippet->create();
			if ($this->ServiceSnippet->save($this->request->data)) {
				$this->Flash->success(__('The service snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The service snippet could not be saved. Please, try again.'));
			}
		}
		$serviceSnippetPoints = $this->ServiceSnippet->ServiceSnippetPoint->find('list');
		$this->set(compact('serviceSnippetPoints'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ServiceSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid service snippet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ServiceSnippet->save($this->request->data)) {
				$this->Flash->success(__('The service snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The service snippet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ServiceSnippet.' . $this->ServiceSnippet->primaryKey => $id));
			$this->request->data = $this->ServiceSnippet->find('first', $options);
		}
		$serviceSnippetPoints = $this->ServiceSnippet->ServiceSnippetPoint->find('list');
		$this->set(compact('serviceSnippetPoints'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ServiceSnippet->id = $id;
		if (!$this->ServiceSnippet->exists()) {
			throw new NotFoundException(__('Invalid service snippet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ServiceSnippet->delete()) {
			$this->Flash->success(__('The service snippet has been deleted.'));
		} else {
			$this->Flash->error(__('The service snippet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ServiceSnippet->recursive = 0;
		$this->set('serviceSnippets', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ServiceSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid service snippet'));
		}
		$options = array('conditions' => array('ServiceSnippet.' . $this->ServiceSnippet->primaryKey => $id));
		$this->set('serviceSnippet', $this->ServiceSnippet->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ServiceSnippet->create();
			if ($this->ServiceSnippet->save($this->request->data)) {
				$this->Flash->success(__('The service snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The service snippet could not be saved. Please, try again.'));
			}
		}
		$serviceSnippetPoints = $this->ServiceSnippet->ServiceSnippetPoint->find('list');
		$this->set(compact('serviceSnippetPoints'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ServiceSnippet->exists($id)) {
			throw new NotFoundException(__('Invalid service snippet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ServiceSnippet->save($this->request->data)) {
				$this->Flash->success(__('The service snippet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The service snippet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ServiceSnippet.' . $this->ServiceSnippet->primaryKey => $id));
			$this->request->data = $this->ServiceSnippet->find('first', $options);
		}
		$serviceSnippetPoints = $this->ServiceSnippet->ServiceSnippetPoint->find('list');
		$this->set(compact('serviceSnippetPoints'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ServiceSnippet->id = $id;
		if (!$this->ServiceSnippet->exists()) {
			throw new NotFoundException(__('Invalid service snippet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ServiceSnippet->delete()) {
			$this->Flash->success(__('The service snippet has been deleted.'));
		} else {
			$this->Flash->error(__('The service snippet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
