<?php
/**
 * TblogFixture
 *
 */
class TblogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'cod' => array('type' => 'integer', 'null' => false, 'default' => null),
		'dtdata' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'txdescricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'cod')
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
			'cod' => 1,
			'dtdata' => '2014-11-04 16:20:04',
			'txdescricao' => 'Lorem ipsum dolor sit amet'
		),
	);

}
