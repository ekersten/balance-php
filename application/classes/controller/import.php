<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Import extends Controller_DefaultTemplate {

	var $active_user;

	public function before(){
		parent::before();
		// reemplazar por login
		if(Session::instance()->get('active_user',FALSE) !== FALSE){
			$this->active_user = ORM::factory('user',Session::instance()->get('active_user',FALSE));
			View::bind_global('active_user', $this->active_user);
			View::set_global('active_section', 'import');
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

		$this->setPageTitle('Importar');
		$this->addScript('js/import.js');

		$view = View::factory('importar_home_view');

		$this->template->content = $view->render();
	}

	public function action_upload_csv() {
		$this->auto_render = FALSE;
		$rawdata = $this->request->post('value');
		$decoded = base64_decode($rawdata);

		$operations = $this->process_csv_citibank($decoded);
		usort($operations, array($this, 'sort_by_unixdate'));

		$view = View::factory('parts/import_entries_view');
		$view->set('operations', $operations);

		echo $view->render();

	}

	private function process_csv_citibank($data) {
		$operations = array();
		$rows = explode("\n", $data);
		foreach($rows as $row) {
			$row_data = explode(",", $row);
			if($row_data[0] && $row_data[1] && $row_data[3] && $row_data[4]) {
				$op = new stdClass();
				
				preg_match('/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/', $row_data[0], $matches);
				$op->date =  date('d/m/Y', strtotime($matches[2] . '/' . $matches[1] . '/' . $matches[3]));
				$op->unixdate =  date('U', strtotime($matches[2] . '/' . $matches[1] . '/' . $matches[3]));
				$op->ammount = floatval(preg_replace("/[^-0-9\.]/","",$row_data[3] . '.' . $row_data[4]));
				$op->comment = str_replace('"', '', strtolower($row_data[1]));


				array_push($operations, $op);
			}
			
		}

		return $operations;
	}

	private function sort_by_unixdate($a, $b) {
		if ($a->unixdate == $b->unixdate) {
			return 0;
		}

		return ($a->unixdate < $b->unixdate) ? -1 : 1;
	}

}