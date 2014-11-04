<?php
App::uses('AppController', 'Controller');

class NotasFiscaisController extends AppController {
	public $uses = array('NotaFiscal');
	public $components = array('Paginator');

	public function index() {
		$this->NotaFiscal->recursive = 0;
		$this->set('notas_fiscais', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->NotaFiscal->exists($id)) {
			throw new NotFoundException(__('Invalid NotaFiscal'));
		}
		$options = array('conditions' => array('NotaFiscal.' . $this->NotaFiscal->primaryKey => $id));
		$this->set('NotaFiscal', $this->NotaFiscal->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->NotaFiscal->create();
			if ($this->NotaFiscal->save($this->request->data)) {
				$this->Session->setFlash(__('The NotaFiscal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The NotaFiscal could not be saved. Please, try again.'));
			}
		}		
		$fornecedors = $this->NotaFiscal->Fornecedor->find('list');		
		$this->set(compact('fornecedors'));
	}

	public function edit($id = null) {
		if (!$this->NotaFiscal->exists($id)) {
			throw new NotFoundException(__('Invalid NotaFiscal'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->NotaFiscal->save($this->request->data)) {
				$this->Session->setFlash(__('The NotaFiscal has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The NotaFiscal could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('NotaFiscal.' . $this->NotaFiscal->primaryKey => $id));
			$this->request->data = $this->NotaFiscal->find('first', $options);
		}		
		$fornecedors = $this->NotaFiscal->Fornecedor->find('list');		
		$this->set(compact('fornecedors'));
	}

	public function delete($id = null) {
		$this->NotaFiscal->id = $id;
		if (!$this->NotaFiscal->exists()) {
			throw new NotFoundException(__('Invalid NotaFiscal'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->NotaFiscal->delete()) {
			$this->Session->setFlash(__('The NotaFiscal has been deleted.'));
		} else {
			$this->Session->setFlash(__('The NotaFiscal could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
