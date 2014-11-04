<?php
App::uses('Motorista', 'Model');

/**
 * Motorista Test Case
 *
 */
class MotoristaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.motorista',
		'app.abastecimento',
		'app.veiculo',
		'app.fornecedor',
		'app.usuario',
		'app.servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Motorista = ClassRegistry::init('Motorista');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Motorista);

		parent::tearDown();
	}

}
