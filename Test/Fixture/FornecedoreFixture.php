<?php
/**
 * FornecedoreFixture
 *
 */
class FornecedoreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
		'endereco' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 60),
		'telefone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'cnpj' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 18),
		'contato' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15),
		'obs' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200),
		'ativo' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'endereco' => 'Lorem ipsum dolor sit amet',
			'telefone' => 'Lorem ipsum dolor ',
			'cnpj' => 'Lorem ipsum dolo',
			'contato' => 'Lorem ipsum d',
			'obs' => 'Lorem ipsum dolor sit amet',
			'ativo' => 1
		),
	);

}
