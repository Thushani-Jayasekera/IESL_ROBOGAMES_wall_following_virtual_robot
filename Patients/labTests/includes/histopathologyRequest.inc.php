<?php
  session_start();
  include_once "../../classes/patientcontr.class.php";
  include_once "../classes/histopathologyRequest.class.php";

  $nic = $_SESSION['nic'];
  $force_id = $_SESSION['force_id'];
  $rank = $_SESSION['rank'];
  $first_name = $_SESSION['first_name'];
  $last_name = $_SESSION['last_name'];
  $unit = $_SESSION['unit'];
  $age = $_SESSION['age'];
  $gender = $_SESSION['gender'];
  $telNo = $_POST['telNo'];
  $ward = $_POST['ward'];
  $specimen = $_POST['specimen'];
  $clinicalHistory= $_POST['clinicalHistory'];
  $investigations = $_POST['investigations'];
  $radio = $_POST['radio'];
  $proDiff= $_POST['proDiff'];
  $prev = $_POST['prev'];
  $time = $_POST['time'];
  $reportNo = $_POST['reportNo'];
  $chemo = $_POST['chemo'];
  $radiotherapy = $_POST['radiotherapy'];
  $findings = $_POST['findings'];
  $contactDoc = $_POST['contactDoc'];
  $contact = $_POST['contact'];
  $date = $_POST['date'];
  $designation = $_SESSION['designation'];
  $hisNo = $_POST['hisNo'];
  $repRoom = $_POST['repRoom'];
  $consMOName = $_SESSION['consMOName'];
  $consMOID = $_SESSION['consMOID'];
  $familyName = $_SESSION['familyName'];

  $details = array($specimen, $clinicalHistory, $investigations, $radio, $proDiff, $prev, $reportNo, $chemo, $radiotherapy, $findings, $contactDoc, $contact, $date, $hisNo, $repRoom);

  $histopathologyRequestObject = new HistopathologyRequest($nic, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $telNo, $ward, $details, $consMOName, $designation, $consMOID, $familyName);

  $serializedHistopathologyRequest = serialize($histopathologyRequestObject);

  $patientContrObject = new PatientContr();
  
  $patientContrObject->createHistopathologyRequest($nic, $serializedHistopathologyRequest);

  echo "successful!";
?>
