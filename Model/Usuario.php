<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Setor $Setor
 * @property Abastecimento $Abastecimento
 */
class Usuario extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Setor' => array(
			'className' => 'Setor',
			'foreignKey' => 'setor_id',
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
			'foreignKey' => 'usuario_id',
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
