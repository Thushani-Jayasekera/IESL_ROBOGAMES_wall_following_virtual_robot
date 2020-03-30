<?php
  session_start();
  include_once 'class-autoload.inc.php';
  $nic = $_SESSION['nic']; //'123703702V'; 
  $doa =$_SESSION['doa'];
  $prescription = $_POST['prescription'];

  $prescriptionObj = new Prescription($nic, $prescription);
  $serializedPrescription = serialize($prescriptionObj);

  $patientObj = new PatientContr();
  $patientObj->addPrescription($nic, $doa, $serializedPrescription);

  Redirect::to('../patientProfile.php');
