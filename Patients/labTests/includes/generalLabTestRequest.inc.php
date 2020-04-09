<?php
  session_start();
  include_once "../../classes/patientcontr.class.php";
  include_once "../classes/generalLabTestRequest.class.php";

  $nic = $_SESSION['nic'];
  $labyReportNo = $_SESSION['labyReportNo'];
  $sendersNo = $_SESSION['sendersNo'];
  $force_id = $_SESSION['force_id'];
  $rank = $_SESSION['rank'];
  $first_name = $_SESSION['first_name'];
  $last_name = $_SESSION['last_name'];
  $unit = $_SESSION['unit'];
  $age = $_SESSION['age'];
  $gender = $_SESSION['gender'];
  $ward = $_SESSION['ward'];
  $at = $_POST['at'];
  $specimen = $_SESSION['specimen'];
  $exam = $_SESSION['exam'];
  $spPoints= $_SESSION['spPoints'];
  $diagnosis = $_SESSION['diagnosis'];
  $station = $_SESSION['station'];
  $dateOfRequest = $_SESSION['dateOfRequest'];
  $time = $_SESSION['time'];
  $consMOName = $_SESSION['consMOName'];
  $designation = $_SESSION['designation'];
  $consMOID = $_SESSION['consMOID'];

  $generalLabTestRequestObject = new GeneralLabTestRequest($nic, $labyReportNo, $sendersNo, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $ward, $at, $specimen, $exam ,$spPoints, $diagnosis, $station, $dateOfRequest,  $time, $consMOName, $designation, $consMOID);

  $serializedGeneralLabTestRequest = serialize($generalLabTestRequestObject);

  $patientContrObject = new PatientContr();

  $patientContrObject->createGeneralLabTestRequest($nic, $serializedGeneralLabTestRequest);

  echo "successful!";
?>
