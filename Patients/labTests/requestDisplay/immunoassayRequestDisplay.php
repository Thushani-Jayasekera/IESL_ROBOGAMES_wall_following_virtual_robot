<?php
  session_start();
  include_once "../../classes/patientview.class.php";
  include_once "../classes/immunoassayRequest.class.php";
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
      $nic = '982753295V';  // this should be given by a session object
      $patientViewObject = new PatientView();

      $results = $patientViewObject->showLabTestsRequests($nic);

      $serializedImmunoassayRequest = $results[0]['serializedImmunoassayRequest'];

      $immunoassayRequestObject = unserialize($serializedImmunoassayRequest);

      $details= $immunoassayRequestObject->getProperty('details');

      echo "<b>Date : </b>".$details[0]."<br><br>
      <b>Lab No : </b>".$details[1]."<br><br>";

      echo "<table border='1'>
        <tr>
          <th>Sample Collection</th>
        </tr>
        <tr>
          <th>Date</th><th>Time</th>
        </tr>
        <tr>
          <td>".$details[2][0]."</td><td>".$details[3][0]."</td>
        </tr>
        <tr>
          <td>".$details[2][1]."</td><td>".$details[3][1]."</td>
        </tr>
      </table><br><br>";

      echo "<b>Service No : </b>".$immunoassayRequestObject->getProperty('force_id')."<br><b>NIC : </b>".$immunoassayRequestObject->getProperty('nic')."<br><b>Rank : </b>".$immunoassayRequestObject->getProperty('rank')."
      <br><b>Name : </b>".$immunoassayRequestObject->getProperty('first_name')." ".$immunoassayRequestObject->getProperty('last_name')."
      <br><b>Unit : </b>".$immunoassayRequestObject->getProperty('unit')."<br><br>";


      echo "<b>Age : </b>".$immunoassayRequestObject->getProperty('age')."<br><br>";

      echo "<b>Gender : </b>".$immunoassayRequestObject->getProperty('gender')."<br><br>";

      echo "<b>Ward : </b>".$immunoassayRequestObject->getProperty('ward');

      echo '<br><br><b>Tel. No : </b>'.$immunoassayRequestObject->getProperty('telNo').'<br><br>';

      echo "<b>Test Requested :</b><br>i. ".$details[7][0]."<br>
      ii. ".$details[7][1]."<br>
      iii. ".$details[7][2]."<br><br><br>

      <b>Relevent Clinic Notes : </b>".$details[4]."<br><br>
      <b>Diagnosis : </b>".$details[5]."<br><br>
      <b>Current Treatment : </b>".$details[6]."<br><br>

      <table border='1'>
        <tr>
          <th>For Follow - up patients only</th><td>".$details[8][0]."</td>
        </tr>
        <tr>
          <th>Special Serial No. of patients</th><td>".$details[8][1]."</td>
        </tr>
        <tr>
          <th>Previous test results</th><td>".$details[8][2]."</td>
        </tr>
        <tr>
          <th>Test</th><th>Value</th><th>Date</th>
        </tr>
        <tr>
          <td>".$details[9][0]."</td><td>".$details[10][0]."</td><td>".$details[11][0]."</td>
        </tr>
        <tr>
          <td>".$details[9][1]."</td><td>".$details[10][1]."</td><td>".$details[11][1]."</td>
        </tr>
      </table><br><br>";

      echo "<b>Name of Consultant/MO : </b>".$immunoassayRequestObject->getProperty('consMOName')."<br><b> Designation of Consultant/MO : </b>".$immunoassayRequestObject->getProperty('designation')."<br><b> NIC of Consultant/MO : </b>".$immunoassayRequestObject->getProperty('consMOID');

    ?>

  </body>
</html>
