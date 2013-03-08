<?php

class Controller_Api extends Controller{
    
    public $result;
    
    private static $LOGIN_ERROR_CODE = 1;
    private static $TOKEN_EXPIRED_CODE = 2;
    private static $TOKEN_IVALID_CODE = 3;
    private static $MISSING_PARAM_CODE = 4;
    private static $WRONG_PARAM_FORMAT_CODE = 5;
    
    
    public function before() {
        parent::before();
        $this->result = new stdClass();
        $this->result->method = $this->request->action();
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
            $user = ORM::factory('user')->where('email','=',$params['email'])->where('password','=',md5($params['password']))->find();

            if($user->loaded()){
                
                $old_token = ORM::factory('token')->where('user_id', '=', $user->id)->find();
                if($old_token->loaded()){
                    $old_token->delete();
                }
                
                $token = ORM::factory('token');
                $token->user_id = $user->id;
                $token->create_date = date('Y-m-d H:i:s');
                $token->expire_date = date('Y-m-d H:m:s', strtotime("+120 days"));
                $token->token = md5($token->user_id . $token->create_date + $token->expire_date . (microtime() * 10000));
                
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

    public function action_get_entries(){
        $params = array(
            'auth_token' => array(
                'required' => true,
                'format' => '#^[0-9a-f]{32}$#'
             ),
            'page' => array(
                'required' => false,
                'format' => '#^[0-9]*$#',
                'default' => 1
             ),
            'per_page' => array(
                'required' => false,
                'format' => '#^[0-9]*$#',
                'default' => 50
             ),

        );

        $params = $this->checkParams($params);
        if ($params !== false) {
            $entries = ORM::factory('entry')
                ->with('user')
                ->with('category')
                ->with('accout')
                ->with('type')
                ->limit($params['per_page'])
                ->order_by('created', 'desc')
                ->order_by('id', 'desc');


            if($params['page'] != null){
                $entries->offset(($params['page'] - 1) * $params['per_page']);
                
            }

            $entries = $entries->find_all();

                $this->result->status = 'ok';
                $this->result->data = array(
                    'entries' => array()
                );

                foreach($entries as $entry){
                    array_push($this->result->data['entries'], array(
                        'id' => $entry->id,
                        'created' => date('r', strtotime($entry->created)),
                        'ammount' => $entry->ammount,
                        'comment' => $entry->comment,
                        'type' => $entry->type_id,
                        'user' => $entry->user->firstname,
                        'account' => $entry->account->name,
                        'category' => $entry->category->name
                    ));
                }
        }
    }

    public function action_get_forms_data(){
        $params = array(
            'auth_token' => array(
                'required' => true,
                'format' => '#^[0-9a-f]{32}$#'
             )
        );

        $params = $this->checkParams($params);
        
        if ($params !== false) {
            $categories = ORM::factory('category')->find_all();
            $accounts = ORM::factory('account')->find_all();
            $types = ORM::factory('type')->find_all();

            $this->result->status = 'ok';
            $this->result->data = array(
                'accounts' => array(),
                'categories' => array(),
                'types' => array()
            );

            foreach($accounts as $account){
                array_push($this->result->data['accounts'], array(
                    'id' => $account->id,
                    'name' => $account->name
                ));
            }

            foreach($categories as $category){
                array_push($this->result->data['categories'], array(
                    'id' => $category->id,
                    'name' => $category->name
                ));
            }

            foreach($types as $type){
                array_push($this->result->data['types'], array(
                    'id' => $type->id,
                    'name' => $type->name
                ));
            }
        }
    }

    public function action_get_accounts_balance(){

        $params = array(
            'auth_token' => array(
                'required' => true,
                'format' => '#^[0-9a-f]{32}$#'
             )
        );

        $params = $this->checkParams($params);
        
        if ($params !== false) {
            
            $accounts = ORM::factory('account')->find_all();
            

            $this->result->status = 'ok';
            $this->result->data = array(
                'accounts' => array()
            );

            foreach($accounts as $account){
                array_push($this->result->data['accounts'], array(
                    'id' => $account->id,
                    'name' => $account->name,
                    'balance' => $account->balance
                ));
            }

            
        }

    }

    private function checkParams ($pArr) {

        $params_ok = true;
        $params = array();

        foreach ($pArr as $paramName => $paramProps) {

            $param_value = $this->request->query($paramName, null);
            $is_present = $param_value !== null;

            if ($paramProps['required'] === true && !$is_present) {
                $this->result->status = 'error';
                $this->result->data = array(
                    'error_code' => self::$MISSING_PARAM_CODE,
                    'error_message' => $paramName . ' is a required param'
                );

                $params_ok = false;

            }else if ($is_present && preg_match($paramProps['format'], $param_value) === 0) {
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
                if ($param_value === null && isset($paramProps['default'])) {
                    $param_value = $paramProps['default'];
                }
                $params[$paramName] = $param_value;
            }
        }

        return ($params_ok !== false) ? $params : $params_ok;

    }

    private function is_token_valid($token){
        $data = true;

        $db_token = ORM::factory('token')->where('token', '=', $token)->find();
        
        if ($db_token->loaded()) {
            $expire_date = date('U', strtotime($db_token->expire_date));
            $now = date('U', strtotime(date('Y-m-d H:i:s')));
            
            if ($expire_date < $now) {
                $data = array(
                    'error_code' => self::$TOKEN_EXPIRED_CODE,
                    'error_message' => 'token_expired'
                );
            }

        } else {
            $data = array(
                'error_code' => self::$TOKEN_IVALID_CODE,
                'error_message' => 'token_invalid'
            );
        }

        return $data;
    }
    
    public function after(){
        parent::after();
        
        $this->response->headers('Content-type', File::mime_by_ext($this->request->param('format')));
        $method = 'process_' . $this->request->param('format');
        $response_content = $this->$method($this->result);
        
        $this->response->body($response_content);
    }

    public function encodeObj($obj, $root_node = 'response') {
        $xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
        $xml .= self::encode($obj, $root_node, $depth = 0);
        return $xml;
    }


    private function encode($data, $node, $depth) {
        $xml = str_repeat("\t", $depth);
        $nodename = (is_numeric($node)) ? 'item' : $node;

        $xml .= "<$nodename>\n";

        foreach($data as $key => $val) {
            if(is_array($val) || is_object($val)) {
                $xml .= self::encode($val, $key, ($depth + 1));
            } else {
                $xml .= str_repeat("\t", ($depth + 1));
                $xml .= "<$key>" . htmlspecialchars($val) . "</$key>\n";
            }
        }

        $xml .= str_repeat("\t", $depth);

        $xml .= "</$nodename>\n";
        return $xml;
    }
    
    private function process_xml($obj){
        return $this->encodeObj($obj);
    }

    private function process_json($obj){
        return json_encode($obj);
    }

}