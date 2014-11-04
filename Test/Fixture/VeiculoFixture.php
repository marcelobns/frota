<?php
/**
 * VeiculoFixture
 *
 */
class VeiculoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'responsavel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'veiculo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'placa' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7),
		'motorista_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ativo' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'tbveiculo_txplacas_key' => array('unique' => true, 'column' => 'placa')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'responsavel' => 'Lorem ipsum dolor sit amet',
			'veiculo' => 'Lorem ipsum dolor ',
			'placa' => 'Lorem',
			'motorista_id' => 1,
			'ativo' => 1
		),
	);

}
