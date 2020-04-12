<?php
  session_start();
  include_once "../../classes/patientview.class.php";
  include_once "../classes/ABPMonitoringRequest.class.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ABP Monitoring Request</title>
  </head>
  <body>
    <h1>CARDIAC INVESTIGATION UNIT</h1>
    <h2>ABP Monitoring Request</h2>
    <?php
      $nic = '982753295V';  // this should be given by a session object
      $patientViewObject = new PatientView();

      $results = $patientViewObject->showLabTestsRequests($nic);

      $serializedABPMonitoringRequest = $results[0]['serializedABPMonitoringRequest'];

      $ABPMonitoringRequestObject = unserialize($serializedABPMonitoringRequest);



      echo "<b>Date : </b>".$ABPMonitoringRequestObject->getProperty('dateOfRequest')."<br><br>";

      echo "<b>Service No : </b>".$ABPMonitoringRequestObject->getProperty('force_id')."<br><b>Rank : </b>".$ABPMonitoringRequestObject->getProperty('rank')."
      <br><b>Name : </b>".$ABPMonitoringRequestObject->getProperty('first_name')." ".$ABPMonitoringRequestObject->getProperty('last_name')."
      <br><b>Unit : </b>".$ABPMonitoringRequestObject->getProperty('unit')."<br><br>";


      echo "<b>Age : </b>".$ABPMonitoringRequestObject->getProperty('age')."<br><br>";

      echo "<b>Gender : </b>".$ABPMonitoringRequestObject->getProperty('gender')."<br><br>";


      echo "<b>Ward No : </b>".$ABPMonitoringRequestObject->getProperty('ward_no')."<br><br>

      <b>Blood Pressure : </b>".$ABPMonitoringRequestObject->getProperty('bp')."<br><br>";

      echo "<b>Date of Birth : </b>".$ABPMonitoringRequestObject->getProperty('dob');

      echo "<br><br><b>Height : </b>".$ABPMonitoringRequestObject->getProperty('height')."
      <br><br><b>Weight : </b>".$ABPMonitoringRequestObject->getProperty('weight');

      echo '<br><br><b>Contact No : </b>'.$ABPMonitoringRequestObject->getProperty('contact');

      echo "<br><br><b>Appointed Date : </b>".$ABPMonitoringRequestObject->getProperty('appointedDate')."
      <br><br><b>Time : </b>".$ABPMonitoringRequestObject->getProperty('time')."<br><br>

      <b>Short History of case : </b>".$ABPMonitoringRequestObject->getProperty('shortHistory')."<br><br><br>";

      echo "<b>Name of Consultant/MO : </b>".$ABPMonitoringRequestObject->getProperty('consMOName')."<br><b> NIC of Consultant/MO : </b>".$ABPMonitoringRequestObject->getProperty('consMOID');

    ?>

  </body>
</html>
