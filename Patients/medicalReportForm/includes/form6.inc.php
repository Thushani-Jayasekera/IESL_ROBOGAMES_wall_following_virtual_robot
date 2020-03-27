<?php
    session_start();
    include_once "../../includes/class-autoload.inc.php";
    $nic = $_SESSION['nic'];

    $rfw = $_POST['rfw'];
    $rcv = $_POST['rcv'];
    $lfw = $_POST['lfw'];
    $lcv = $_POST['lcv'];
    $bothfw = $_POST['bothfw'];
    $bothcv = $_POST['bothcv'];


    $rpresent = $_POST['rpresent'];
    $rremoved = $_POST['rremoved'];
    $lpresent = $_POST['lpresent'];
    $lremoved = $_POST['lremoved'];

    $diseases = $_POST['diseases'];
    $h = $_POST['h'];
    $effect = $_POST['effect'];

    $hearing = array("rfw" => $rfw, "rcv" => $rcv, "lfw" => $lfw, "lcv" => $lcv, "bothfw" => $bothfw, "bothcv" => $bothcv);
    $wax  = array("rpresent"=> $rpresent, "rremoved" => $rremoved, "lpresent" => $lpresent, "lremoved" => $lremoved);

    $earsNoseThroat = new EarsNoseThroat($nic, $hearing, $wax, $diseases, $h, $effect);
    $serializedEarsNoseThroat = serialize($earsNoseThroat);

    $_SESSION['serializedEarsNoseThroat'] = $serializedEarsNoseThroat;

    header("Location: ../medicalReportForm7.php")
 ?>
