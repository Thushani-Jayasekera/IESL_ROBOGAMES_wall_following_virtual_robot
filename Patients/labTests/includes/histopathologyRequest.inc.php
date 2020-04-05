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
  $telNo = $_SESSION['telNo'];
  $ward = $_SESSION['ward'];
  $specimen = $_POST['specimen'];
  $clinicalHistory= $_SESSION['clinicalHistory'];
  $investigations = $_SESSION['investigations'];
  $radio = $_SESSION['radio'];
  $proDiff= $_SESSION['proDiff'];
  $prev = $_SESSION['prev'];
  $time = $_SESSION['time'];
  $reportNo = $_SESSION['reportNo'];
  $chemo = $_SESSION['chemo'];
  $radiotherapy = $_SESSION['radiotherapy'];
  $findings = $_SESSION['findings'];
  $contactDoc = $_SESSION['contactDoc'];
  $contact = $_SESSION['contact'];
  $date = $_SESSION['date'];
  $designation = $_SESSION['designation'];
  $hisNo = $_SESSION['hisNo'];
  $repRoom = $_SESSION['repRoom'];
  $consMOName = $_SESSION['consMOName'];
  $consMOID = $_SESSION['consMOID'];

  $details = array($specimen, $clinicalHistory, $investigations, $radio, $proDiff, $appointedDate, $prev, $reportNo, $chemo, $radiotherapy, $findings, $contactDoc, $contact, $date, $hisNo, $repRoom);

  $histopathologyRequestObject = new HistopathologyRequest($nic, $force_id, $rank, $first_name, $last_name, $unit, $age, $gender, $telNo, $ward, $details, $consMOName, $designation, $consMOID);

  $serializedHistopathologyRequest = serialize($histopathologyRequestObject);

  $patientContrObject = new PatientContr();
  
  $patientContrObject->createHistopathologyRequest($nic, $serializedHistopathologyRequest);

  echo "successful!";
?>
