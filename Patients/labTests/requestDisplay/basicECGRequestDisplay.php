<?php
  session_start();
  include_once "../../classes/patientview.class.php";
  include_once "../classes/basicECGRequest.class.php";
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
      $nic = '982753295V';  // this should be given by a session object
      $patientViewObject = new PatientView();

      $results = $patientViewObject->showLabTestsRequests($nic);

      $serializedBasicECGRequest= $results[0]['serializedBasicECGRequest'];

      $basicECGRequestObject = unserialize($serializedBasicECGRequest);

      echo "<b>Date : </b>".$basicECGRequestObject->getProperty('dateOfRequest')."<br><br>";

      echo "<b>Service No : </b>".$basicECGRequestObject->getProperty('force_id')."<br><b>NIC : </b>".$basicECGRequestObject->getProperty('nic')."<br><b>Rank : </b>".$basicECGRequestObject->getProperty('dateOfRequest')."
      <br><b>Name : </b>".$basicECGRequestObject->getProperty('first_name')." ".$basicECGRequestObject->getProperty('last_name')."
      <br><b>Unit : </b>".$basicECGRequestObject->getProperty('unit')."<br><br>";

      echo "<b>Age : </b>".$basicECGRequestObject->getProperty('age')."<br><br>";

      echo "<b>Gender : </b>".$basicECGRequestObject->getProperty('dateOfRequest')."<br><br>";

      echo "<b>Ward No : </b>".$basicECGRequestObject->getProperty('ward_no')."<br>
      <b>Ward : </b>".$basicECGRequestObject->getProperty('ward')."<br><br>";

      for ($i=0; $i < count($basicECGRequestObject->getProperty('conditions')) ; $i++) {
        echo "<b>(*)".($basicECGRequestObject->getProperty('conditions'))[$i]."</b><br>";
      }
      echo "<br>";
      for ($i=0; $i < count($basicECGRequestObject->getProperty('leads')) ; $i++) {
        if ($basicECGRequestObject->getProperty('leads')[$i] != "") {
          echo "<b>(*)".($basicECGRequestObject->getProperty('leads'))[$i]."</b><br>";
        }
      }

      echo "<br><b>Short History of case : </b>".$basicECGRequestObject->getProperty('shortHistory')."<br><br><br>";

      echo "<b>Name of Consultant/MO : </b>".$basicECGRequestObject->getProperty('consMOName')."<br><b> NIC of Consultant/MO : </b>".$basicECGRequestObject->getProperty('consMOID');


    ?>


  </body>
</html>
