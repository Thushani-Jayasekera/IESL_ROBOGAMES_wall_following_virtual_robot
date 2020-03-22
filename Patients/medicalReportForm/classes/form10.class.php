<?php

class Form10{
    private $nic;
    private $one;
    private $two;
    private $three;
    private $four;
    private $initials1;
    private $initials2;
    private $initials3;
    private $initials4;
   

    
    function __construct($nic, $one, $two, $three, $four, $initials1, $initials2, $initials3, $initials4){
      $this->nic = $nic;
      $this->one = $one;
      $this->two = $two;
      $this->three = $three;
      $this->four = $four;
      $this->initials1 = $initials1;
      $this->initials2 = $initials2;
      $this->initials3 = $initials3;
      $this->initials4 = $initials4;
         
    }

    function getNic(){
      return $this->nic;
    }
    function getOne(){
      return $this->one;
    }
    function getTwo(){
        return $this->two;
      }
  
    function getThree(){
      return $this->three;
    }
    function getFour(){
        return $this->four;
      }
  
    function getInitials1(){
      return $this->initials1;
    }
    function getInitials2(){
        return $this->initials2;
      }
    function getInitials3(){
        return $this->initials3;
      }
    function getInitials4(){
        return $this->initials4;
      }


  }
 ?>


