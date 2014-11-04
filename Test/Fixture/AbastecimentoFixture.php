<?php
/**
 * AbastecimentoFixture
 *
 */
class AbastecimentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'veiculo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'motorista_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_abastecimento' => array('type' => 'date', 'null' => true, 'default' => null),
		'combustivel' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nquantabast' => array('type' => 'integer', 'null' => true, 'default' => null),
		'km_anterior' => array('type' => 'integer', 'null' => true, 'default' => null),
		'km_atual' => array('type' => 'integer', 'null' => true, 'default' => null),
		'consumo_medio' => array('type' => 'decimal', 'null' => true, 'default' => null),
		'km_rodado' => array('type' => 'integer', 'null' => true, 'default' => null),
		'data_solicitacao' => array('type' => 'date', 'null' => true, 'default' => null),
		'fornecedor_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'usuario_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'observacao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'requerimento' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
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
			'veiculo_id' => 1,
			'motorista_id' => 1,
			'data_abastecimento' => '2014-11-04',
			'combustivel' => 1,
			'nquantabast' => 1,
			'km_anterior' => 1,
			'km_atual' => 1,
			'consumo_medio' => '',
			'km_rodado' => 1,
			'data_solicitacao' => '2014-11-04',
			'fornecedor_id' => 1,
			'usuario_id' => 1,
			'observacao' => 'Lorem ipsum dolor sit amet',
			'requerimento' => 1
		),
	);

}
