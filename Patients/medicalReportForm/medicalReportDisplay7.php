<?php
  session_start();
  include_once "classes/upperlimbslocomotion.class.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h2>Upper Limbs and Locomotor System</h2>
    <?php
      $results = $_SESSION['results'];

      $serializedUpperLimbsLocomotion = $results[0]['serializedUpperLimbsLocomotion'];

      $upperLimbsLocomotionObject = unserialize($serializedUpperLimbsLocomotion);

      $upperLimbs = $upperLimbsLocomotionObject->getUpperLimbs();
      $u = $upperLimbsLocomotionObject->getU();
      $effectUpperLimbs = $upperLimbsLocomotionObject->getEffectUpperLimbs();
      $locomotion = $upperLimbsLocomotionObject->getLocomotion();
      $l = $upperLimbsLocomotionObject->getL();
      $effectLocomotion = $upperLimbsLocomotionObject->getEffectLocomotion();

      echo '<h3>Upper Limbs (finger, hands, wrists, elbows, shoulder girdles, cervical and dorsal vertebrae) : </h3>
      '.$upperLimbs.'<br><br><br>
      <table border="1">
      <tr><th> U </th> </tr>
      <tr><td>'.$u.'</td></tr>
      </table><br>
      <b> Effect on P. if any :</b>'.$effectUpperLimbs.'<br><br>

      <h3>Locomotion (Hahax valgus/rigidus, flat feet, joints, pelvis, lumbar and sacral vertebrae, coccys, varicose veins) : </h3>
      '.$locomotion.'<br><br><br>
      <table border="1">
      <tr><th> L </th> </tr>
      <tr><td>'.$l.'</td></tr>
      </table><br>
      <b> Effect on P. if any :</b>'.$effectLocomotion.'<br><br>';
     ?>

     <form action="medicalReportDisplay8.php" method="post">
       <button type="submit" name="next">Next</button>
     </form>
  </body>
</html>
