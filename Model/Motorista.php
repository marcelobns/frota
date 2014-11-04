<?php
App::uses('AppModel', 'Model');
/**
 * Motorista Model
 *
 * @property Abastecimento $Abastecimento
 * @property Servico $Servico
 * @property Veiculo $Veiculo
 */
class Motorista extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Abastecimento' => array(
			'className' => 'Abastecimento',
			'foreignKey' => 'motorista_id',
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
			'foreignKey' => 'motorista_id',
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
		'Veiculo' => array(
			'className' => 'Veiculo',
			'foreignKey' => 'motorista_id',
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
