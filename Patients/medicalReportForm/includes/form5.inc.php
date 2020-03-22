<?php
    session_start();
    include_once "../../includes/class-autoload.inc.php";
    $nic = $_SESSION['nic'];
    $right = $_POST['right'];
    $left = $_POST['left'];
    $CP = $_POST['CP'];
    $emptyHeading = $_POST['emptyHeading'];
    $emptyRight = $_POST['emptyRight'];
    $emptyLeft = $_POST['emptyLeft'];
    $emptyCP = $_POST['emptyCP'];
    $dieases = $_POST['dieases'];
    $effect = $_POST['effect'];

    $eyeTable = array("left" => $left, "right" => $right, "CP" => $CP, "emptyHeading" => $emptyHeading, "emptyLeft" => $emptyLeft, "emptyRight" => $emptyRight, "emptyCP" => $emptyCP);

    $eyes = new Eyes($nic, $eyeTable, $diseases, $effect);
    $serializedEyes = serialize($eyes);

    $_SESSION['serializedEyes'] = $serializedEyes;

    header("Location: ../medicalReportForm6.php")
 ?>
