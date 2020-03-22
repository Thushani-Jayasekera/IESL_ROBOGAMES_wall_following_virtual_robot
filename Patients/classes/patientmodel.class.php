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

}
