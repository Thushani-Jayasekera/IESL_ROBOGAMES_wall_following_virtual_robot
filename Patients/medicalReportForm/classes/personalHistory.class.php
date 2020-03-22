<?php
  class PersonalHistory{
    private $nic;
    private $data;
    private $illnessDetails;
    private $other;
    private $reasonForXray;

    public function __construct($nic, $data, $illnessDetails, $other, $reasonForXray){
      $this->nic = $nic;
      $this->data = $data;
      $this->illnessDetails = $illnessDetails;
      $this->other = $other;
      $this->reasonForXray = $reasonForXray;
    }

    public function getNic(){
      return $this->nic;
    }

    public function getData(){
      return $this->data;
    }

    public function getIllnessDetails(){
      return $this->illnessDetails;
    }

    public function getOther(){
      return $this->other;
    }

    public function getReasonForXray(){
      return $this->reasonForXray;
    }
  }
 ?>
