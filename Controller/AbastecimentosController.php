<?php
App::uses('AppController', 'Controller');
/**
 * Abastecimentos Controller
 *
 * @property Abastecimento $Abastecimento
 * @property PaginatorComponent $Paginator
 */
class AbastecimentosController extends AppController {

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
		$this->Abastecimento->recursive = 0;
		$this->set('abastecimentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Abastecimento->exists($id)) {
			throw new NotFoundException(__('Invalid abastecimento'));
		}
		$options = array('conditions' => array('Abastecimento.' . $this->Abastecimento->primaryKey => $id));
		$this->set('abastecimento', $this->Abastecimento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Abastecimento->create();
			if ($this->Abastecimento->save($this->request->data)) {
				$this->Session->setFlash(__('The abastecimento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The abastecimento could not be saved. Please, try again.'));
			}
		}
		$veiculos = $this->Abastecimento->Veiculo->find('list');
		$motoristas = $this->Abastecimento->Motoristum->find('list');
		$fornecedors = $this->Abastecimento->Fornecedor->find('list');
		$usuarios = $this->Abastecimento->Usuario->find('list');
		$this->set(compact('veiculos', 'motoristas', 'fornecedors', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Abastecimento->exists($id)) {
			throw new NotFoundException(__('Invalid abastecimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Abastecimento->save($this->request->data)) {
				$this->Session->setFlash(__('The abastecimento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The abastecimento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Abastecimento.' . $this->Abastecimento->primaryKey => $id));
			$this->request->data = $this->Abastecimento->find('first', $options);
		}
		$veiculos = $this->Abastecimento->Veiculo->find('list');
		$motoristas = $this->Abastecimento->Motoristum->find('list');
		$fornecedors = $this->Abastecimento->Fornecedor->find('list');
		$usuarios = $this->Abastecimento->Usuario->find('list');
		$this->set(compact('veiculos', 'motoristas', 'fornecedors', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Abastecimento->id = $id;
		if (!$this->Abastecimento->exists()) {
			throw new NotFoundException(__('Invalid abastecimento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Abastecimento->delete()) {
			$this->Session->setFlash(__('The abastecimento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The abastecimento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
