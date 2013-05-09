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
		$method = $this->request->param('id') . '_options';
		$response = $this->$method();

		$this->response->body($response);

	}

	public function action_results(){
		$this->auto_render = FALSE;

		$method = $this->request->post('type') . '_results';

		$response = $this->$method($this->request->post());

		$this->response->body($response);
	}

	public function monthly_options(){
		$view = View::factory('reports/options/monthly_view');

		$sql = "SELECT DATE_FORMAT(created, '%m-%Y') as 'period'
					FROM entries
					GROUP BY YEAR(created), MONTH(created)
					ORDER BY YEAR(created) DESC, MONTH(created) DESC";

		$query = DB::query(Database::SELECT, $sql);
		$rs = $query->execute();

		$view->set('periods', $rs);

		return $view->render();
	}

	public function monthly_results($params) {

		$view = View::factory('reports/results/monthly_view');

		list($month, $year) = explode('-', $params['period']);

		$day_start = "$year-$month-01";
		$day_end = "$year-$month-" . date('t', strtotime($day_start));

		$sql_categories = "
		SELECT 
			DISTINCT(categories.name) as category,
			(SELECT SUM(ammount) FROM entries WHERE type_id = 2 AND created BETWEEN :startdate AND :enddate AND category_id = categories.id) AS 'ingresos',
			(SELECT SUM(ammount) FROM entries WHERE type_id = 1 AND created BETWEEN :startdate AND :enddate AND category_id = categories.id) AS 'egresos'
		FROM
			entries
		LEFT JOIN categories ON entries.category_id = categories.id
		WHERE category_id IS NOT NULL AND created BETWEEN :startdate AND :enddate
		ORDER BY categories.name ASC
		";
		
		$sql_totals = "
		SELECT
			(SELECT SUM(ammount) FROM entries WHERE type_id = 2 AND created BETWEEN :startdate AND :enddate) AS 'ingresos',
			(SELECT SUM(ammount) FROM entries WHERE type_id = 1 AND created BETWEEN :startdate AND :enddate) AS 'egresos'
		";

		$query_categories = DB::query(Database::SELECT, $sql_categories);
		$query_categories->parameters(array(
			':startdate' => $day_start,
			':enddate' => $day_end
		));

		$query_totals = DB::query(Database::SELECT, $sql_totals);
		$query_totals->parameters(array(
			':startdate' => $day_start,
			':enddate' => $day_end
		));

		$rs_categories = $query_categories->execute();
		$rs_totals = $query_totals->execute();

		$view->set('categories', $rs_categories);
		$view->set('totals', $rs_totals);
		$view->set('period', $params['period']);

		return $view->render();

	}

}