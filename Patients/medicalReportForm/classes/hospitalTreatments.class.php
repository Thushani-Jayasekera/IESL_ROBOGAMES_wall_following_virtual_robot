<?php
class HospitalTreatments{
  private $nic;
  private $nature;
  private $hospital;
  private $inout;
  private $dates;

  public function __construct($nic, $nature, $hospital, $inout, $dates){
    $this->nic = $nic;
    $this->nature = $nature;
    $this->hospital = $hospital;
    $this->inout = $inout;
    $this->dates = $dates;
  }

  public function getNic(){
    return $this->nic;
  }

  public function getNature(){
    return $this->nature;
  }

  public function getHospital(){
    return $this->hospital;
  }

  public function getInout(){
    return $this->inout;
  }

  public function getDates(){
    return $this->dates;
  }
}
 ?>
