<?php
App::uses('AppController', 'Controller');
/**
 * Bottom4Blocks Controller
 *
 * @property Bottom4Block $Bottom4Block
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class Bottom4BlocksController extends AppController {

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
		$this->Bottom4Block->recursive = 0;
		$this->set('bottom4Blocks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bottom4Block->exists($id)) {
			throw new NotFoundException(__('Invalid bottom4 block'));
		}
		$options = array('conditions' => array('Bottom4Block.' . $this->Bottom4Block->primaryKey => $id));
		$this->set('bottom4Block', $this->Bottom4Block->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bottom4Block->create();
			if ($this->Bottom4Block->save($this->request->data)) {
				$this->Flash->success(__('The bottom4 block has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bottom4 block could not be saved. Please, try again.'));
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
		if (!$this->Bottom4Block->exists($id)) {
			throw new NotFoundException(__('Invalid bottom4 block'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bottom4Block->save($this->request->data)) {
				$this->Flash->success(__('The bottom4 block has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bottom4 block could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bottom4Block.' . $this->Bottom4Block->primaryKey => $id));
			$this->request->data = $this->Bottom4Block->find('first', $options);
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
		$this->Bottom4Block->id = $id;
		if (!$this->Bottom4Block->exists()) {
			throw new NotFoundException(__('Invalid bottom4 block'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bottom4Block->delete()) {
			$this->Flash->success(__('The bottom4 block has been deleted.'));
		} else {
			$this->Flash->error(__('The bottom4 block could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
