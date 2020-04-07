<?php
  session_start();
  include_once "../../includes/class-autoload.inc.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Immunoassay Request</title>
  </head>
  <body>
    <h1>Army Hospital</h1>
    <h2>Immunoassay Request</h2>
    <?php
      $nic = '982753195V';  // this should be given by a session object
      $patientViewObject = new PatientView();

      $results = $patientViewObject->showPatientInfo($nic);

      $patientInfo = $results[0];
    ?>

    <form action="../includes/immunoassayRequest.inc.php" method="post">
      <b>Date : </b><input type="date" name="dateOfRequest"><br><br>
      <b>Lab No : </b><input type="number" name="labNo"><br><br>

      <table border="1">
        <tr>
          <th>Sample Collection</th>
        </tr>
        <tr>
          <th>Date</th><th>Time</th>
        </tr>
        <tr>
          <td><input type="date" name="dates[]"></td><td><input type="time" name="times[]"></td>
        </tr>
        <tr>
          <td><input type="date" name="dates[]"></td><td><input type="time" name="times[]"></td>
        </tr>
      </table><br><br>

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

      <b>Ward : </b><input type="number" name="ward">

      <?php
        $mobile = $patientInfo['mobile'];

        echo '<br><br><b>Tel. No : </b><input type="number" name="contact" value='.$mobile.'><br><br>';
       ?>

      <b>Test Requested :</b><br>i. <textarea name="reqTests[]" rows="1" cols="50"></textarea><br>
      ii. <textarea name="reqTests[]" rows="1" cols="50"></textarea><br>
      iii. <textarea name="reqTests[]" rows="1" cols="50"></textarea><br><br><br>

      <b>Relevent Clinic Notes : </b><textarea name="clinicNotes" rows="5" cols="50"></textarea><br><br>
      <b>Diagnosis : </b><textarea name="diagnosis" rows="3" cols="50"></textarea><br><br>
      <b>Current Treatment : </b><textarea name="currentTreatment" rows="3" cols="50"></textarea><br><br>

      <table border="1">
        <tr>
          <th>For Follow - up patients only</th><td><textarea name="tableData[]" rows="1" cols="50"></textarea></td>
        </tr>
        <tr>
          <th>Special Serial No. of patients</th><td><textarea name="tableData[]" rows="1" cols="50"></textarea></td>
        </tr>
        <tr>
          <th>Previous test results</th><td><textarea name="tableData[]" rows="1" cols="50"></textarea></td>
        </tr>
        <tr>
          <th>Test</th><th>Value</th><th>Date</th>
        </tr>
        <tr>
          <td><textarea name="test[]" rows="1" cols="50"></textarea></td><td><textarea name="value[]" rows="1" cols="50"></textarea></td><td><input type='date' name='date[]'></td>
        </tr>
        <tr>
          <td><textarea name="test[]" rows="1" cols="50"></textarea></td><td><textarea name="value[]" rows="1" cols="50"></textarea></td><td><input type='date' name='date[]'></td>
        </tr>
      </table><br><br>

      <?php
        $consMOName = "Dr. KPN Pathirana"; // should get from a session
        $designation = "Brigadier"; // should get from a session
        $consMOID = "687543545v";  // should get from a session

        echo "<b>Name of Consultant/MO : </b>".$consMOName."<br><b> Designation of Consultant/MO : </b>".$designation."<br><b> NIC of Consultant/MO : </b>".$consMOID;

        $_SESSION['dateOfRequest'] = $_POST['dateOfRequest'];
        $_SESSION['labNo'] = $_POST['labNo'];
        $_SESSION['dates'] = $_POST['dates'];
        $_SESSION['times'] = $_POST['times'];
        $_SESSION['nic'] = $nic;
        $_SESSION['force_id'] = $patientInfo['force_id'];
        $_SESSION['rank'] = $patientInfo['rank'];
        $_SESSION['first_name'] = $patientInfo['first_name'];
        $_SESSION['last_name'] = $patientInfo['last_name'];
        $_SESSION['unit'] = $patientInfo['regiment'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['gender'] = $gender;
        $_SESSION['telNo'] = $_POST['telNo'];
        $_SESSION['ward'] = $_POST['ward'];
        $_SESSION['clinicNotes'] = $_POST['clinicNotes'];
        $_SESSION['diagnosis'] = $_POST['diagnosis'];
        $_SESSION['currentTreatment'] = $_POST['currentTreatment'];
        $_SESSION['reqTests'] = $_POST['reqTests'];
        $_SESSION['tableData'] = $_POST['tableData'];
        $_SESSION['test'] = $_POST['test'];
        $_SESSION['value'] = $_POST['value'];
        $_SESSION['date'] = $_POST['date'];
        $_SESSION['consMOName'] = $consMOName;
        $_SESSION['designation'] = $designation;
        $_SESSION['consMOID'] = $consMOID;

      ?>

      <br><br><br> <button type="submit" name="confirm">Confirm</button>

     </form>
  </body>
</html>
