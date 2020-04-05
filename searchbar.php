<?php

session_start();
if (isset($_POST['submit'])){
    $input=$_POST['search'];

    $_SESSION['nic']=$input;
    header("Location: Patients/patientProfile.php");
}
?>
