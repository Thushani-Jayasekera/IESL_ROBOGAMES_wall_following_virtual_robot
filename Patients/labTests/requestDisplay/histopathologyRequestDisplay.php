<?php
  session_start();
  include_once "../../classes/patientview.class.php";
  include_once "../classes/histopathologyRequest.class.php";
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

      $results = $patientViewObject->showLabTestsRequests($nic);

      $serializedHistopathologyRequest = $results[0]['serializedHistopathologyRequest'];

      $histopathologyRequestObject = unserialize($serializedHistopathologyRequest);

      echo "<b>Regt No : </b>".$histopathologyRequestObject->getProperty('force_id')."<br><b>NIC : </b>".$histopathologyRequestObject->getProperty('nic')."<br><b>Rank : </b>".$histopathologyRequestObject->getProperty('rank')."
      <br><b>Name : </b>".$histopathologyRequestObject->getProperty('first_name')." ".$histopathologyRequestObject->getProperty('last_name')."
      <br><b>Unit : </b>".$histopathologyRequestObject->getProperty('unit')."<br><br>";


      echo "<b>Age : </b>".$histopathologyRequestObject->getProperty('age')." Yrs<br><br>";


      echo "<b>Family Name : </b>".$histopathologyRequestObject->getProperty('familyName')."br><br>";

      echo "<b>Gender : </b>".$histopathologyRequestObject->getProperty('gender')."<br><br>";


      echo "<b>Ward : </b>".$histopathologyRequestObject->getProperty('ward')."<br><br>";

      echo "<b>Tel. No : </b>".$histopathologyRequestObject->getProperty('telNo')."<br><br>";

      $details = $histopathologyRequestObject->getProperty('details');

      echo "<b>Specimen type & site : </b><br>".$details[0]."<br><br>
      <b>Relevent clinical history (duration etc.) & finding. : </b><br>".$details[1]."<br><br>
      <b>Relevent investigations : </b><br>".$details[2]."<br><br>
      <b>Relevent radiological findings (Including USS/CT/MRI/Mammography) : </b><br>".$details[3]."<br><br>
      <b>Probe diagnosis / Differential diagnosis : </b><br>".$details[4]."<br><br>
      <b>If a previous biopsy was done (including FNAC/PAP/Ytru cut etc.) give details diagnosis : </b><br>".$details[5]."<br><br>
      <b>If done at Army Hospital, reference number of pathology report : </b><br>".$details[6]."<br><br>
      <b>Pre.Op.chemotherapy given : </b>".$details[7]."<br><br>
      <b>Radiotherapy given : </b>".$details[8]."<br><br>
      <b>Relevent opertative findings / endoscopic findings and orientation of the specimen : </b><br>".$details[9]."</textarea><br><br>
      <b>Details of the Consultant / MO to be contacted for further details regarding the surgery/ procedure : </b><br>".$details[10]."</textarea><br><br>";

      echo "<br><br><b>Contact No : </b>".$details[11]."<br><br>";
      echo "<b>Date : </b>".$details[12]."<br><br>";

      echo "<b>Name of Consultant/MO : </b>".$histopathologyRequestObject->getProperty('consMOName')."<br><b> Designation of Consultant/MO : </b>".$histopathologyRequestObject->getProperty('designation')."<br><b> NIC of Consultant/MO : </b>".$histopathologyRequestObject->getProperty('consMOID');

      echo "<br><br><b>Extension No Histopathology : </b>".$details[13]." <b> Extension No Reporting Room : </b>".$details[14];


    ?>

  </body>
</html>
