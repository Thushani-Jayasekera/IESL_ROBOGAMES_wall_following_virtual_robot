<?php
  session_start();
  include_once "../../classes/patientview.class.php";
  include_once "../classes/generalLabTestRequest.class.php";
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

      $results = $patientViewObject->showLabTestsRequests($nic);

      $serializedGeneralLabTestRequest = $results[0]['serializedGeneralLabTestRequest'];

      $generalLabTestRequestObject = unserialize($serializedGeneralLabTestRequest);



      echo "<b>LABY. REPORT No. : </b>".$generalLabTestRequestObject->getProperty('labyReportNo')."<br><br>
      <b>SENDER'S No. : </b>".$generalLabTestRequestObject->getProperty('sendersNo')."<br><br>";

      echo "<b>Service No : </b>".$generalLabTestRequestObject->getProperty('force_id')."<br><b>NIC : </b>".$generalLabTestRequestObject->getProperty('nic')."<br><b>Rank : </b>".$generalLabTestRequestObject->getProperty('rank')."
      <br><b>Name : </b>".$generalLabTestRequestObject->getProperty('first_name')." ".$generalLabTestRequestObject->getProperty('last_name')."
      <br><b>Unit : </b>".$generalLabTestRequestObject->getProperty('unit')."<br><br>";

      echo "<b>Age : </b>".$generalLabTestRequestObject->getProperty('age')."<br><br>";

      echo "<b>Gender : </b>".$generalLabTestRequestObject->getProperty('gender')."<br><br>";


      echo "<b>Ward : </b>".$generalLabTestRequestObject->getProperty('ward')."<br><br>

      ".$generalLabTestRequestObject->getProperty('at')."<b> To Officer i/c Laboratory.</b><br><br>
      <b>Accompanying Specimen of : </b>".$generalLabTestRequestObject->getProperty('specimen')."<br><br>
      <b>Examination Required : </b>".$generalLabTestRequestObject->getProperty('exam')."<br><br>
      <b>Points Requiring Special Investigation : </b>".$generalLabTestRequestObject->getProperty('spPoints')."<br><br>
      <h3>Diagnosis</h3>
      <b>Short statement of case, including treatement and progress and references to any previous laboratory reports</b><br><br>
      ".$generalLabTestRequestObject->getProperty('diagnosis')."<br><br>
      <b>Station : </b>".$generalLabTestRequestObject->getProperty('station')."<br><br>

      <b>Date : </b>".$generalLabTestRequestObject->getProperty('dateOfRequest')."<br><br>
      <b>Time : </b>".$generalLabTestRequestObject->getProperty('time')."<br><br>";


      echo "<b>Name of Consultant/MO : </b>".$generalLabTestRequestObject->getProperty('consMOName')."<br><b> Designation of Consultant/MO : </b>".$generalLabTestRequestObject->getProperty('designation')."<br><b> NIC of Consultant/MO : </b>".$generalLabTestRequestObject->getProperty('consMOID');

      ?>

  </body>
</html>
