<?php
  session_start();
  include_once "../../includes/patientview.inc.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
    <meta charset="utf-8">
    <title>Basci ECG Request</title>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../css/labTestRequests.css">
  </head>
  <body>
    <div class="form-style">
      <h1>CARDIAC INVESTIGATION UNIT</h1>
      <h2>Basic ECG Request</h2>
      <?php
        $nic = '982753295V';  // this should be given by a session object
        $patientViewObject = new PatientView();

        $results = $patientViewObject->showPatientInfo($nic);

        $patientInfo = $results[0];
      ?>

      <form action="../includes/basicECGRequest.inc.php" method="post">
        <div class="section"><span>1</span>Date</div>
        <div class="inner-wrap">
          <input type="date" name="dateOfRequest">
        </div>
        <br><br>

        <div class="section"><span>2</span>Personal Info</div>
        <div class="inner-wrap">
          <?php
            echo "<label>Service No : </label>".$patientInfo['force_id']."<br><br><label>NIC : </label>".$patientInfo['nic']."<br><br><label>Rank : </label>".$patientInfo['rank']."
            <br><br><label>Name : </label>".$patientInfo['first_name']." ".$patientInfo['last_name']."
            <br><br><label>Unit : </label>".$patientInfo['regiment']."<br><br>";
          ?>

          <br><label>Age : </label><input type="number" name="age" placeholder="Ex: 30"><br><br>

          <?php
            if ($patientInfo['gender'] == 'male') {
              $gender  = 'Male';
            }else {
              $gender = 'Female';
            }
            echo "<br><label>Gender : </label>".$gender."<br>";
          ?>

        </div><br><br>

        <div class="section"><span>3</span>Medical Info</div>
        <div class="inner-wrap">
          <label>Ward No : </label><input type="number" name="ward_no"><br>
          <label>Ward : </label>OPD <input type="radio" name="ward" value="OPD"> ICU <input type="radio" name="ward" value="ICU"> PULHEEMS <input type="radio" name="ward" value="PULHEEMS">
          Clinic <input type="radio" name="ward" value="Clinic"> Theater <input type="radio" name="ward" value="Theater"> Dialysis <input type="radio" name="ward" value="Dialysis">
          ETU <input type="radio" name="ward" value="ETU"><br><br>

          <label>In Ward : </label><input type="checkbox" name="conditions[]" value="In Ward"><br><br> <label>Urgent : </label><input type="checkbox" name="conditions[]" value="Urgent"><br><br> <label>Pre ope : </label> <input type="checkbox" name="conditions[]" value="Pre ope"><br><br>
          <label>8 min walking for PULHEEMS : </label> <input type="checkbox" name="conditions[]" value="8 min walking for PULHEEMS"><br><br>

          <label>Standard Leads : </label><input type="checkbox" name="leads[]" value="Standard Leads"><br><br> <label> L II Rhythem strip : </label><input type="checkbox" name="leads[]" value="L II Rhythem strip"><br><br> <label> Deep inspiration : </label><input type="checkbox" name="leads[]" value="Deep inspiration"><br><br>
          <label> Other Leads : </label><input type="text" name="leads[]"><br><br><br>

          <label>Short History of case : </label><textarea name="shortHistory" rows="4" cols="50"></textarea><br><br><br>
        </div><br><br>

        <div class="section"><span>4</span>Doctor's Info</div>
        <div class="inner-wrap">
          <?php
            $consMOName = "Dr. KPN Pathirana"; // should get from a session
            $consMOID = "687543545v";  // should get from a session

            echo "<label>Name of Consultant/MO : </label>".$consMOName."<br><br><label> NIC of Consultant/MO : </label>".$consMOID;

          ?>

        </div>

        <?php
          $_SESSION['nic'] = $nic;
          $_SESSION['force_id'] = $patientInfo['force_id'];
          $_SESSION['rank'] = $patientInfo['rank'];
          $_SESSION['first_name'] = $patientInfo['first_name'];
          $_SESSION['last_name'] = $patientInfo['last_name'];
          $_SESSION['unit'] = $patientInfo['regiment'];
          $_SESSION['gender'] = $gender;
          $_SESSION['consMOName'] = $consMOName;
          $_SESSION['consMOID'] = $consMOID;

       ?>

        <br><br><br>

        <div class="button-section">
          <input type="submit" name="confirm"/>
        </div>

       </form>
    </div>
  </body>
</html>
