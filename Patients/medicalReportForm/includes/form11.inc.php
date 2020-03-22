<?php
  session_start();
  include_once "../../includes/class-autoload.inc.php";

  $sraroi = $_POST['sraroi'];
  $right = $_POST['right'];
  $left = $_POST['left'];
  $dateOfReport = $_POST['dateOfReport'];
  $initPulheems = array($_POST['iyob'], $_POST['ipulheems'], $_POST['iheight'], $_POST['icp'], $_POST['iweight'], $_POST['ip'], $_POST['iu'], $_POST['il'], $_POST['is'], $_POST['dateIPulheems']);
  $servicePulheems = array($_POST['syob'], $_POST['spulheems'], $_POST['sheight'], $_POST['scp'], $_POST['sweight'], $_POST['sp'], $_POST['su'], $_POST['sl'], $_POST['ss'], $_POST['dateSPulheems']);


  $specialistReportObject = new SpecialistReport($sraroi, $right, $left, $dateOfReport, $initPulheems, $servicePulheems);

  $serializedSpecialistReportObject = serialize($specialistReportObject);

  $_SESSION['serializedSpecialistReportObject'] = $serializedSpecialistReportObject;

  header("Location: ../../includes/medicalReportFinal.inc.php");
