<?php
    session_start();
    include_once "../../includes/class-autoload.inc.php";
    $nic = $_SESSION['nic'];
    $nature = $_POST['nature'];
    $nameAndAddress = $_POST['nameAndAddress'];
    $datePeriod = $_POST['datePeriod'];
    $otherInfo = $_POST['otherInfo'];

    $otherMedicalTreatments = new OtherMedicalTreatments($nic, $nature, $hospital, $inout, $dates);
    $serializedOtherMedicalTreatments = serialize($otherMedicalTreatments);

    $_SESSION['serializedOtherMedicalTreatments'] = $serializedOtherMedicalTreatments;

    header("Location: ../medicalReportForm4.php")
 ?>
