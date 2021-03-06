<?php
App::uses('Veiculo', 'Model');

/**
 * Veiculo Test Case
 *
 */
class VeiculoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.veiculo',
		'app.motorista',
		'app.abastecimento',
		'app.fornecedor',
		'app.usuario',
		'app.setor',
		'app.servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Veiculo = ClassRegistry::init('Veiculo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Veiculo);

		parent::tearDown();
	}

}
