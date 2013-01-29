<?php

class Controller_Api extends Controller{
    
    var $result;
    
    function before() {
        parent::before();
        $this->result = new stdClass();
    }

    public function action_create_token(){
        $email = $this->request->post('email');
        $password = md5($this->request->post('password'));

        $user = ORM::factory('user')->where('email','=',$email)->where('password','=',$password)->find();

        if($user->loaded()){
            
            $old_token = ORM::factory('token')->where('user_id', '=', $user->id)->find();
            if($old_token->loaded()){
                $old_token->delete();
            }
            
            $token = ORM::factory('token');
            $token->user_id = $user->id;
            $token->create_date = date('Y-m-d H:i:s');
            $token->expire_date = date('Y-m-d H:m:s', strtotime("+60 days"));
            $token->token = md5($token->user_id . $token->create_date + $token->expire_date);
            
            $token->save();
            
            $this->result->status = 'ok';
            $this->result->data = array(
                'token' => $token->token
            );
            
        }else{
            $this->result->status = 'error';
            $this->result->data = array(
                'error_code' => 1,
                'error_msg' => 'login_error'
            );
        }
    }
    
    function after(){
        parent::after();
        
        $this->response->headers('Content-type', File::mime_by_ext($this->request->param('format')));
        $method = 'process_' . $this->request->param('format');
        $response_content = $this->$method($this->result);
        
        $this->response->body($response_content);
    }
    
    private function process_json($obj){
        return json_encode($obj);
    }
        
}