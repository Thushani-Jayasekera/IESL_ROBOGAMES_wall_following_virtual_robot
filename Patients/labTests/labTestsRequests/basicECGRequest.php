<?php
  session_start();
  include_once "../../includes/class-autoload.inc.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basci ECG Request</title>
  </head>
  <body>
    <h1>CARDIAC INVESTIGATION UNIT</h1>
    <h2>Basic ECG Request</h2>
    <?php
      $nic = '982753195V';  // this should be given by a session object
      $patientViewObject = new PatientView();

      $results = $patientViewObject->showPatientInfo($nic);

      $patientInfo = $results[0];
    ?>

    <form action="../includes/basicECGRequest.inc.php" method="post">
      <b>Date : </b><input type="date" name="dateOfRequest"><br><br>
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

      <b>Ward No : </b><input type="number" name="ward_no"><br>
      <b>Ward : </b>OPD <input type="radio" name="ward" value="opd"> ICU <input type="radio" name="ward" value="icu"> PULHEEMS <input type="radio" name="ward" value="pulheems">
      Clinic <input type="radio" name="ward" value="clinic"> Theater <input type="radio" name="ward" value="theater"> Dialysis <input type="radio" name="ward" value="dialysis">
      ETU <input type="radio" name="ward" value="etu"><br><br>

      <b>In Ward : </b><input type="checkbox" name="conditions[]" value="inWard"> <b>Urgent : </b><input type="checkbox" name="conditions[]" value="urgent"> <b>Pre ope : </b> <input type="checkbox" name="conditions[]" value="preope">
      <b>8 min walking for PULHEEMS : </b> <input type="checkbox" name="conditions[]" value="8MinPulheems"><br><br>

      <b>Standard Leads : </b><input type="checkbox" name="leads[]" value="standardLeads"><b> L II Rhythem strip : </b><input type="checkbox" name="leads[]" value="l2rythem"><b> Deep inspiration : </b><input type="checkbox" name="leads[]" value="deepInspiration">
      <b> Other Leads : </b><input type="text" name="leads[]"><br><br><br>

      <b>Short History of case : </b><textarea name="shortHistory" rows="4" cols="50"></textarea><br><br><br>

      <?php
        $consMOName = "Dr. KPN Pathirana"; // should get from a session
        $consMOID = "687543545v";  // should get from a session

        echo "<b>Name of Consultant/MO : </b>".$consMOName."<br><b> NIC of Consultant/MO : </b>".$consMOID;

        $_SESSION['nic'] = $nic;
        $_SESSION['dateOfRequest'] = $_POST['dateOfRequest'];
        $_SESSION['force_id'] = $patientInfo['force_id'];
        $_SESSION['rank'] = $patientInfo['rank'];
        $_SESSION['first_name'] = $patientInfo['first_name'];
        $_SESSION['last_name'] = $patientInfo['last_name'];
        $_SESSION['unit'] = $patientInfo['regiment'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['gender'] = $gender;
        $_SESSION['ward_no'] = $_POST['ward_no'];
        $_SESSION['ward'] = $_POST['ward'];
        $_SESSION['conditions'] = $_POST['conditions'];
        $_SESSION['leads'] = $_POST['leads'];
        $_SESSION['shortHistory'] = $_POST['shortHistory'];
        $_SESSION['consMOName'] = $consMOName;
        $_SESSION['consMOID'] = $consMOID;


      ?>

      <br><br><br> <button type="submit" name="confirm">Confirm</button>

     </form>
  </body>
</html>
