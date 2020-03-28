<?php
  session_start();
  include_once "classes/physicalCapacity.class.php";
  include_once "classes/physicalCapacityFemale.class.php";
  include_once "classes/physicalCapacityFemaleMarried.class.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h2>Physical Capacity</h2>
    <?php
      $results = $_SESSION['results'];

      $serializedPhysicalCapacityObject = $results[0]['serializedPhysicalCapacityObject'];

      $physicalCapacityObject = unserialize($serializedPhysicalCapacityObject);

      $eyesColor = $physicalCapacityObject->getProperty('eyesColor');
      $hairColor = $physicalCapacityObject->getProperty('hairColor');
      $complextion = $physicalCapacityObject->getProperty('complextion');
      $height = $physicalCapacityObject->getProperty('height');
      $weight = $physicalCapacityObject->getProperty('weight');
      $scars= $physicalCapacityObject->getProperty('scars');
      $urAppearance = $physicalCapacityObject->getProperty('urAppearance');
      $urAlbumen = $physicalCapacityObject->getProperty('urAlbumen');
      $urSugar = $physicalCapacityObject->getProperty('urSugar');
      $urSpGravity = $physicalCapacityObject->getProperty('urSpGravity');
      $physique = $physicalCapacityObject->getProperty('physique');
      $guap = $physicalCapacityObject->getProperty('guap');
      $skin = $physicalCapacityObject->getProperty('skin');
      $eConditions = $physicalCapacityObject->getProperty('eConditions');
      $heartSize = $physicalCapacityObject->getProperty('heartSize');
      $sounds = $physicalCapacityObject->getProperty('sounds');
      $arterialWalls = $physicalCapacityObject->getProperty('arterialWalls');
      $pulseRate = $physicalCapacityObject->getProperty('pulseRate');
      $bp = $physicalCapacityObject->getProperty('bp');
      $respSystemInfo = $physicalCapacityObject->getProperty('respSystemInfo');
      $fullExpChest = $physicalCapacityObject->getProperty('fullExpChest');
      $rangeOfExp = $physicalCapacityObject->getProperty('rangeOfExp');
      $centralNerveSys = $physicalCapacityObject->getProperty('centralNerveSys');
      $abdomen =$physicalCapacityObject->getProperty('abdomen');
      $abnormalities = $physicalCapacityObject->getProperty('abnormalities');
      $gender = $physicalCapacityObject->getProperty('gender');

      echo '<h3>(a) Identification</h3>
      <b>Color of eyes : </b>'.$eyesColor.'<br>
      <b>Color of Hair : </b>'.$hairColor.'<br>
      <b>Complexion : </b>'.$complextion.'<br><br>';

      echo "<b>Height(Inches) : </b>".$height."
      <br><b>Weight(lbs) : </b>".$weight."<br><br>

      <b>Scars, tattoo marks, &c., state site: </b>".$scars."<br><br>";

      echo '<h3>(b) Urine Examination</h3>
      <b>Appearance : </b>'.$urAppearance.'<br>
      <b>Albumen : </b>'.$urAlbumen.'<br>
      <b>Sugar : </b>'.$urSugar.'<br>
      <b>Special Gravity : </b>'.$urSpGravity.'<br><br>';

      echo "<h3>(c) Physique</h3>".$physique."<br><br>

      <h3>(d) Genito-urinary and perineum</h3>
      <p><b>(Hydrocele, varicocele, undescended test is haemorrhoids, evidence of previous V.D.)</b></p>
      ".$guap."<br><br>

      <h3>(e) Skin</h3>".$skin."<br><br>

      <h3>(f) Endocrine conditions</h3>".$eConditions."<br><br>";

      echo '<h3>(g) Cardio Vascular System</h3>
      <b>Heart Size : </b>'.$heartSize.'<br>';

      echo "<b>Sounds : </b>".$sounds."<br>
      <b>Arterial Walls : </b>".$arterialWalls."<br><br>";

      echo "<table border='1'>
        <tr>
          <th>Pules Rate</th><th>E.TT. (if carried out) B.P. (if taken)</th>
        </tr>
        <tr>
          <td>".$pulseRate."</td><td>".$bp."</td>
        </tr>
      </table>
      <h3>(h) Respiratory System</h3>".$respSystemInfo."<br>
     <p><b>Chest Measurements (to nearest 1/2 inch)</b></p>";

     echo ' <b>Full Expiration(Inches) : </b>'.$fullExpChest.'<br>
     <b>Range of Expansion(Inches) : </b>'.$rangeOfExp.'<br><br>';

     echo "<h3>(i) Central Nervous System</h3>
     <p><b>(Reflexes, tromors)</b></p>
     ".$centralNerveSys."<br>

     <h3>(j) Abdomen</h3>
     <p><b>(Hernia, muscle tone and organs)</b></p>
     ".$abdomen."<br>

     <h3>(k) Any Abnormalities or Conditions Affecting Physical Papacity</h3>
     <p><b>(not already noted)</b></p>
     ".$abnormalities."<br><br>";

     if ($physicalCapacityObject instanceof PhysicalCapacityFemale) {
       $gender = 'Female';

       echo '<b>Gender : </b>'.$gender.'<br><br>';

       $womenInfo = $physicalCapacityObject->getPropertyF('womenInfo');
       $lmpDate = $physicalCapacityObject->getPropertyF('lmpDate');
       $maritalState = $physicalCapacityObject->getPropertyF('maritalState');

       echo "<h3>(l) Women</h3>
       <p><b>(Breasts, menstrual history, vaginal dischargbe, prolapse)</b></p>
       ".$womenInfo."<br><br>
       <b>L.M.P.(date) : </b>".$lmpDate."<br><br>";

       if ($maritalState == 'yes') {
         echo "<b>Marital State : </b>Married<br><br>";

         $numChildren = $physicalCapacityObject->getPropertyFM('numChildren');
         $numPregs = $physicalCapacityObject->getPropertyFM('numPregs');
         $dateLastConf = $physicalCapacityObject->getPropertyFM('dateLastConf');

         echo '<b>No. of Children : </b>'.$numChildren.'<br>
         <b>No. of Pregnancies : </b>'.$numPregs.'<br>
         <b>Date of Last Confinement : </b>'.$dateLastConf.'<br><br><br>';

       }else {
         echo "<b>Marital State : <b>Not Married<br><br><br>";
       }

     }else{
       $gender = 'Male';

       echo '<b>Gender : </b>'.$gender.'<br><br><br>';

     }

     ?>

     <form action="medicalReportDisplay9.php" method="post">
       <button type="submit" name="next">Next</button>
     </form>
  </body>
</html>
