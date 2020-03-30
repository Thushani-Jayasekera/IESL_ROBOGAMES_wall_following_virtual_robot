<?php
class Prescription{
  private $nic;
  private $prescription;
  public function __construct($nic, $prescription){
    $this->nic = $nic;
    $this->prescription = $prescription;
  }

  public function getNIC()
  {
    return $this->nic;
  }

  function getPrescription(){
    return $this->prescription;
  }
}


 ?>
