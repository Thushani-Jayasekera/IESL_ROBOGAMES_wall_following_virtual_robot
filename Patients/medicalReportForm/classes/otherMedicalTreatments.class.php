<?php
class OtherMedicalTreatments{
  private $nic;
  private $nature;
  private $nameAndAddress;
  private $datePeriod;

  function __construct($nic, $nature, $nameAndAddress, $datePeriod){
    $this->nic = $nic;
    $this->nature = $nature;
    $this->nameAndAddress = $nameAndAddress;
    $this->datePeriod = $datePeriod;
  }

  function getNic(){
    return $this->nic;
  }

  function getNature(){
    return $this->nature;
  }

  function getNameAndAddress(){
    return $this->nameAndAddress;
  }

  function getDatePeriod(){
    return $this->datePeriod;
  }
}
 ?>
