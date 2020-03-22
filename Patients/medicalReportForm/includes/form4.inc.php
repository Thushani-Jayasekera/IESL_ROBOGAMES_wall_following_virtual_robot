<?php
    session_start();
    include_once "../../includes/class-autoload.inc.php";
    $nic = $_SESSION['nic'];
    $summary = $_POST['summary'];
    

    $_SESSION['summary'] = $summary;

    header("Location: ../medicalReportForm5.php")
 ?>
