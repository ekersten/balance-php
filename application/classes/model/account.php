<?php defined('SYSPATH') or die('No direct script access.');

class Model_Account extends ORM{

	protected $_has_many = array(
		'entries' => array()
	);

	protected $_belongs_to = array(
		'user' => array(),
	);

	protected $_sorting = array(
		'name' => 'ASC'
	);

}