<?php

class Discharge{
  private $nic;
  private $dischargeDate;
  private $summary;
  public function __construct($nic, $dischargeDate, $summary){
    $this->nic = $nic;
    $this->dischargeDate = $dischargeDate;
    $this->summary = $summary;
  }

  public function getNIC()
  {
    return $this->nic;
  }

  function getDischargeDate(){
    return $this->dischargeDate;
  }

  function getSummary(){
    return $this->summary;
  }
}



?>
