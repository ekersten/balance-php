<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends ORM{

	protected $_has_many = array(
            'accounts' => array(),
            'entries' => array(),
	);
        
    protected $_has_one = array(
        'token' => array(),
    );
}