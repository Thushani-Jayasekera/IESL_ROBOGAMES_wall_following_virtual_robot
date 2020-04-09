<?php
  class XRayRequest{
    private $nic;
    private $dateOfRequest;
    private $force_id;
    private $rank;
    private $first_name;
    private $last_name;
    private $unit;
    private $age;
    private $xRayPart;
    private $shortHistory;
    private $consMOName;
    private $designation;
    private $consMOID;

    public function __construct($nic, $dateOfRequest, $force_id, $rank, $first_name, $last_name, $unit, $age, $xRayPart, $shortHistory, $consMOName, $designation, $consMOID){
      $this->nic = $nic;
      $this->dateOfRequest = $dateOfRequest;
      $this->force_id = $force_id;
      $this->rank = $rank;
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->unit = $unit;
      $this->age = $age;
      $this->xRayPart = $xRayPart;
      $this->shortHistory = $shortHistory;
      $this->consMOName = $consMOName;
      $this->designation = $designation;
      $this->consMOID = $consMOID;

    }

    public function getProperty($property){
      return $this->$property;
    }
  }
 ?>
