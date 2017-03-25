<?php
App::uses('AppController', 'Controller');
/**
 * ContactBranches Controller
 *
 * @property ContactBranch $ContactBranch
 * @property PaginatorComponent $Paginator
 */
class ContactBranchesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContactBranch->recursive = 0;
		$this->set('contactBranches', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContactBranch->exists($id)) {
			throw new NotFoundException(__('Invalid contact branch'));
		}
		$options = array('conditions' => array('ContactBranch.' . $this->ContactBranch->primaryKey => $id));
		$this->set('contactBranch', $this->ContactBranch->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactBranch->create();
			if ($this->ContactBranch->save($this->request->data)) {
				$this->Flash->success(__('The contact branch has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contact branch could not be saved. Please, try again.'));
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
		if (!$this->ContactBranch->exists($id)) {
			throw new NotFoundException(__('Invalid contact branch'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContactBranch->save($this->request->data)) {
				$this->Flash->success(__('The contact branch has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contact branch could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactBranch.' . $this->ContactBranch->primaryKey => $id));
			$this->request->data = $this->ContactBranch->find('first', $options);
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
		$this->ContactBranch->id = $id;
		if (!$this->ContactBranch->exists()) {
			throw new NotFoundException(__('Invalid contact branch'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContactBranch->delete()) {
			$this->Flash->success(__('The contact branch has been deleted.'));
		} else {
			$this->Flash->error(__('The contact branch could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
