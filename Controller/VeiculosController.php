<?php
App::uses('AppController', 'Controller');
/**
 * Veiculos Controller
 *
 * @property Veiculo $Veiculo
 * @property PaginatorComponent $Paginator
 */
class VeiculosController extends AppController {

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
		$this->Veiculo->recursive = 0;
		$this->set('veiculos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Veiculo->exists($id)) {
			throw new NotFoundException(__('Invalid veiculo'));
		}
		$options = array('conditions' => array('Veiculo.' . $this->Veiculo->primaryKey => $id));
		$this->set('veiculo', $this->Veiculo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Veiculo->create();
			if ($this->Veiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The veiculo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The veiculo could not be saved. Please, try again.'));
			}
		}
		$motoristas = $this->Veiculo->Motoristum->find('list');
		$this->set(compact('motoristas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Veiculo->exists($id)) {
			throw new NotFoundException(__('Invalid veiculo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Veiculo->save($this->request->data)) {
				$this->Session->setFlash(__('The veiculo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The veiculo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Veiculo.' . $this->Veiculo->primaryKey => $id));
			$this->request->data = $this->Veiculo->find('first', $options);
		}
		$motoristas = $this->Veiculo->Motoristum->find('list');
		$this->set(compact('motoristas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Veiculo->id = $id;
		if (!$this->Veiculo->exists()) {
			throw new NotFoundException(__('Invalid veiculo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Veiculo->delete()) {
			$this->Session->setFlash(__('The veiculo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The veiculo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
