<?php
Class Details{
  private $nic;
  private $details;
  public function __construct($nic, $details){
    $this->nic = $nic;
    $this->details = $details;
  }

  public function add($detail){
    $this->details .= "\r\n";
    $this->details .= $detail;
  }

  public function getNIC(){
    return $this->nic;
  }

  public function getDetails(){
    return $this->details;
  }




}


 ?>
