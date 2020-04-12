
<?php
  class HistopathologyRequest{
    private $nic;
    private $force_id;
    private $rank;
    private $first_name;
    private $last_name;
    private $unit;
    private $age;
    private $gender;
    private $telNo;
    private $ward;
    private $details;
    private $consMOName;
    private $designation;
    private $consMOID;
    private $familyName;

    public function __construct($nic, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $telNo, $ward, $details, $consMOName, $designation, $consMOID, $familyName){
      $this->nic = $nic;
      $this->force_id = $force_id;
      $this->rank = $rank;
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->unit = $unit;
      $this->age = $age;
      $this->gender = $gender;
      $this->telNo = $telNo;
      $this->ward = $ward;
      $this->details = $details;
      $this->consMOName = $consMOName;
      $this->designation = $designation;
      $this->consMOID = $consMOID;
      $this->familyName = $familyName;

    }

    public function getProperty($property){
      return $this->$property;
    }
  }
 ?>
