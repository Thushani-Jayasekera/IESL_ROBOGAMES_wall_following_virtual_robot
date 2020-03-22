<?php
class HospitalTreatments{
  private $nic;
  private $nature;
  private $hospital;
  private $inout;
  private $dates;

  function __construct($nic, $nature, $hospital, $inout, $dates){
    $this->nic = $nic;
    $this->nature = $nature;
    $this->hospital = $hospital;
    $this->inout = $inout;
    $this->dates = $dates;
  }

  function getNic(){
    return $this->nic;
  }

  function getNature(){
    return $this->nature;
  }

  function getHospital(){
    return $this->hospital;
  }

  function getInout(){
    return $this->inout;
  }

  function getDates(){
    return $this->dates;
  }
}
 ?>
