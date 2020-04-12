<?php
  session_start();
  include_once "../../classes/patientcontr.class.php";
  include_once "../classes/xRayRequest.class.php";

  $nic = $_SESSION['nic'];
  $dateOfRequest = $_POST['dateOfRequest'];
  $force_id = $_SESSION['force_id'];
  $rank = $_SESSION['rank'];
  $first_name = $_SESSION['first_name'];
  $last_name = $_SESSION['last_name'];
  $unit = $_SESSION['unit'];
  $age = $_POST['age'];
  $xRayPart = $_POST['xRayPart'];
  $shortHistory = $_POST['shortHistory'];
  $consMOName = $_SESSION['consMOName'];
  $designation = $_SESSION['designation'];
  $consMOID = $_SESSION['consMOID'];

  $xRayRequestObject = new XRayRequest($nic, $dateOfRequest, $force_id, $rank, $first_name, $last_name, $unit, $age, $xRayPart, $shortHistory, $consMOName, $designation, $consMOID);

  $serializedXRayRequest = serialize($xRayRequestObject);

  $patientContrObject = new PatientContr();

  $patientContrObject->createXRayRequest($nic, $serializedXRayRequest);

  echo "successful!";
?>
