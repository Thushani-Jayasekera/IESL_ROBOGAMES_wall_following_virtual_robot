<?php
  session_start();
  include_once "../../classes/patientview.class.php";
  include_once "../classes/xRayRequest.class.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>X Ray Request</title>
  </head>
  <body>
    <h1>Army Hospital</h1>
    <h2>X Ray Request</h2>
    <?php
      $nic = '982753295V';  // this should be given by a session object
      $patientViewObject = new PatientView();

      $results = $patientViewObject->showLabTestsRequests($nic);

      $serializedXRayRequest = $results[0]['serializedXRayRequest'];

      $xRayRequestObject = unserialize($serializedXRayRequest);

      echo "<b>Date : </b>".$xRayRequestObject->getProperty('dateOfRequest')."<br><br>";

      echo "<b>Service No : </b>".$xRayRequestObject->getProperty('force_id')."<br><b>NIC : </b>".$xRayRequestObject->getProperty('nic')."<br><b>Rank : </b>".$xRayRequestObject->getProperty('rank')."
      <br><b>Name : </b>".$xRayRequestObject->getProperty('first_name')." ".$xRayRequestObject->getProperty('last_name')."
      <br><b>Unit / Ship / A.F.Stn. : </b>".$xRayRequestObject->getProperty('unit')."<br><br>";

      echo "<b>Age : </b>".$xRayRequestObject->getProperty('age')."<br><br>
      <b>Part to be X-Rayed : </b>".$xRayRequestObject->getProperty('xRayPart')."<br><br>
      <b>Short History of Case (To be completed by M.O.I. / c case) : </b>".$xRayRequestObject->getProperty('shortHistory')."<br><br>";

      echo "<b>Name of Consultant/MO : </b>".$xRayRequestObject->getProperty('consMOName')."<br><b> Designation of Consultant/MO : </b>".$xRayRequestObject->getProperty('designation')."<br><b> NIC of Consultant/MO : </b>".$xRayRequestObject->getProperty('consMOID');

      ?>

  </body>
</html>
