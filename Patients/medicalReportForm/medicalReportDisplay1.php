<?php
  include_once "../includes/class-autoload.inc.php";
  include_once "classes/personalHistory.class.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h1>Medical Report</h1>
    <?php
      $force_id = "s/65445"; // should get this from a session SplObjectStorage

      $patientViewObject = new PatientView();
      $results = $patientViewObject->showMedicalReport($force_id);

      $nic = $results[0]['nic'];
      $date = $results[0]['date'];

      echo "<h4>Service No : ".$force_id."</h4>";
      echo "<h4>NIC : ".$nic."</h4>";
      echo "<h4>Date of Submission: ".$date."</h4>";

      echo "<h2>Personal History</h2>";

      $serializedPersonalHistory = $results[0]['serializedPersonalHistory'];
      $personalHistoryObject = unserialize($serializedPersonalHistory);
      $illnessDetails = $personalHistoryObject->getIllnessDetails();

      echo '<table border="1">
        <tr>
          <th>Illness</th> <th>Yes/No</th><th>If "Yes", at what age?</th>
        </tr>
        <tr> <td>Bronchitis</td><td>'.$illnessDetails['bronchitis'][0].'</td><td>'.$illnessDetails['bronchitis'][1].'</td></tr>
        <tr> <td>Asthma</td><td>'.$illnessDetails['asthma'][0].'</td><td>'.$illnessDetails['asthma'][1].'</td></tr>
        <tr> <td>Tuberculosis</td><td>'.$illnessDetails['tb'][0].'</td><td>'.$illnessDetails['tb'][1].'</td></tr>
        <tr> <td>Fits</td><td>'.$illnessDetails['fits'][0].'</td><td>'.$illnessDetails['fits'][1].'</td></tr>
        <tr> <td>Gastric Disorders</td><td>'.$illnessDetails['gastric'][0].'</td><td>'.$illnessDetails['gastric'][1].'</td></tr>
        <tr> <td>Rheumatism</td><td>'.$illnessDetails['rheumatism'][0].'</td><td>'.$illnessDetails['rheumatism'][1].'</td></tr>
        <tr> <td>Nervous Breakdown</td><td>'.$illnessDetails['nervous'][0].'</td><td>'.$illnessDetails['nervous'][1].'</td></tr>
        <tr> <td>Mental Illness</td><td>'.$illnessDetails['mental'][0].'</td><td>'.$illnessDetails['mental'][1].'</td></tr>
        <tr> <td>Filariasis</td><td>'.$illnessDetails['filariasis'][0].'</td><td>'.$illnessDetails['filariasis'][1].'</td></tr>
        <tr> <td>Any Other Illness</td><td>'.$illnessDetails['other'][0].'</td><td>'.$illnessDetails['other'][1].'</td></tr>
      </table><br>';

      if ($illnessDetails['other'][2] != ''){
        echo "<b>Other Illness :</b> ".$illnessDetails['other'][2]."<br><br>";
      }

      $data = $personalHistoryObject->getData();

      foreach ($data as $singleData) {
        switch ($singleData) {
          case 'ears':
            echo "(*) Have had a discharge or running from ears.<br>";
            break;
          case 'xray':
            $xrayData = $personalHistoryObject->getReasonForXray();
            echo "(*) Have been X-Rayed his/her chest. Reason : ".$xrayData."<br>";
            break;
          case 'discharged':
            echo "(*) Have been discharged as medically unfit from any bramch of the services.<br>";
            break;
          case 'rejected':
          echo "(*) Have been rejected as medically unfit from any branch of the services.<br>";
            break;
          case 'disabilitypension':
            echo "(*) Have been or is in receipt of a disability pension.<br>";
            break;
        }
      }
     ?>

     <form action="medicalReportDisplay2.php" method="post">
       <br><button type="submit" name="next">Next</button>
     </form>
  </body>
</html>
