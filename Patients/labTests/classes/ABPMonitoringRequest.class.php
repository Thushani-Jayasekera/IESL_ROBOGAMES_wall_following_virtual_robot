<?php
  class ABPMonitoringRequest{
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
    private $bp;
    private $dob;
    private $height;
    private $weight;
    private $contact;
    private $appointedDate;
    private $time;
    private $shortHistory;
    private $consMOName;
    private $consMOID;

    public function __construct($nic, $dateOfRequest, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $ward_no, $bp, $dob, $height, $weight, $contact, $appointedDate, $time, $shortHistory, $consMOName, $consMOID){
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
      $this->bp = $bp;
      $this->dob = $dob;
      $this->height = $height;
      $this->weight = $weight;
      $this->contact = $contact;
      $this->appointedDate = $appointedDate;
      $this->time = $time;
      $this->shortHistory = $shortHistory;
      $this->consMOName = $consMOName;
      $this->consMOID = $consMOID;

    }

    public function getProperty($property){
      return $this->$property;
    }
  }
 ?>
