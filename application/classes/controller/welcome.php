<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_index(){
		$view = View::factory('listado_view');

		$entries = ORM::factory('entry')->limit(100)->find_all();

		$view->bind('entries', $entries);

		$this->response->body($view->render());
	}

}