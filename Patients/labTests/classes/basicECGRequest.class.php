<?php
  class BasicECGRequest{
    private $nic;
    private $dateOfRequest;
    private $force_id;
    private $rank;
    private $first_name;
    private $last_name;
    private $unit;
    private $age;
    private $gender;
    private $ward_no;
    private $ward;
    private $conditions;
    private $leads;
    private $shortHistory;
    private $consMOName;
    private $consMOID;

    public function __construct($nic, $dateOfRequest, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $ward_no, $ward, $conditions, $leads, $shortHistory, $consMOName, $consMOID){
      $this->nic = $nic;
      $this->dateOfRequest = $dateOfRequest;
      $this->force_id = $force_id;
      $this->rank = $rank;
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->unit = $unit;
      $this->age = $age;
      $this->gender = $gender;
      $this->ward_no = $ward_no;
      $this->ward = $ward;
      $this->conditions = $conditions;
      $this->leads = $leads;
      $this->shortHistory = $shortHistory;
      $this->consMOName = $consMOName;
      $this->consMOID = $consMOID;

    }

    public function getProperty($property){
      return $this->$property;
    }
  }
 ?>
