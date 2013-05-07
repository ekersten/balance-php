<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reportes extends Controller_DefaultTemplate {

	var $active_user;

	public function before(){
		parent::before();
		// reemplazar por login
		if(Session::instance()->get('active_user',FALSE) !== FALSE){
			$this->active_user = ORM::factory('user',Session::instance()->get('active_user',FALSE));
			View::bind_global('active_user', $this->active_user);
			View::set_global('active_section', 'reportes');
		}else{
			$this->request->redirect('login');
		}
		

		$accounts = ORM::factory('account')->find_all();
		$categories = ORM::factory('category')->find_all();
		$types = ORM::factory('type')->find_all();
		
		View::bind_global('accounts', $accounts);
		View::bind_global('types', $types);
		View::bind_global('categories', $categories);
	}

	public function action_index(){

		$this->setPageTitle('Reportes');
		$this->addScript('js/reportes.js');

		$view = View::factory('reportes_home_view');

		$this->template->content = $view->render();
	}

	public function action_get_options() {
		$this->auto_render = FALSE;

		$response = $this->$method();

		echo $response;

	}

	public function monthly_options(){

		$view = View::factory('reports/options/monthly_view');

		
		
		return $view->render();

	}

}