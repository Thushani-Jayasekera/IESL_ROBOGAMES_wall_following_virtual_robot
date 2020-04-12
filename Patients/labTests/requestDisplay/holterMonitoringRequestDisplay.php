<?php
  session_start();
  include_once "../../classes/patientview.class.php";
  include_once "../classes/holterMonitoringRequest.class.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Holter Monitoring Request</title>
  </head>
  <body>
    <h1>CARDIAC INVESTIGATION UNIT</h1>
    <h2>Holter Monitoring Request</h2>
    <?php
      $nic = '982753295V';  // this should be given by a session object
      $patientViewObject = new PatientView();

      $results = $patientViewObject->showLabTestsRequests($nic);

      $serializedHolterMonitoringRequest = $results[0]['serializedHolterMonitoringRequest'];

      $holterMonitoringRequestObject = unserialize($serializedHolterMonitoringRequest);

      echo "<b>Date : </b>".$holterMonitoringRequestObject->getProperty('dateOfRequest')."<br><br>";

      echo "<b>Service No : </b>".$holterMonitoringRequestObject->getProperty('force_id')."<br><b>NIC : </b>".$holterMonitoringRequestObject->getProperty('nic')."<br><b>Rank : </b>".$holterMonitoringRequestObject->getProperty('rank')."
      <br><b>Name : </b>".$holterMonitoringRequestObject->getProperty('first_name')." ".$holterMonitoringRequestObject->getProperty('last_name')."
      <br><b>Unit : </b>".$holterMonitoringRequestObject->getProperty('unit')."<br><br>";

      echo "<b>Age : </b>".$holterMonitoringRequestObject->getProperty('age')."<br><br>";

      echo "<b>Gender : </b>".$holterMonitoringRequestObject->getProperty('gender')."<br><br>";

      echo "<b>Ward No : </b>".$holterMonitoringRequestObject->getProperty('ward_no')."<br><br>

      <b>Blood Pressure : </b>".$holterMonitoringRequestObject->getProperty('bp')."<br><br>";

      echo "<b>Date of Birth : </b>".$holterMonitoringRequestObject->getProperty('dob');


      echo "<br><br><b>Height : </b>".$holterMonitoringRequestObject->getProperty('height')."
      <br><br><b>Weight : </b>".$holterMonitoringRequestObject->getProperty('weight');

      echo "<br><br><b>Contact No : </b>".$holterMonitoringRequestObject->getProperty('contact');

       echo "<br><br><b>Appointed Date : </b>".$holterMonitoringRequestObject->getProperty('appointedDate')."
       <br><br><b>Time : </b>".$holterMonitoringRequestObject->getProperty('time')."<br><br>

       <b>Short History of case : </b>".$holterMonitoringRequestObject->getProperty('shortHistory')."<br><br><br>";

      echo "<b>Name of Consultant/MO : </b>".$holterMonitoringRequestObject->getProperty('consMOName')."<br><b> NIC of Consultant/MO : </b>".$holterMonitoringRequestObject->getProperty('consMOID');

    ?>

  </body>
</html>
