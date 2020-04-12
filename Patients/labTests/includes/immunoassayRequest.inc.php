<?php
  session_start();
  include_once "../../classes/patientcontr.class.php";
  include_once "../classes/immunoassayRequest.class.php";

  $dateOfRequest = $_POST['dateOfRequest'];
  $labNo = $_POST['labNo'];
  $dates = $_POST['dates'];
  $times = $_POST['times'];
  $nic = $_SESSION['nic'];
  $force_id = $_SESSION['force_id'];
  $rank = $_SESSION['rank'];
  $first_name = $_SESSION['first_name'];
  $last_name = $_SESSION['last_name'];
  $unit = $_SESSION['unit'];
  $age = $_POST['age'];
  $gender = $_SESSION['gender'];
  $telNo = $_POST['contact'];
  $ward = $_POST['ward'];
  $clinicNotes = $_POST['clinicNotes'];
  $diagnosis = $_POST['diagnosis'];
  $currentTreatment = $_POST['currentTreatment'];
  $reqTests = $_POST['reqTests'];
  $tableData = $_POST['tableData'] ;
  $test = $_POST['test'];
  $value = $_POST['value'];
  $date = $_POST['date'];
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
