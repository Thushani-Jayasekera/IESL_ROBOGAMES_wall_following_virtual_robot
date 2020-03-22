<?php
    session_start();
    include_once "../../includes/class-autoload.inc.php";
    $nic = $_SESSION['nic'];

    $one = $_POST['one'];
    $two = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $initials1 = $_POST['initials1'];
    $initials2 = $_POST['initials2'];
    $initials3 = $_POST['initials3'];
    $initials4 = $_POST['initials4'];

    $form10 = new Form10($nic, $one, $two, $three, $four, $initials1, $initials2, $initials3, $initials4);
    $serializedForm10 = serialize($form10);

    $_SESSION['serializedForm10'] = $serializedForm10;

    header("Location: ../medicalReportForm11.php")
 ?>
