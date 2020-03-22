<?php
  class Eyes{
    private $nic;
    private $eyeTable;
    private $diseases;
    private $effect;
    
    function __construct($nic, $eyeTable, $diseases, $effect){
      $this->nic = $nic;
      $this->eyeTable = $eyeTable;
      $this->diseases = $diseases;
      $this->effect = $effect;
    }

    function getNic(){
      return $this->nic;
    }
    function getEyeTable(){
      return $this->eyeTable;
    }

    function getDiseases(){
      return $this->diseases;
    }

    function getEffect(){
      return $this->effect;
    }

  }
 ?>
