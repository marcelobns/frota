<?php
App::uses('AppController', 'Controller');
/**
 * Servicos Controller
 *
 * @property Servico $Servico
 * @property PaginatorComponent $Paginator
 */
class ServicosController extends AppController {

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
		$this->Servico->recursive = 0;
		$this->set('servicos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Servico->exists($id)) {
			throw new NotFoundException(__('Invalid servico'));
		}
		$options = array('conditions' => array('Servico.' . $this->Servico->primaryKey => $id));
		$this->set('servico', $this->Servico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Servico->create();
			if ($this->Servico->save($this->request->data)) {
				$this->Session->setFlash(__('The servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The servico could not be saved. Please, try again.'));
			}
		}
		$veiculos = $this->Servico->Veiculo->find('list');
		$motoristas = $this->Servico->Motoristum->find('list');
		$fornecedors = $this->Servico->Fornecedor->find('list');
		$this->set(compact('veiculos', 'motoristas', 'fornecedors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Servico->exists($id)) {
			throw new NotFoundException(__('Invalid servico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Servico->save($this->request->data)) {
				$this->Session->setFlash(__('The servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The servico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Servico.' . $this->Servico->primaryKey => $id));
			$this->request->data = $this->Servico->find('first', $options);
		}
		$veiculos = $this->Servico->Veiculo->find('list');
		$motoristas = $this->Servico->Motoristum->find('list');
		$fornecedors = $this->Servico->Fornecedor->find('list');
		$this->set(compact('veiculos', 'motoristas', 'fornecedors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Servico->id = $id;
		if (!$this->Servico->exists()) {
			throw new NotFoundException(__('Invalid servico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Servico->delete()) {
			$this->Session->setFlash(__('The servico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The servico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
