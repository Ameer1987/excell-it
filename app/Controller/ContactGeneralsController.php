<?php
App::uses('AppController', 'Controller');
/**
 * ContactGenerals Controller
 *
 * @property ContactGeneral $ContactGeneral
 * @property PaginatorComponent $Paginator
 */
class ContactGeneralsController extends AppController {

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
		$this->ContactGeneral->recursive = 0;
		$this->set('contactGenerals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContactGeneral->exists($id)) {
			throw new NotFoundException(__('Invalid contact general'));
		}
		$options = array('conditions' => array('ContactGeneral.' . $this->ContactGeneral->primaryKey => $id));
		$this->set('contactGeneral', $this->ContactGeneral->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactGeneral->create();
			if ($this->ContactGeneral->save($this->request->data)) {
				$this->Flash->success(__('The contact general has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contact general could not be saved. Please, try again.'));
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
		if (!$this->ContactGeneral->exists($id)) {
			throw new NotFoundException(__('Invalid contact general'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContactGeneral->save($this->request->data)) {
				$this->Flash->success(__('The contact general has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contact general could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactGeneral.' . $this->ContactGeneral->primaryKey => $id));
			$this->request->data = $this->ContactGeneral->find('first', $options);
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
		$this->ContactGeneral->id = $id;
		if (!$this->ContactGeneral->exists()) {
			throw new NotFoundException(__('Invalid contact general'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContactGeneral->delete()) {
			$this->Flash->success(__('The contact general has been deleted.'));
		} else {
			$this->Flash->error(__('The contact general could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
