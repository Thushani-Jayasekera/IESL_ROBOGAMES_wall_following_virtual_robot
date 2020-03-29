<?php

class UpperLimbsLocomotion{
    private $nic;
    private $upperLimbs;
    private $u;
    private $effectUpperLimbs;
    private $locomotion;
    private $l;
    private $effectLocomotion;


    function __construct($nic, $upperLimbs, $u, $locomotion, $effectUpperLimbs, $l, $effectLocomotion){
      $this->nic = $nic;
      $this->upperLimbs = $upperLimbs;
      $this->u = $u;
      $this->locomotion = $locomotion;
      $this->effectUpperLimbs = $effectUpperLimbs;
      $this->l = $l;
      $this->effectLocomotion = $effectLocomotion;
    }

    function getNic(){
      return $this->nic;
    }
    function getUpperLimbs(){
      return $this->upperLimbs;
    }

    function getU(){
        return $this->u;
      }

    function getLocomotion(){
        return $this->locomotion;
    }
    function getEffectUpperLimbs(){
      return $this->effectUpperLimbs;
    }
    function getL(){
        return $this->l;
      }
    function getEffectLocomotion(){
      return $this->effectLocomotion;
    }

  }
 ?>
