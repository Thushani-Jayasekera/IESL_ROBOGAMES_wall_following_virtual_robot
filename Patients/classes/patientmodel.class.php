<?php
 include_once "dbh.class.php";

class PatientModel extends Dbh{
  protected function setForcesPatient($force, $first, $last, $nic, $force_id, $gender, $regiment, $rank, $email, $dob, $height, $weight, $address, $mobile){
    $sql = "INSERT INTO forces_patients VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$force_id ,$force, $first, $last, $nic, $gender, $regiment, $rank, $email, $dob, $height, $weight, $address, $mobile]);
  }

  protected function setFamilyPatient($force_id, $force, $relation, $first, $last, $nic, $gender, $email, $dob, $height, $weight, $address, $mobile){
    $sql = "INSERT INTO family_patients VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$force_id, $force, $relation, $first, $last, $nic, $gender, $email, $dob, $height, $weight, $address, $mobile]);

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

  protected function setMedicalRecord($force_id, $nic, $date, $serializedPersonalHistory, $serializedHospitalTreatments, $serializedOtherMedicalTreatments, $otherInfo, $summary, $serializedEyes, $serializedEarsNoseThroat, $serializedUpperLimbsLocomotion, $serializedPhysicalCapacityObject, $serializedMentalCapacity, $serializedForm10, $serializedSpecialistReportObject){
    $sql = "INSERT INTO medical_report_info VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$force_id, $nic, $date, $serializedPersonalHistory, $serializedHospitalTreatments, $serializedOtherMedicalTreatments, $otherInfo, $summary, $serializedEyes, $serializedEarsNoseThroat, $serializedUpperLimbsLocomotion, $serializedPhysicalCapacityObject, $serializedMentalCapacity, $serializedForm10, $serializedSpecialistReportObject]);
  }

  protected function getMedicalReport($nic){
    $sql = "SELECT * FROM medical_report_info WHERE nic=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nic]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getPatientInfo($nic){
    $sql = "SELECT * FROM forces_patients WHERE NIC=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nic]);
    $results = $stmt->fetchAll();
    if(empty($results)){
      $sql = "SELECT * FROM family_patients WHERE NIC=?;";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$nic]);
      $results = $stmt->fetchAll();
      $results['type'] = 'family';
    }
    if (empty($results['type'])){$results['type'] = 'force'; }
    return $results;

  }

  protected function getCurrentVisit($nic){
    $sql = "SELECT * FROM visits WHERE nic=? order by doa DESC LIMIT 1;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nic]);
    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getAllVisits($nic){
    $sql = "SELECT * FROM visits WHERE nic=? order by doa DESC;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nic]);
    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setNewDoctor($nic, $doctor, $doa){
    $sql = "UPDATE visits SET doctor=? where nic=? AND doa=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$doctor,$nic, $doa]);

  }

  protected function setPrescription($nic, $doa, $prescription){
    $sql = "INSERT INTO prescriptions VALUES (?,?,?, 'Not issued');";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([ $prescription,$nic, $doa]);
  }

  protected function getCurrentPrescription($nic){
    $sql = "SELECT doa, Prescription FROM prescriptions WHERE nic=? AND prescription_issued='Not issued' ORDER BY doa;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nic]);
    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getAllPrescriptions($nic){
    $sql = "SELECT doa, Prescription FROM prescriptions WHERE nic=? AND prescription_issued='Issued' ORDER BY doa DESC;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nic]);
    $results = $stmt->fetchAll();
    return $results;
  }
  public function setIssued($prescription){
    $sql = "UPDATE prescriptions SET prescription_issued= 'Issued' WHERE Prescription=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$prescription]);
  }

  protected function getLabTestsRequests($nic){
    $sql = "SELECT * FROM lab_tests_requests WHERE nic=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nic]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setBasicECGRequest($nic, $serializedBasicECGRequest){
    $results = $this->getLabTestsRequests($nic);

    if (empty($results)) {
      $sql = "INSERT INTO lab_tests_requests(nic, serializedBasicECGRequest) VALUES(?,?);";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$nic, $serializedBasicECGRequest]);

    }else{
      $sql = "UPDATE lab_tests_requests SET serializedBasicECGRequest = ? WHERE nic = ?;";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$serializedBasicECGRequest, $nic]);

    }
  }

  protected function setABPMonitoringRequest($nic, $serializedABPMonitoringRequest){
    $results = $this->getLabTestsRequests($nic);

    if (empty($results)) {
      $sql = "INSERT INTO lab_tests_requests(nic, serializedABPMonitoringRequest) VALUES(?,?);";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$nic, $serializedABPMonitoringRequest]);

    }else{
      $sql = "UPDATE lab_tests_requests SET serializedABPMonitoringRequest = ? WHERE nic = ?;";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$serializedABPMonitoringRequest, $nic]);

    }
  }

  protected function setHolterMonitoringRequest($nic, $serializedHolterMonitoringRequest){
    $results = $this->getLabTestsRequests($nic);

    if (empty($results)) {
      $sql = "INSERT INTO lab_tests_requests(nic, serializedHolterMonitoringRequest) VALUES(?,?);";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$nic, $serializedHolterMonitoringRequest]);

    }else{
      $sql = "UPDATE lab_tests_requests SET serializedHolterMonitoringRequest = ? WHERE nic = ?;";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$serializedHolterMonitoringRequest, $nic]);

    }
  }

  protected function setHistopathologyRequest($nic, $serializedHistopathologyRequest){
    $results = $this->getLabTestsRequests($nic);

    if (empty($results)) {
      $sql = "INSERT INTO lab_tests_requests(nic, serializedHistopathologyRequest) VALUES(?,?);";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$nic, $serializedHistopathologyRequest]);

    }else{
      $sql = "UPDATE lab_tests_requests SET serializedHistopathologyRequest = ? WHERE nic = ?;";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$serializedHistopathologyRequest, $nic]);

    }
  }

  protected function setImmunoassayRequest($nic, $serializedImmunoassayRequest){
    $results = $this->getLabTestsRequests($nic);

    if (empty($results)) {
      $sql = "INSERT INTO lab_tests_requests(nic, serializedImmunoassayRequest) VALUES(?,?);";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$nic, $serializedImmunoassayRequest]);

    }else{
      $sql = "UPDATE lab_tests_requests SET serializedImmunoassayRequest = ? WHERE nic = ?;";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$serializedImmunoassayRequest, $nic]);

    }
  }

  protected function setXRayRequest($nic, $serializedXRayRequest){
    $results = $this->getLabTestsRequests($nic);

    if (empty($results)) {
      $sql = "INSERT INTO lab_tests_requests(nic, serializedXRayRequest) VALUES(?,?);";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$nic, $serializedXRayRequest]);

    }else{
      $sql = "UPDATE lab_tests_requests SET serializedXRayRequest = ? WHERE nic = ?;";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$serializedXRayRequest, $nic]);

    }
  }

  protected function setGeneralLabTestRequest($nic, $serializedGeneralLabTestRequest){
    $results = $this->getLabTestsRequests($nic);

    if (empty($results)) {
      $sql = "INSERT INTO lab_tests_requests(nic, serializedGeneralLabTestRequest) VALUES(?,?);";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$nic, $serializedGeneralLabTestRequest]);

    }else{
      $sql = "UPDATE lab_tests_requests SET serializedGeneralLabTestRequest = ? WHERE nic = ?;";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$serializedGeneralLabTestRequest, $nic]);

    }
  }

  protected function setDischarge($nic, $doa, $dischargeDate, $summary){
    $sql = "UPDATE visits SET discharge_date=?, discharge_summary=?, Discharged='Yes' WHERE nic=? AND doa=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$dischargeDate, $summary, $nic, $doa]);
  }

  protected function getDetails($nic,$doa){
    $sql = "SELECT details FROM visits where nic=? AND doa=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nic,$doa]);
    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setDetails($nic, $doa, $details){
    $sql = "UPDATE visits SET details=? WHERE nic=? AND doa=?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$details, $nic, $doa]);
  }

  protected function setProfilePic($nic, $type, $photoLocation){
    if ($type == 'force'){
      $sql = "UPDATE forces_patients SET photo=? WHERE nic=?;";
    } else {
      $sql = "UPDATE family_patients SET photo=? WHERE nic=?;";

    }
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$photoLocation, $nic]);

  }
}
