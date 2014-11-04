<?php
App::uses('Tbcartucho', 'Model');

/**
 * Tbcartucho Test Case
 *
 */
class TbcartuchoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tbcartucho'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tbcartucho = ClassRegistry::init('Tbcartucho');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tbcartucho);

		parent::tearDown();
	}

}
