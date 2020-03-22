<?php
    session_start();
    include_once "../../includes/class-autoload.inc.php";
    $nic = $_SESSION['nic'];

    $speech = $_POST['speech'];
    $mentalBackwardness = $_POST['mentalBackwardness'];
    $emotionalInstability = $_POST['emotionalInstability'];
    $m = $_POST['m'];
    $s = $_POST['s'];
    $effect= $_POST['effect'];


    $mentalCapacity = new MentalCapacity($nic, $speech, $mentalBackwardness, $emotionalInstability, $m, $s, $effect);
    $serializedMentalCapacity = serialize($mentalCapacity);

    $_SESSION['serializedMentalCapacity'] = $serializedMentalCapacity;

    header("Location: ../medicalReportForm10.php")
 ?>
