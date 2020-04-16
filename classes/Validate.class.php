<?php

class Validate{
    private $_passed=false;
    private $_errors=array();
    private $_db=null;

    public function __construct(){
        $this->_db=Dbh::getInstance();
        
    }

    public function check($source,$items=array(),$id=null){
        
        foreach($items as $item=>$rules){
            foreach($rules as $rule=>$rule_value){

                $value =trim($source[$item]);
                $item=escape($item);

                if($rule==='required' && empty($value)){
                    $this->addError($rules['name']." is required");
                }else if(!empty($value)){
                    switch ($rule) {
                        case 'min':
                            if(strlen($value)<$rule_value){
                                $this->addError($rules['name']." must be a minimum of {$rule_value} characters");
                            }
                            break;
                        case 'max':
                            if(strlen($value)>$rule_value){
                                $this->addError($rules['name']." must be less than {$rule_value} characters");
                            }
                            break;
                        case 'matches':
                            if(($value)!=$source[$rule_value]){
                                $this->addError($rules['name']." must match in the two cases");
                            }
                            break;
                        case 'unique':
                            
                            $check=$this->_db->get($rule_value,array($item,'=',$value));
                            
                            if($check->count()){
                                if(!(isset($id) && $check->results()[0]->id===$id)){
                                    $this->addError($rules['name']." already exists");
                                }
                            }
                            break;
                        case 'select':
                                if($value===$rule_value){
                                    $this->addError($rules['name']."must be selected");
                                }
                                break;
                        case 'IDformat':
                                if(!is_numeric(substr($value,0,8)) || !$value[9]==='V'){
                                    $this->addError($rules['name']."must be a valid National ID number in format xxxxxxxxxV");
                                }
                        break;
                    }
                }

            }
            
        }
        if(empty($this->_errors)){
            $this->_passed=true;
        }
        return $this;

    }
        
    
    private function addError($error){
        $this->_errors[]=$error;
    }
    public function errors(){
        return $this->_errors;
    }
    public function passed(){
        return $this->_passed;
    }
    
}