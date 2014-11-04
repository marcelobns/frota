<?php
App::uses('Tblog', 'Model');

/**
 * Tblog Test Case
 *
 */
class TblogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tblog'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tblog = ClassRegistry::init('Tblog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tblog);

		parent::tearDown();
	}

}
