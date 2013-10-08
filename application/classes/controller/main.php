<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_DefaultTemplate {

	var $active_user;

	public function before(){
		parent::before();
		// reemplazar por login
		if(Session::instance()->get('active_user',FALSE) !== FALSE){
			$this->active_user = ORM::factory('user',Session::instance()->get('active_user',FALSE));
			View::bind_global('active_user', $this->active_user);
			View::set_global('active_section', 'home');
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

		$this->setPageTitle('Home');

		$view = View::factory('main_view');

		$entries = ORM::factory('entry')->limit(100)->find_all();
		

		$view->bind('entries', $entries);
		

		$this->template->content = $view->render();
	}

	public function action_entries(){
		$this->auto_render = FALSE;

		$per_page = 50;
		$num_links = 3;

		$current_page = $this->request->post('page');
		$offset = (($current_page - 1) * $per_page);

		$entries = ORM::factory('entry');

		if($this->request->post('type_id')){
			$entries->where('type_id','=',$this->request->post('type_id'));
		}

		if($this->request->post('category_id')){
			$entries->where('category_id','=',$this->request->post('category_id'));
		}

		if($this->request->post('account_id')){
			$entries->where('account_id','=',$this->request->post('account_id'));
		}

		if((int)$this->request->post('ammount_from') >= 0 && (int)$this->request->post('ammount_to') >= 0 && (int)$this->request->post('ammount_from') != (int)$this->request->post('ammount_to')){
			$entries->where('ammount', 'between', array((int)$this->request->post('ammount_from'),(int)$this->request->post('ammount_to')));
		}

		if($this->request->post('created_from')&& $this->request->post('created_to')){
			$entries->where('created', 'between', array(
				$this->convertDate($this->request->post('created_from')),
				$this->convertDate($this->request->post('created_to'))
			));
		}
		
		$total_records = $entries->count_all();
		

		$entries = ORM::factory('entry');

		if($this->request->post('type_id')){
			$entries->where('type_id','=',$this->request->post('type_id'));
		}

		if($this->request->post('category_id')){
			$entries->where('category_id','=',$this->request->post('category_id'));
		}

		if($this->request->post('account_id')){
			$entries->where('account_id','=',$this->request->post('account_id'));
		}

		if((int)$this->request->post('ammount_from') >= 0 && (int)$this->request->post('ammount_to') >= 0 && (int)$this->request->post('ammount_from') != (int)$this->request->post('ammount_to')){
			$entries->where('ammount', 'between', array((int)$this->request->post('ammount_from'),(int)$this->request->post('ammount_to')));
		}

		if($this->request->post('created_from')&& $this->request->post('created_to')){
			$entries->where('created', 'between', array(
				$this->convertDate($this->request->post('created_from')),
				$this->convertDate($this->request->post('created_to'))
			));
		}

		$entries->limit($per_page)->offset($offset);

		$entries_list = $entries->find_all();

		$query = $entries->last_query();

		$view = View::factory('parts/entries_view');
		$view->bind('entries',$entries_list);
		$pagination = $this->create_pagination($current_page,$total_records,$per_page,$num_links);
		$view->bind('pagination', $pagination);
		$view->bind('query', $query);

		$this->response->body($view->render());
	}

	public function action_accounts(){
		$this->auto_render = FALSE;

		$view = View::factory('parts/accounts_view');

		$this->response->body($view->render());
	}


	public function action_add_entry(){
		$this->auto_render = FALSE;

		$response = new stdClass();

		$entry = ORM::factory('entry');
		$entry->type_id = $this->request->post('type_id');
		$entry->account_id = $this->request->post('account_id');
		$entry->category_id = $this->request->post('category_id');
		$entry->ammount = $this->request->post('ammount');
		$entry->created = $this->convertDate($this->request->post('created'));
		$entry->comment = $this->request->post('comment');
		$entry->user_id = $this->active_user;

		$entry->save();

		if($entry->saved()){
			$response->status = 'ok';	
		}else{
			$response->status = 'error';
		}

		echo json_encode($response);
	}

	public function action_transferencia(){

		$this->auto_render = FALSE;

		$account_from = ORM::factory('account',$this->request->post('account_from_id'));
		$account_to = ORM::factory('account',$this->request->post('account_to_id'));

		if($account_from->id != $account_to->id){
			$entry1 = ORM::factory('entry');
			$entry1->type_id = 3;
			$entry1->account_id = $this->request->post('account_from_id');
			//$entry1->category_id = $this->request->post('category_id');
			$entry1->ammount = $this->request->post('ammount');
			$entry1->created = $this->convertDate($this->request->post('created'));
			$entry1->comment = 'Transferencia ' . $account_from->name . ' - ' . $account_to->name . ' (- $' . $this->request->post('ammount') . ')';
			$entry1->user_id = $this->active_user;
			$entry1->save();

			$entry2 = ORM::factory('entry');
			$entry2->type_id = 3;
			$entry2->account_id = $this->request->post('account_to_id');
			//$entry2->category_id = $this->request->post('category_id');
			$entry2->ammount = $this->request->post('ammount');
			$entry2->created = $this->convertDate($this->request->post('created'));
			$entry2->comment = 'Transferencia ' . $account_from->name . ' - ' . $account_to->name . ' (+ $' . $this->request->post('ammount') . ')';
			$entry2->user_id = $this->active_user;
			$entry2->save();

			$account_from->balance -= $this->request->post('ammount');
			$account_to->balance += $this->request->post('ammount');

			$account_from->save();
			$account_to->save();
		}

		$response = new stdClass();
		$response->status = 'ok';

		echo json_encode($response);

	}

	public function action_delete_entry(){
		$this->auto_render = FALSE;

		$response = new stdClass();
		$response->status = 'error';

		$entry = ORM::factory('entry', $this->request->post('id'));

		if($entry->loaded()){
			$entry->delete();
			$response->status = 'ok';
		}

		echo json_encode($response);
	}

	public function action_edit_entry() {
		$this->auto_render = FALSE;

		$entry = ORM::factory('entry', $this->request->param('id'));

		$view = View::factory('parts/edit_entry_view');

		$view->bind('entry', $entry);

		echo $view->render();

	}


	private function create_pagination($current_page,$total_records,$per_page,$num_links){
        if($total_records <= $per_page){
            return "";
        }else{
            $total_pages = ceil($total_records / $per_page);
            
            $start = (($current_page - $num_links) > 0) ? $current_page - ($num_links - 1) : 1;
            $end   = (($current_page + $num_links) < $total_pages) ? $current_page + $num_links : $total_pages;
            
            
            $view = View::factory("parts/pagination_view");
            $view->bind("total", $total_pages);
            $view->bind("current", $current_page);
            $view->bind("section", $this->current_section);
            $view->bind("start", $start);
            $view->bind("end", $end);

            return $view->render();
        }
        
    }
       
	private function convertDate($date){
		return substr($date, 6, 4) . '-' . substr($date, 3, 2) . '-' . substr($date, 0, 2);
	}

}