<?php
class OtherMedicalTreatments{
  private $nic;
  private $nature;
  private $nameAndAddress;
  private $datePeriod;

  public function __construct($nic, $nature, $nameAndAddress, $datePeriod){
    $this->nic = $nic;
    $this->nature = $nature;
    $this->nameAndAddress = $nameAndAddress;
    $this->datePeriod = $datePeriod;
  }

  public function getNic(){
    return $this->nic;
  }

  public function getNature(){
    return $this->nature;
  }

  public function getNameAndAddress(){
    return $this->nameAndAddress;
  }

  public function getDatePeriod(){
    return $this->datePeriod;
  }
}
 ?>
