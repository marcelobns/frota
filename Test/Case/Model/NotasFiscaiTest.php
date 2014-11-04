<?php
App::uses('NotasFiscai', 'Model');

/**
 * NotasFiscai Test Case
 *
 */
class NotasFiscaiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.notas_fiscai',
		'app.fornecedor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NotasFiscai = ClassRegistry::init('NotasFiscai');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NotasFiscai);

		parent::tearDown();
	}

}
