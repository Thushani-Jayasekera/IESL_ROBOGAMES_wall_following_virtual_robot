<?php
  session_start();
  include_once "classes/mentalCapacity.class.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h2>Mental Capacity and Emotional stability</h2>
    <?php
      $results = $_SESSION['results'];

      $serializedMentalCapacity = $results[0]['serializedMentalCapacity'];

      $mentalCapacityObject = unserialize($serializedMentalCapacity);

      $speech = $mentalCapacityObject->getSpeech();
      $mentalBackwardness = $mentalCapacityObject->getMentalBackwardness();
      $emotionalInstability = $mentalCapacityObject->getEmotionalInstability();
      $m = $mentalCapacityObject->getM();
      $s = $mentalCapacityObject->getS();
      $effect= $mentalCapacityObject->getEffect();

      echo '<h3>Speech</h3>
      '.$speech.'<br><br>

       <h3>Evidence Suggesting,</h3>
       <h4> Mental Backwardness </h4>
      '.$mentalBackwardness.'<br><br>
      <h4> Emotional Instability </h4>
      '.$emotionalInstability.'<br><br>


      <table border="1">
      <tr><th> M </th> <th> S </th> </tr>
      <tr><td>'.$m.'</td><td>'.$s.'</td></tr>
      </table><br>
       <b>Effect on P. if any : </b>'.$effect.'<br><br><br>';

     ?>

     <form action="medicalReportDisplay10.php" method="post">
       <button type="submit" name="next">Next</button>
     </form>
  </body>
</html>
