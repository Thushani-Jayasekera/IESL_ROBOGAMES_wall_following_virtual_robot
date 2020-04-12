<?php
  session_start();
  include_once "../../classes/patientcontr.class.php";
  include_once "../classes/holterMonitoringRequest.class.php";

  $nic = $_SESSION['nic'];
  $dateOfRequest = $_POST['dateOfRequest'];
  $force_id = $_SESSION['force_id'];
  $rank = $_SESSION['rank'];
  $first_name = $_SESSION['first_name'];
  $last_name = $_SESSION['last_name'];
  $unit = $_SESSION['unit'];
  $age = $_POST['age'];
  $gender = $_SESSION['gender'];
  $ward_no = $_POST['ward_no'];
  $bp = $_POST['bp'];
  $dob = $_SESSION['dob'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $contact = $_POST['contact'];
  $appointedDate = $_POST['appointedDate'];
  $time = $_POST['time'];
  $shortHistory = $_POST['shortHistory'];
  $consMOName = $_SESSION['consMOName'];
  $consMOID = $_SESSION['consMOID'];

  $holterMonitoringRequestObject = new HolterMonitoringRequest($nic, $dateOfRequest, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $ward_no, $bp, $dob, $height, $weight, $contact, $appointedDate, $time, $shortHistory, $consMOName, $consMOID);

  $serializedHolterMonitoringRequest = serialize($holterMonitoringRequestObject);

  $patientContrObject = new PatientContr();

  $patientContrObject->createHolterMonitoringRequest($nic, $serializedHolterMonitoringRequest);

  echo "successful!";
?>
