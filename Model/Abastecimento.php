<?php
App::uses('AppModel', 'Model');
/**
 * Abastecimento Model
 *
 * @property Veiculo $Veiculo
 * @property Motorista $Motorista
 * @property Fornecedor $Fornecedor
 * @property Usuario $Usuario
 */
class Abastecimento extends AppModel {

	public $belongsTo = array(
		'Veiculo' => array(
			'className' => 'Veiculo',
			'foreignKey' => 'veiculo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Motorista' => array(
			'className' => 'Motorista',
			'foreignKey' => 'motorista_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Fornecedor' => array(
			'className' => 'Fornecedor',
			'foreignKey' => 'fornecedor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
