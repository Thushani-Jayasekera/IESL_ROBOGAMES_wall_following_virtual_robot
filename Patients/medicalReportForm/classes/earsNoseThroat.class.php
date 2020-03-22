<?php
  class EarsNoseThroat{
    private $nic;
    private $hearing;
    private $wax;
    private $diseases;
    private $h;
    private $effect;
    
    function __construct($nic, $hearing, $wax, $diseases, $h, $effect){
      $this->nic = $nic;
      $this->hearing = $hearing;
      $this->wax = $wax;
      $this->diseases = $diseases;
      $this->h = $h;
      $this->effect = $effect;
    }

    function getNic(){
      return $this->nic;
    }
    function getHearing(){
      return $this->hearing;
    }

    function getWax(){
        return $this->wax;
      }
    function getDiseases(){
      return $this->diseases;
    }
    function getH(){
        return $this->h;
      }
    function getEffect(){
      return $this->effect;
    }

  }
 ?>
