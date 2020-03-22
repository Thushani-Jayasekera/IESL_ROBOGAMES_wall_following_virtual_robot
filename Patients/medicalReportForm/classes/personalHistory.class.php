<?php
  class PersonalHistory{
    private $nic;
    private $data;
    private $illnessDetails;
    private $other;
    private $reasonForXray;

    function __construct($nic, $data, $illnessDetails, $other, $reasonForXray){
      $this->nic = $nic;
      $this->data = $data;
      $this->illnessDetails = $illnessDetails;
      $this->other = $other;
      $this->reasonForXray = $reasonForXray;
    }

    function getNic(){
      return $this->nic;
    }

    function getData(){
      return $this->data;
    }

    function getIllnessDetails(){
      return $this->illnessDetails;
    }

    function getOther(){
      return $this->other;
    }

    function getReasonForXray(){
      return $this->reasonForXray;
    }
  }
 ?>
