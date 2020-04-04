<?php
  session_start();
  include_once "../../classes/patientcontr.class.php";
  include_once "../classes/basicECGRequest.class.php";

  $nic = $_SESSION['nic'];
  $dateOfRequest = $_SESSION['dateOfRequest'];
  $force_id = $_SESSION['force_id'];
  $rank = $_SESSION['rank'];
  $first_name = $_SESSION['first_name'];
  $last_name = $_SESSION['last_name'];
  $unit = $_SESSION['unit'];
  $age = $_SESSION['age'];
  $gender = $_SESSION['gender'];
  $ward_no = $_SESSION['ward_no'];
  $ward = $_SESSION['ward'];
  $conditions = $_SESSION['conditions'];
  $leads = $_SESSION['leads'];
  $shortHistory = $_SESSION['shortHistory'];
  $consMOName = $_SESSION['consMOName'];
  $consMOID = $_SESSION['consMOID'];

  $basicECGRequestObject = new BasicECGRequest($nic, $dateOfRequest, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $ward_no, $ward, $conditions, $leads, $shortHistory, $consMOName, $consMOID);

  $serializedBasicECGRequest = serialize($basicECGRequestObject);

  $patientContrObject = new PatientContr();

  $patientContrObject->createBasicECGRequest($nic, $serializedBasicECGRequest);

  echo "successful!";
?>
