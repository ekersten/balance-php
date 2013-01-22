<?php defined('SYSPATH') or die('No direct script access.');

class Model_Entry extends ORM{

	protected $_belongs_to = array(
		'user' => array(),
		'account' => array(),
		'type' => array(),
		'category' => array(),
	);

	protected $_sorting = array(
        'created' => 'DESC',
        'id' => 'DESC'
    );

    public function save(Validation $validation = NULL) {
        parent::save($validation);
        if($this->saved()){
        	$account = ORM::factory('account',$this->account_id);
        	$balance = $account->balance;
        	if($this->type_id == 1){
        		$balance -= $this->ammount;
        	}elseif($this->type_id == 2){
        		$balance += $this->ammount;
        	}
        	$account->balance = $balance;
        	$account->save();
        }
    }

    public function delete() {
        $account = ORM::factory('account',$this->account_id);
    	$balance = $account->balance;
    	if($this->type_id == 1){
    		$balance += $this->ammount;
    	}elseif($this->type_id == 2){
    		$balance -= $this->ammount;
    	}
    	$account->balance = $balance;
    	$account->save();
        parent::delete();
    }

}