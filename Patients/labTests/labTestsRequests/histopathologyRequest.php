<?php
  session_start();
  include_once "../../includes/class-autoload.inc.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Histopathology Request</title>
  </head>
  <body>
    <h1>DEPARTMENT OF HISTOPATHOLOGY</h1>
    <h2>Request Form for Histopathology / FNAC</h2>
    <?php
      $nic = '982753295V';  // this should be given by a session object
      $patientViewObject = new PatientView();

      $results = $patientViewObject->showPatientInfo($nic);

      $patientInfo = $results[0];
    ?>

    <form action="../includes/histopathologyRequest.inc.php" method="post">
      <?php
        echo "<b>Regt No : </b>".$patientInfo['force_id']."<br><b>NIC : </b>".$patientInfo['nic']."<br><b>Rank : </b>".$patientInfo['rank']."
        <br><b>Name : </b>".$patientInfo['first_name']." ".$patientInfo['last_name']."
        <br><b>Unit : </b>".$patientInfo['regiment']."<br><br>";
      ?>

      <b>Age : </b><input type="number" name="age" placeholder="Ex: 30"> Yrs<br><br>

      <?php
        echo "<b>Family Name : </b><input type='text' name='familyName' value=".$patientInfo['last_name']."><br><br>";
        if ($patientInfo['gender'] == 'male') {
          $gender  = 'Male';
        }else {
          $gender = 'Female';
        }
        echo "<b>Gender : </b>".$gender."<br><br>";
      ?>

      <b>Ward : </b><input type="text" name="ward"><br><br>

      <?php
        $mobile = $patientInfo['mobile'];

        echo '<b>Tel. No : </b><input type="number" name="telNo" value='.$mobile.'><br><br>';
       ?>

       <b>Specimen type & site : </b><br><textarea name="specimen" rows="4" cols="50"></textarea><br><br>
       <b>Relevent clinical history (duration etc.) & finding. : </b><br><textarea name="clinicalHistory" placeholder="Eg; Lymphadenopathy, Hepatosplenomegaly" rows="4" cols="50"></textarea><br><br>
       <b>Relevent investigations : </b><br><textarea name="investigations" rows="4" cols="50"></textarea><br><br>
       <b>Relevent radiological findings (Including USS/CT/MRI/Mammography) : </b><br><textarea name="radio" rows="4" cols="50"></textarea><br><br>
       <b>Probe diagnosis / Differential diagnosis : </b><br><textarea name="proDiff" rows="4" cols="50"></textarea><br><br>
       <b>If a previous biopsy was done (including FNAC/PAP/Ytru cut etc.) give details diagnosis : </b><br><textarea name="prev" rows="4" cols="50"></textarea><br><br>
       <b>If done at Army Hospital, reference number of pathology report : </b><br><textarea name="reportNo" rows="4" cols="50"></textarea><br><br>
       <b>Pre.Op.chemotherapy given : </b> Yes <input type="radio" name="chemo" value="Yes"> No <input type="radio" name="chemo" value="No"><br><br>
       <b>Radiotherapy given : </b> Yes <input type="radio" name="radiotherapy" value="Yes"> No <input type="radio" name="radiotherapy" value="No"><br><br>
       <b>Relevent opertative findings / endoscopic findings and orientation of the specimen : </b><br><textarea name="findings" rows="4" cols="50"></textarea><br><br>
       <b>Details of the Consultant / MO to be contacted for further details regarding the surgery/ procedure : </b><br><textarea name="contactDoc" rows="4" cols="50"></textarea><br><br>
       <?php         echo '<br><br><b>Contact No : </b><input type="number" name="contact" value='.$mobile.'><br><br>' ?>
       <b>Date : </b><input type="date" name="date"><br><br>

      <?php
        $consMOName = "Dr. KPN Pathirana"; // should get from a session
        $designation = "Brigadier"; // should get from a session
        $consMOID = "687543545v";  // should get from a session

        echo "<b>Name of Consultant/MO : </b>".$consMOName."<br><b> Designation of Consultant/MO : </b>".$designation."<br><b> NIC of Consultant/MO : </b>".$consMOID;

        echo "<br><br><b>Extension No Histopathology : </b><input type='number' name='hisNo'> <b> Extension No Reporting Room : </b><input type='number' name='repRoom'>";

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
