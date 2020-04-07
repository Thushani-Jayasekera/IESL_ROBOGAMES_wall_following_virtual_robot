<?php
  session_start();
  include_once "../../classes/patientcontr.class.php";
  include_once "../classes/immunoassayRequest.class.php";

  $dateOfRequest = $_SESSION['dateOfRequest'];
  $labNo = $_SESSION['labNo'];
  $dates = $_SESSION['dates'];
  $times = $_SESSION['times'];
  $nic = $_SESSION['nic'];
  $force_id = $_SESSION['force_id'];
  $rank = $_SESSION['rank'];
  $first_name = $_SESSION['first_name'];
  $last_name = $_SESSION['last_name'];
  $unit = $_SESSION['unit'];
  $age = $_SESSION['age'];
  $gender = $_SESSION['gender'];
  $telNo = $_SESSION['telNo'];
  $ward = $_SESSION['ward'];
  $clinicNotes = $_SESSION['clinicNotes'];
  $diagnosis = $_SESSION['diagnosis'];
  $currentTreatment = $_SESSION['currentTreatment'];
  $reqTests = $_SESSION['reqTests'];
  $tableData = $_SESSION['tableData'] ;
  $test = $_SESSION['test'];
  $value = $_SESSION['value'];
  $date = $_SESSION['date'];
  $consMOName = $_SESSION['consMOName'];
  $designation = $_SESSION['designation'];
  $consMOID = $_SESSION['consMOID'];

  $details = array($dateOfRequest, $labNo, $dates, $times, $clinicNotes, $diagnosis, $currentTreatment, $reqTests, $tableData, $test, $value, $date);

  $immunoassayRequestObject = new ImmunoassayRequest($nic, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $telNo, $ward, $details, $consMOName, $designation, $consMOID);

  $serializedImmunoassayRequest = serialize($immunoassayRequestObject);

  $patientContrObject = new PatientContr();

  $patientContrObject->createImmunoassayRequest($nic, $serializedImmunoassayRequest);

  echo "successful!";
?>
