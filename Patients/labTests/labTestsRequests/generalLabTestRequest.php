<?php
  session_start();
  include_once "../../includes/class-autoload.inc.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>General Lab Test Request</title>
  </head>
  <body>
    <h1>ARMY HOSPITAL</h1>
    <h2>Request for Laboratory Examination</h2>
    <?php
      $nic = '982753295V';  // this should be given by a session object
      $patientViewObject = new PatientView();

      $results = $patientViewObject->showPatientInfo($nic);

      $patientInfo = $results[0];
    ?>

    <form action="../includes/generalLabTestRequest.inc.php" method="post">
      <b>LABY. REPORT No. : </b><input type="text" name="labyReportNo"><br><br>
      <b>SENDER'S No. : </b><input type="text" name="sendersNo"><br><br>
      <?php
        echo "<b>Service No : </b>".$patientInfo['force_id']."<br><b>NIC : </b>".$patientInfo['nic']."<br><b>Rank : </b>".$patientInfo['rank']."
        <br><b>Name : </b>".$patientInfo['first_name']." ".$patientInfo['last_name']."
        <br><b>Unit : </b>".$patientInfo['regiment']."<br><br>";
      ?>

      <b>Age : </b><input type="number" name="age" placeholder="Ex: 30"><br><br>

      <?php
        if ($patientInfo['gender'] == 'male') {
          $gender  = 'Male';
        }else {
          $gender = 'Female';
        }
        echo "<b>Gender : </b>".$gender."<br><br>";
      ?>

      <b>Ward : </b><input type="number" name="ward"><br><br>

      <textarea name="at" rows="1" cols="60" placeholder="(at)"></textarea><b> To Officer i/c Laboratory.</b><br><br>
      <b>Accompanying Specimen of : </b><textarea name="specimen" rows="1" cols="60"></textarea><br><br>
      <b>Examination Required : </b><textarea name="exam" rows="1" cols="60"></textarea><br><br>
      <b>Points Requiring Special Investigation : </b><textarea name="spPoints" rows="3" cols="60"></textarea><br><br>
      <h3>Diagnosis</h3>
      <b>Short statement of case, including treatement and progress and references to any previous laboratory reports</b><br><br>
      <textarea name="diagnosis" rows="5" cols="60"></textarea><br><br>
      <b>Station : </b><textarea name="station" rows="1" cols="60"></textarea><br><br>

      <b>Date : </b><input type="date" name="dateOfRequest"><br><br>
      <b>Time : </b><input type="time" name="time"><br><br>

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
        $_SESSION['gender'] = $gender;
        $_SESSION['consMOName'] = $consMOName;
        $_SESSION['designation'] = $designation;
        $_SESSION['consMOID'] = $consMOID;

      ?>

      <br><br><br> <button type="submit" name="confirm">Confirm</button>

     </form>
  </body>
</html>
