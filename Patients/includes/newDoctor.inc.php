<?php
  session_start();
  include_once "class-autoload.inc.php";
  $doctor = $_POST['newDoctor'];
  $doa = $_SESSION['doa'];
  $nic = '123703702V'; //'$_SESSION['nic']';
  $patientController = new PatientContr();

    $patientController->changeDoctor($nic, $doctor, $doa);


  header("Location: ../patientprofile.php");







 ?>
