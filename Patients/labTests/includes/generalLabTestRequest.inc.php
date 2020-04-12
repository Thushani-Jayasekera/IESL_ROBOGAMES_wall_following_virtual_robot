<?php
  session_start();
  include_once "../../classes/patientcontr.class.php";
  include_once "../classes/generalLabTestRequest.class.php";

  $nic = $_SESSION['nic'];
  $labyReportNo = $_POST['labyReportNo'];
  $sendersNo = $_POST['sendersNo'];
  $force_id = $_SESSION['force_id'];
  $rank = $_SESSION['rank'];
  $first_name = $_SESSION['first_name'];
  $last_name = $_SESSION['last_name'];
  $unit = $_SESSION['unit'];
  $age = $_POST['age'];
  $gender = $_SESSION['gender'];
  $ward = $_POST['ward'];
  $at = $_POST['at'];
  $specimen = $_POST['specimen'];
  $exam = $_POST['exam'];
  $spPoints= $_POST['spPoints'];
  $diagnosis = $_POST['diagnosis'];
  $station = $_POST['station'];
  $dateOfRequest = $_POST['dateOfRequest'];
  $time = $_POST['time'];
  $consMOName = $_SESSION['consMOName'];
  $designation = $_SESSION['designation'];
  $consMOID = $_SESSION['consMOID'];

  $generalLabTestRequestObject = new GeneralLabTestRequest($nic, $labyReportNo, $sendersNo, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $ward, $at, $specimen, $exam ,$spPoints, $diagnosis, $station, $dateOfRequest,  $time, $consMOName, $designation, $consMOID);

  $serializedGeneralLabTestRequest = serialize($generalLabTestRequestObject);

  $patientContrObject = new PatientContr();

  $patientContrObject->createGeneralLabTestRequest($nic, $serializedGeneralLabTestRequest);

  echo "successful!";
?>
