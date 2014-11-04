<?php
App::uses('AppModel', 'Model');
/**
 * NotasFiscai Model
 *
 * @property Fornecedor $Fornecedor
 */
class NotaFiscal extends AppModel {

	public $useTable = 'notas_fiscais';
	
	public $belongsTo = array(
		'Fornecedor' => array(
			'className' => 'Fornecedor',
			'foreignKey' => 'fornecedor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
