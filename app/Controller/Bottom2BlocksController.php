<?php
App::uses('AppController', 'Controller');
/**
 * Bottom2Blocks Controller
 *
 * @property Bottom2Block $Bottom2Block
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class Bottom2BlocksController extends AppController {

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
		$this->Bottom2Block->recursive = 0;
		$this->set('bottom2Blocks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bottom2Block->exists($id)) {
			throw new NotFoundException(__('Invalid bottom2 block'));
		}
		$options = array('conditions' => array('Bottom2Block.' . $this->Bottom2Block->primaryKey => $id));
		$this->set('bottom2Block', $this->Bottom2Block->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bottom2Block->create();
			if ($this->Bottom2Block->save($this->request->data)) {
				$this->Flash->success(__('The bottom2 block has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bottom2 block could not be saved. Please, try again.'));
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
		if (!$this->Bottom2Block->exists($id)) {
			throw new NotFoundException(__('Invalid bottom2 block'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bottom2Block->save($this->request->data)) {
				$this->Flash->success(__('The bottom2 block has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bottom2 block could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bottom2Block.' . $this->Bottom2Block->primaryKey => $id));
			$this->request->data = $this->Bottom2Block->find('first', $options);
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
		$this->Bottom2Block->id = $id;
		if (!$this->Bottom2Block->exists()) {
			throw new NotFoundException(__('Invalid bottom2 block'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bottom2Block->delete()) {
			$this->Flash->success(__('The bottom2 block has been deleted.'));
		} else {
			$this->Flash->error(__('The bottom2 block could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
