<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_DefaultTemplate {

	public function action_index(){
		$this->setPageTitle('Login');
		
		$active_user = Cookie::get('active_user', FALSE);

		if($active_user !== FALSE){
			$user = ORM::factory('user',$active_user);
			if($user->loaded()){
				Session::instance()->set('active_user', $active_user);
				$this->request->redirect('main');	
			}else{
				$this->request->redirect('login/logout');
			}
			
		}
		
		$view = View::factory('login_view');

		$this->template->content = $view->render();
	}

	public function action_check_credentials(){
		$this->auto_render = FALSE;

		echo "'" . $this->request->post('password') . "'" . ' / ' . md5('eric') .  ' / ' . md5($this->request->post('password')) . '<br/>';

		$email = $this->request->post('email');
		$password = md5($this->request->post('password'));
		$remember = $this->request->post('remember');

		$user = ORM::factory('user')->where('email','=',$email)->where('password','=',$password)->find();

		if($user->loaded()){
			Session::instance()->set('active_user', $user->id);
			if($remember == 1){
				Cookie::set('active_user',$user->id);
			}
			$this->request->redirect('main');
		}else{
			echo $user->last_query();
			echo '<br/>error_login';
			//$this->request->redirect('login');
		}
	}

	public function action_logout(){
		$this->auto_render = FALSE;

		Session::instance()->destroy();
		Cookie::delete('active_user');

		$this->request->redirect('login');
	}

}