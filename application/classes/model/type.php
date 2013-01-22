<?php defined('SYSPATH') or die('No direct script access.');

class Model_Type extends ORM{

	protected $_has_many = array(
		'entries' => array()
	);

}