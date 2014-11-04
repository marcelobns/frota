<?php
App::uses('AppModel', 'Model');
/**
 * Veiculo Model
 *
 * @property Motorista $Motorista
 * @property Abastecimento $Abastecimento
 * @property Servico $Servico
 */
class Veiculo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Motorista' => array(
			'className' => 'Motorista',
			'foreignKey' => 'motorista_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Abastecimento' => array(
			'className' => 'Abastecimento',
			'foreignKey' => 'veiculo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Servico' => array(
			'className' => 'Servico',
			'foreignKey' => 'veiculo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
