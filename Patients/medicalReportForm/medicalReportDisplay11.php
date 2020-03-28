<?php
  session_start();
  include_once "classes/specialistReport.class.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h2>Specialist Reports amd Results of Investigations</h2>
    <?php
      $results = $_SESSION['results'];

      $serializedSpecialistReport = $results[0]['serializedSpecialistReportObject'];

      $specialistReportObject = unserialize($serializedSpecialistReport);

      $sraroi = $specialistReportObject->getProperty('sraroi');
      $right = $specialistReportObject->getProperty('right');
      $left = $specialistReportObject->getProperty('left');
      $dateOfReport = $specialistReportObject->getProperty('dateOfReport');
      $initPulheems = $specialistReportObject->getProperty('initPulheems');
      $servicePulheems = $specialistReportObject->getProperty('servicePulheems');

      echo $sraroi.
        '<br><br><br><br><table border="1">
          <tr>
            <th> </th><th>Vision without glasses</th><th>Sph.</th><th>Cyl.</th><th>Axis standard notation</th><th>Vision with glasses</th>
          </tr>
          <tr>
            <th>R</th><td>'.$right[0].'</textarea></td><td>'.$right[1].'</td><td>'.$right[2].'</td><td>'.$right[3].'</td><td>'.$right[4].'</td>
          </tr>
          <tr>
            <th>L</th><td>'.$left[0].'</td><td>'.$left[1].'</td><td>'.$left[2].'</td><td>'.$left[3].'</td><td>'.$left[4].'</td>
        </table><br>
        <br><b>Date : </b>'.$dateOfReport.'<br><br>

        <h3><b>(a) Initial PULHEEMS Assessment</b></h3>
        <table border="2">
          <tr>
            <th>Y.O.B</th><th>P</th><th>U</th><th>L</th><th>H</th><th>E</th><th>E</th><th>M</th><th>S</th>
          </tr>
          <tr>
            <td>'.$initPulheems[0].'</td><td>'.$initPulheems[1][0].'</td><td>'.$initPulheems[1][1].'</td><td>'.$initPulheems[1][2].'</td><td>'.$initPulheems[1][3].'</td><td>'.$initPulheems[1][4].'</td><td>'.$initPulheems[1][5].'</td><td>'.$initPulheems[1][6].'</td><td>'.$initPulheems[1][7].'</td>
          </tr>
        </table><br>
        <b>Height(inches) : </b>'.$initPulheems[1].'<br>
        <b>CP. : </b>'.$initPulheems[2].'<br>
        <b>Weight(lbs) : </b>'.$initPulheems[3].'<br><br>

        <b>P : </b>'.$initPulheems[4].'<br>
        <b>U : </b>'.$initPulheems[5].'<br>
        <b>L : </b>'.$initPulheems[6].'<br>
        <b>S : </b>'.$initPulheems[7].'<br><br>

        <b>Date : </b>'.$initPulheems[8].'<br><br>

        <h3><b>(b) Service PULHEEMS Assessment</b></h3>
        <table border="2">
          <tr>
            <th>Y.O.B</th><th>P</th><th>U</th><th>L</th><th>H</th><th>E</th><th>E</th><th>M</th><th>S</th>
          </tr>
          <tr>
          <td>'.$servicePulheems[0].'</td><td>'.$servicePulheems[1][0].'</td><td>'.$servicePulheems[1][1].'</td><td>'.$servicePulheems[1][2].'</td><td>'.$servicePulheems[1][3].'</td><td>'.$servicePulheems[1][4].'</td><td>'.$servicePulheems[1][5].'</td><td>'.$servicePulheems[1][6].'</td><td>'.$servicePulheems[1][7].'</td>
        </tr>
      </table><br>
      <b>Height(inches) : </b>'.$servicePulheems[1].'<br>
      <b>CP. : </b>'.$servicePulheems[2].'<br>
      <b>Weight(lbs) : </b>'.$servicePulheems[3].'<br><br>

      <b>P : </b>'.$servicePulheems[4].'<br>
      <b>U : </b>'.$servicePulheems[5].'<br>
      <b>L : </b>'.$servicePulheems[6].'<br>
      <b>S : </b>'.$servicePulheems[7].'<br><br>

      <b>Date : </b>'.$servicePulheems[8].'<br><br>';
     ?>

     <form action="medicalReportDisplay11.php" method="post">
       <button type="submit" name="finish">Finish</button>
     </form>
  </body>
</html>
