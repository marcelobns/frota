<?php
/**
 * NotasFiscaiFixture
 *
 */
class NotasFiscaiFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'numero' => array('type' => 'integer', 'null' => true, 'default' => null),
		'fornecedor_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'emissao' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_saida' => array('type' => 'date', 'null' => true, 'default' => null),
		'valor_total' => array('type' => 'float', 'null' => true, 'default' => null),
		'qtd_gasolina' => array('type' => 'float', 'null' => true, 'default' => null),
		'qtd_diesel' => array('type' => 'float', 'null' => true, 'default' => null),
		'qtd_alcool' => array('type' => 'float', 'null' => true, 'default' => null),
		'valor_gasolina' => array('type' => 'float', 'null' => true, 'default' => null),
		'valor_diesel' => array('type' => 'float', 'null' => true, 'default' => null),
		'valor_alcool' => array('type' => 'float', 'null' => true, 'default' => null),
		'total_gasolina' => array('type' => 'float', 'null' => true, 'default' => null),
		'total_diesel' => array('type' => 'float', 'null' => true, 'default' => null),
		'total_alcool' => array('type' => 'float', 'null' => true, 'default' => null),
		'obs' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'tbnotafiscal_nnumnota_key' => array('unique' => true, 'column' => 'numero')
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
			'numero' => 1,
			'fornecedor_id' => 1,
			'emissao' => '2014-11-04',
			'data_saida' => '2014-11-04',
			'valor_total' => 1,
			'qtd_gasolina' => 1,
			'qtd_diesel' => 1,
			'qtd_alcool' => 1,
			'valor_gasolina' => 1,
			'valor_diesel' => 1,
			'valor_alcool' => 1,
			'total_gasolina' => 1,
			'total_diesel' => 1,
			'total_alcool' => 1,
			'obs' => 'Lorem ipsum dolor sit amet'
		),
	);

}
