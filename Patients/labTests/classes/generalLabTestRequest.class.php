<?php
  class GeneralLabTestRequest{
    private $nic;
    private $labyReportNo;
    private $sendersNo;
    private $force_id;
    private $rank;
    private $first_name;
    private $last_name;
    private $unit;
    private $age;
    private $gender;
    private $ward;
    private $at;
    private $specimen;
    private $exam;
    private $spPoints;
    private $diagnosis;
    private $station;
    private $dateOfRequest;
    private $time;
    private $consMOName;
    private $designation;
    private $consMOID;

    public function __construct($nic, $labyReportNo, $sendersNo, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $ward, $at, $specimen, $exam ,$spPoints, $diagnosis, $station, $dateOfRequest,  $time, $consMOName, $designation, $consMOID){
      $this->nic = $nic;
      $this->labyReportNo = $labyReportNo;
      $this->sendersNo = $sendersNo;
      $this->force_id = $force_id;
      $this->rank = $rank;
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->unit = $unit;
      $this->age = $age;
      $this->gender = $gender;
      $this->ward = $ward;
      $this->at = $at;
      $this->specimen = $specimen;
      $this->exam = $exam;
      $this->spPoints = $spPoints;
      $this->diagnosis = $diagnosis;
      $this->station = $station;
      $this->dateOfRequest = $dateOfRequest;
      $this->time = $time;
      $this->consMOName = $consMOName;
      $this->designation = $designation;
      $this->consMOID = $consMOID;

    }

    public function getProperty($property){
      return $this->$property;
    }
  }
 ?>
