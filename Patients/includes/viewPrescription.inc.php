<?php
session_start();
include_once 'class-autoload.inc.php';

$x = $_SESSION['x'];
$i = 0;
while($i<$x){
  if(isset($_POST['button-'.$i])){
  $prescription = $_SESSION['prescription-'.$i];
  }
  $i++;
}
$patientObj = new Patientcontr();
$patientObj->issue($prescription);

Redirect::to('../viewPrescription.php');



 ?>
