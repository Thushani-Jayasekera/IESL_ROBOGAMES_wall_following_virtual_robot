<?php
class User{
    private $_db;
    private $_data;
    private $_sessionName;
    private $_cookieName;
    private $_isLoggedIn;
    public function __construct($user=null){
        $this->_db=Dbh::getInstance();
        $this->_sessionName=Config::get('session/session_name');
        $this->_cookieName=Config::get('remember/cookie_name');
        if(!$user){
            if(Session::exists($this->_sessionName)){
                $user=Session::get($this->_sessionName);
                if($this->find($user)){
                    $this->_isLoggedIn=true;
                }else{
                    //process logout
                }
            }
        }else{
            $this->find($user);
        }

    }
    public function update($fields=array(),$id=null){
        if(!$id && $this->isLoggedIn()){
            $id=$this->data()->id;
        }
        if(!$this->_db->update('users',$id,$fields)){
            throw new Exception('There was a problem while updating information');
        }

    }
    public function create($fields=array()){
        if(!$this->_db->insert('users',$fields)){
            
            throw new Exception('There was a problem creating an account');
        }
    }
    public function find($user=null){
        if($user){
            $field=(is_numeric($user))? 'id':'user_uid';
            $data=$this->_db->get('users',array($field,'=',$user));
            if($data->count()){
                $this->_data=$data->first();
                return true;
            }
        
        }
        return false;

    }
    public function login($user_uid=null,$user_pwd=null,$remember=false){
        
        if(!$user_uid && !$user_pwd && $this->exists()){
            Session::put($this->_sessionName,$this->data()->id);

        }else{
            $user=$this->find($user_uid);
            if($user){
                if(Hash::verify($user_pwd,$this->data()->user_pwd)){
                    Session:: put($this->_sessionName,$this->data()->id);
                    if($remember){
                        $hash=Hash::unique();
                        
                        $hashCheck=$this->_db->get('users_session',array('user_id','=',$this->data()->id));
                        
                        if(!$hashCheck->count()){
                            $this->_db->insert('users_session',array(
                                'user_id'=>$this->data()->id,
                                'hash'=>$hash
                            ));
                        }else{
                            $hash=$hashCheck->first()->hash;
                        }
                        Cookie::put($this->_cookieName,$hash,Config::get('remember/cookie_expiry'));

                    }
                    return true;
                }
            }
        }
        return false;

    }
    public function hasPermission($key){
        $group=$this->_db->get('grps',array('id','=',$this->data()->user_group));
        
        if($group->count()){
            $permissions=json_decode($group->first()->permissions,true);
            if(isset($permissions) && $permissions[$key]==true){
                return true;
            }
        }
        return false;
    }
    public function exists(){
        return (!empty($this->_data))?true:false;
    }

    public function logout(){
        $this->_db->delete('users_session',array('user_id','=',$this->data()->id));
        Session::delete($this->_sessionName);
        Cookie::delete($this->_cookieName);
    }
    public function data(){
        return $this->_data;
    }
    public function isLoggedIn(){
        return $this->_isLoggedIn;
    }
    
}