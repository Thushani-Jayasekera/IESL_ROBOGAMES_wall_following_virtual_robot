<?php
session_start();
include_once 'class-autoload.inc.php';
$prescription = $_SESSION['prescription'];
$patientObj = new Patientcontr();
$patientObj->issue($prescription);

Redirect::to('../viewPrescription.php');



 ?>
