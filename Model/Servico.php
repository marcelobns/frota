<?php
App::uses('AppModel', 'Model');
/**
 * Servico Model
 *
 * @property Veiculo $Veiculo
 * @property Motorista $Motorista
 * @property Fornecedor $Fornecedor
 */
class Servico extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descricao' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
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
		)
	);
}
