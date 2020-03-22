<?php
    session_start();
    include_once "../../includes/class-autoload.inc.php";
    $nic = $_SESSION['nic'];
    $nature = $_POST['nature'];
    $nameAndAddress = $_POST['nameAndAddress'];
    $datePeriod = $_POST['datePeriod'];
    $otherInfo = $_POST['otherInfo'];

    $otherMedicalTreatments = new OtherMedicalTreatments($nic, $nature, $nameAndAddress, $datePeriod);
    $serializedOtherMedicalTreatments = serialize($otherMedicalTreatments);

    $_SESSION['serializedOtherMedicalTreatments'] = $serializedOtherMedicalTreatments;
    $_SESSION['otherInfo'] = $otherInfo;

    header("Location: ../medicalReportForm4.php")
 ?>
