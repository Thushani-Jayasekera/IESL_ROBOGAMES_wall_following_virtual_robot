<?php

class PatientModel extends Dbh{
  protected function setForcesPatient($force, $first, $last, $nic, $force_id, $regiment, $rank, $email, $dob, $height, $weight, $address, $mobile){
    $sql = "INSERT INTO forces_patients VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$force_id ,$force, $first, $last, $nic, $regiment, $rank, $email, $dob, $height, $weight, $address, $mobile]);
  }

  protected function setFamilyPatient($force_id, $force, $relation, $first, $last, $nic, $email, $dob, $height, $weight, $address, $mobile){
    $sql = "INSERT INTO family_patients VALUES(?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$force_id, $force, $relation, $first, $last, $nic, $email, $dob, $height, $weight, $address, $mobile]);

  }

  protected function setNewRecord($nic, $doa, $reason, $history, $cm, $doctor, $ward){
    //$nic1 = mysqli_real_escape_string($this->connect(), $nic);
    /*
    $tableName = $nic . "-visits";

    $sql1 = "CREATE TABLE IF NOT EXISTS `$tableName` (
      nic VARCHAR(16) NOT NULL,
      doa DATE NOT NULL,
      reason LONGTEXT,
      history LONGTEXT,
      cm LONGTEXT,
      doctor VARCHAR(255),
      ward VARCHAR(255)
    )";
    $stmt = $this->connect()->query($sql1);
    //$stmt->execute([$tableName]);
    */

    $sql = "INSERT INTO visits VALUES(?,?,?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nic, $doa, $reason, $history, $cm, $doctor, $ward]);

  }

  protected function setMedicalRecord($force_id, $nic, $date, $serializedPersonalHistory, $serializedHospitalTreatments, $otherInfo, $summary, $serializedEyes, $serializedEarsNoseThroat, $serializedUpperLimbsLocomotion, $serializedPhysicalCapacityObject, $serializedMentalCapacity, $serializedForm10, $serializedSpecialistReportObject){
    $sql = "INSERT INTO medical_report_info VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$force_id, $nic, $date, $serializedPersonalHistory, $serializedHospitalTreatments, $otherInfo, $summary, $serializedEyes, $serializedEarsNoseThroat, $serializedUpperLimbsLocomotion, $serializedPhysicalCapacityObject, $serializedMentalCapacity, $serializedForm10, $serializedSpecialistReportObject]);
  }
  
  protected function getMedicalReport($force_id){
    $sql = "SELECT * FROM medical_report_info WHERE force_id=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$force_id]);

    $results = $stmt->fetchAll();
    return $results;
  }

}
