<?php
session_start();
include_once 'class-autoload.inc.php';
$nic = $_SESSION['nic']; //'123703702V';
$doa = $_SESSION['doa'];
$dischargeDate = $_POST['dischargeDate'];
$summary = $_POST['summary'];

$patientObj = new PatientContr();
$patientObj->addDischarge($nic, $doa, $dischargeDate, $summary);

Redirect::to('../patientProfile.php');


 ?>
