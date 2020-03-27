<?php
  session_start();
  include_once "classes/hospitalTreatments.class.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical showMedicalReport</title>
  </head>
  <body>
    <?php
      echo "<h2>Treatments at a Hospital</h2>";
      $results = $_SESSION['results'];

      $serializedHospitalTreatments = $results[0]['serializedHospitalTreatments'];

      $hospitalTreatmentsObject = unserialize($serializedHospitalTreatments);

      $nature = $hospitalTreatmentsObject->getNature();
      $hospital = $hospitalTreatmentsObject->getHospital();
      $inout = $hospitalTreatmentsObject->getInout();
      $dates = $hospitalTreatmentsObject->getDates();

      $numOfRows = count($nature);

      echo "<table border='1'>";

      echo "<tr>
        <th>Nature of Illness, Operation or Injury</th><th>Name of Hospital</th><th>In or Out Patient</th><th>Approx.Dates and Period</th>
      </tr>";

      $index = 0;
      while ($index < $numOfRows){
        echo "<tr><td>".$nature[$index]."</td><td>".$hospital[$index]."</td><td>".$inout[$index]."</td><td>".$dates[$index]."</td></tr>";
        $index++;
      }



      echo "</table>";

     ?>

     <form action="medicalReportDisplay3.php" method="post">
       <button type="submit" name="next">Next</button>
     </form>
  </body>
</html>
