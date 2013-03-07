<?php

class Controller_Api extends Controller{
    
    public $result;
    
    private static $LOGIN_ERROR_CODE = 1;
    private static $TOKEN_EXPIRED_CODE = 2;
    private static $TOKEN_IVALID_CODE = 3;
    private static $MISSING_PARAM_CODE = 4;
    private static $WRONG_PARAM_FORMAT_CODE = 5;
    
    
    function before() {
        parent::before();
        $this->result = new stdClass();
        $this->result->method = $this->request->action();
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
                'error_code' => self::$LOGIN_ERROR_CODE,
                'error_msg' => 'login_error'
            );
        }
    }
    public function action_login(){

        $params = array(
            'email' => array(
                'required' => true,
                'format' => '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/'
             ),
            'password' => array(
                'required' => true,
                'format' => '#.*#'
            )
        );

        $params = $this->checkParams($params);

        if ($params !== false) {
            $user = ORM::factory('user')->where('email','=',$params['email'])->where('password','=',$params['password'])->find();

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
                    'error_code' => self::$LOGIN_ERROR_CODE,
                    'error_msg' => 'login_error'
                );
            }
        }
    }
    
    public function action_test(){
        
        $params = array(
            'auth_token' => array(
                'required' => true,
                'format' => '#^[0-9a-f]{32}$#'
             ),
            'id' => array(
                'required' => false,
                'format' => '#^[0-9]{3}$#'
             ),
            'sample' => array(
                'required' => false,
                'format' => '#.*#'
            )
        );

        $params = $this->checkParams($params);

    }

    private function checkParams ($pArr) {

        $params_ok = true;
        $params = array();

        foreach ($pArr as $paramName => $paramValue) {

            $param_value = $this->request->query($paramName, null);
            $is_present = $param_value !== null;

            if ($paramValue['required'] === true && !$is_present) {
                $this->result->status = 'error';
                $this->result->data = array(
                    'error_code' => self::$MISSING_PARAM_CODE,
                    'error_message' => $paramName . ' is a required param'
                );

                $params_ok = false;

            }else if ($is_present && preg_match($paramValue['format'], $param_value) === 0) {
                $this->result->status = 'error';
                $this->result->data = array(
                    'error_code' => self::$WRONG_PARAM_FORMAT_CODE,
                    'error_message' => 'Invalid format for param ' . $paramName
                );

                $params_ok = false;
            }else if ($paramName == 'auth_token') {
                $is_valid = $this->is_token_valid($this->request->query('auth_token'));
                
                if($is_valid !== true){
                    $this->result->status = 'error';
                    $this->result->data = array(
                        'error_code' => $is_valid['error_code'],
                        'error_message' => $is_valid['error_message']
                    );

                    $params_ok = false;
                }
            } else {
                $params[$paramName] = $param_value;
            }
        }

        return ($params_ok !== false) ? $params : $params_ok;

    }

    private function is_token_valid($token){
        $data = false;

        $db_token = ORM::factory('token')->where('token', '=', $token)->find();
        
        if ($db_token->loaded()) {
            $expire_date = strtotime($db_token->expire_date);
            $now = strtotime(date('Y-m-d H:i:s'));
            
            if ($expire_date < $now) {
                $data = array(
                    'error_code' => self::$TOKEN_EXPIRED_CODE,
                    'error_message' => 'token_expired'
                );
            }

            $data = true;

        } else {
            $data = array(
                'error_code' => self::$TOKEN_IVALID_CODE,
                'error_message' => 'token_invalid'
            );
        }

        return $data;
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