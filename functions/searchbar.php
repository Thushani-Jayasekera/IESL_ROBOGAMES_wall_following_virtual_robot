<?php
require_once '../classes/Redirect.class.php';

session_start();
if (isset($_POST['submit'])){
    
    $input=$_POST['search'];

    $_SESSION['nic']=$input;
    Redirect::to("../Patients/patientProfile.php");
    
}
?>
