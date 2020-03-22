<?php
    session_start();
    include_once "../../includes/class-autoload.inc.php";
    $force_id = $_POST['force_id'];
    $nic = $_POST['nic'];
    $date = $_POST['date'];
    $bronchitis = array($_POST['bronchdata'], $_POST['bronchage']);
    $asthma = array($_POST['asthmadata'], $_POST['asthmaage']);
    $tb = array($_POST['tbdata'], $_POST['tbage']);
    $fits = array($_POST['fitsdata'], $_POST['fitsage']);
    $gastric = array($_POST['gasdata'], $_POST['gasage']);
    $rheumatism = array($_POST['rheumatismdata'], $_POST['rheumatismage']);
    $nervous = array($_POST['nervedata'], $_POST['nerveage']);
    $mental = array($_POST['mentaldata'], $_POST['mentalage']);
    $filariasis = array($_POST['filariasisdata'], $_POST['filariasisage']);
    $other = array($_POST['otherdata'], $_POST['otherage'],$_POST['other'] );

    $illnessDetails = array("bronchitis" => $bronchitis, "asthma" => $asthma, "tb" => $tb, "fits" => $fits, "gastric" => $gastric, "rheumatism" => $rheumatism, "nervous" => $nervous, "mental" => $mental, "filariasis" => $filariasis, "other" => $other);

    $data = $_POST['data'];
    $xraydata = $_POST['xraydata'];

    $personalHistory = new PersonalHistory($nic, $data, $illnessDetails, $other, $xraydata);
    $serializedPersonalHistory = serialize($personalHistory);

    $_SESSION['force_id'] = $force_id;
    $_SESSION['nic'] = $nic;
    $_SESSION['date'] = $date;
    $_SESSION['serializedPersonalHistory'] = $serializedPersonalHistory;

    header("Location: ../medicalReportForm2.php")
 ?>
