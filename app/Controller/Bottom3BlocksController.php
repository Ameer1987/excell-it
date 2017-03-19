<?php
App::uses('AppController', 'Controller');
/**
 * Bottom3Blocks Controller
 *
 * @property Bottom3Block $Bottom3Block
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class Bottom3BlocksController extends AppController {

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
		$this->Bottom3Block->recursive = 0;
		$this->set('bottom3Blocks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bottom3Block->exists($id)) {
			throw new NotFoundException(__('Invalid bottom3 block'));
		}
		$options = array('conditions' => array('Bottom3Block.' . $this->Bottom3Block->primaryKey => $id));
		$this->set('bottom3Block', $this->Bottom3Block->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bottom3Block->create();
			if ($this->Bottom3Block->save($this->request->data)) {
				$this->Flash->success(__('The bottom3 block has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bottom3 block could not be saved. Please, try again.'));
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
		if (!$this->Bottom3Block->exists($id)) {
			throw new NotFoundException(__('Invalid bottom3 block'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bottom3Block->save($this->request->data)) {
				$this->Flash->success(__('The bottom3 block has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bottom3 block could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bottom3Block.' . $this->Bottom3Block->primaryKey => $id));
			$this->request->data = $this->Bottom3Block->find('first', $options);
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
		$this->Bottom3Block->id = $id;
		if (!$this->Bottom3Block->exists()) {
			throw new NotFoundException(__('Invalid bottom3 block'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bottom3Block->delete()) {
			$this->Flash->success(__('The bottom3 block has been deleted.'));
		} else {
			$this->Flash->error(__('The bottom3 block could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
