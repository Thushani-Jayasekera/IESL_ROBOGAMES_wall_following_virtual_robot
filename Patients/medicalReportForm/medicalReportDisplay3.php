<?php
  session_start();
  include_once "classes/otherMedicalTreatments.class.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h2>Other Medical Treatments at Home or in a Nursing Home</h2>
    <?php
      $results = $_SESSION['results'];

      $serializedOtherMedicalTreatments = $results[0]['serializedOtherMedicalTreatments'];
      $otherMedicalTreatmentsObject = unserialize($serializedOtherMedicalTreatments);

      $nature = $otherMedicalTreatmentsObject->getNature();
      $nameAndAddress = $otherMedicalTreatmentsObject->getNameAndAddress();
      $datePeriod = $otherMedicalTreatmentsObject->getDatePeriod();

      echo "<table border='1'>";

      echo "<tr>
          <th>Nature of Illness, Operation or Injury</th><th>Name and Address of Doctor or Nursing Home</th><th>Approx. Date and Period</th>
        </tr>";

      $rows = count($nature);
      $index = 0;
      while ($index < $rows){
        echo "<tr><td>".$nature[$index]."</td><td>".$nameAndAddress[$index]."</td><td>".$dates[$index]."</td></tr>";
        $index++;
      }

      echo "</table>";
      echo "<br><b>Any other information the patient wishes to give about his/her Health : </b><br><br>".$results[0]['otherInfo']."<br>";

      $summary = $results[0]['summary'];

      echo "<br><br><b>Medical Examiner's Summary of important points in 2 and 3 above with comments and additional information of significance : </b><br><br>
            ".$summary."<br><br>";
     ?>

     <form action="medicalReportDisplay5.php" method="post">
       <button type="submit" name="next">Next</button>
     </form>
  </body>
</html>
