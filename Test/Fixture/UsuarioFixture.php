<?php
/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200),
		'setor_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
		'cadastro' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'consulta' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'relatorio' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'manutencao' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'emissao' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'solicita_carro' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'autoriza_carro' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'consulta_solicita' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'consulta_autoriza' => array('type' => 'boolean', 'null' => true, 'default' => false),
		'cartucho' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'username' => 'Lorem ipsum dolor sit amet',
			'setor_id' => 1,
			'password' => 'Lorem ipsum dolor ',
			'cadastro' => 1,
			'consulta' => 1,
			'relatorio' => 1,
			'manutencao' => 1,
			'emissao' => 1,
			'solicita_carro' => 1,
			'autoriza_carro' => 1,
			'consulta_solicita' => 1,
			'consulta_autoriza' => 1,
			'cartucho' => 1,
			'ativo' => 1
		),
	);

}
