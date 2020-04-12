<?php
  session_start();
  include_once "../../includes/class-autoload.inc.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>X Ray Request</title>
  </head>
  <body>
    <h1>Army Hospital</h1>
    <h2>X Ray Request</h2>
    <?php
      $nic = '982753295V';  // this should be given by a session object
      $patientViewObject = new PatientView();

      $results = $patientViewObject->showPatientInfo($nic);

      $patientInfo = $results[0];
    ?>

    <form action="../includes/xRayRequest.inc.php" method="post">
      <b>Date : </b><input type="date" name="dateOfRequest"><br><br>
      <?php
        echo "<b>Service No : </b>".$patientInfo['force_id']."<br><b>NIC : </b>".$patientInfo['nic']."<br><b>Rank : </b>".$patientInfo['rank']."
        <br><b>Name : </b>".$patientInfo['first_name']." ".$patientInfo['last_name']."
        <br><b>Unit / Ship / A.F.Stn. : </b>".$patientInfo['regiment']."<br><br>";
      ?>

      <b>Age : </b><input type="number" name="age" placeholder="Ex: 30"><br><br>
      <b>Part to be X-Rayed : </b><textarea name="xRayPart" rows="1" cols="60"></textarea><br><br>
      <b>Short History of Case (To be completed by M.O.I. / c case) : </b><textarea name="shortHistory" rows="5" cols="60"></textarea><br><br>

      <?php
        $consMOName = "Dr. KPN Pathirana"; // should get from a session
        $designation = "Brigadier"; // should get from a session
        $consMOID = "687543545v";  // should get from a session

        echo "<b>Name of Consultant/MO : </b>".$consMOName."<br><b> Designation of Consultant/MO : </b>".$designation."<br><b> NIC of Consultant/MO : </b>".$consMOID;


        $_SESSION['nic'] = $nic;
        $_SESSION['force_id'] = $patientInfo['force_id'];
        $_SESSION['rank'] = $patientInfo['rank'];
        $_SESSION['first_name'] = $patientInfo['first_name'];
        $_SESSION['last_name'] = $patientInfo['last_name'];
        $_SESSION['unit'] = $patientInfo['regiment'];
        $_SESSION['consMOName'] = $consMOName;
        $_SESSION['designation'] = $designation;
        $_SESSION['consMOID'] = $consMOID;

      ?>

      <br><br><br> <button type="submit" name="confirm">Confirm</button>

     </form>
  </body>
</html>
