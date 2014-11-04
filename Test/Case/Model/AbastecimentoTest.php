<?php
App::uses('Abastecimento', 'Model');

/**
 * Abastecimento Test Case
 *
 */
class AbastecimentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.abastecimento',
		'app.veiculo',
		'app.motorista',
		'app.fornecedor',
		'app.usuario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Abastecimento = ClassRegistry::init('Abastecimento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Abastecimento);

		parent::tearDown();
	}

}
