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

     //  echo '<h3>(b) Urine Examination</h3>
     //  Appearance : <input type="text" name="appearance"><br>
     //  Albumen : <input type="text" name="albumen"><br>
     //  Sugar : <input type="text" name="sugar"><br>
     //  Special Gravity : <input type="text" name="spGravity"><br><br>';
     //
     //  echo "<h3>(c) Physique</h3><textarea rows = '3' cols = '50' name = 'physique' ></textarea><br><br>
     //
     //  <h3>(d) Genito-urinary and perineum</h3>
     //  <p>(Hydrocele, varicocele, undescended test is haemorrhoids, evidence of previous V.D.)</p>
     //  <textarea rows = '3' cols = '50' name = 'guap' ></textarea><br><br>
     //
     //  <h3>(e) Skin</h3><textarea rows = '3' cols = '50' name = 'skin' ></textarea><br><br>
     //
     //  <h3>(f) Endocrine conditions</h3><textarea rows = '3' cols = '50' name = 'eConditions' ></textarea><br><br>";
     //
     //  echo '<h3>(g) Cardio Vascular System</h3>
     //  Heart Size : <input type="text" name="heartSize"><br>';
     //
     //  echo "Sounds : <textarea rows = '1' cols = '40' name = 'sounds' ></textarea><br>
     //  Arterial Walls : <textarea rows = '1' cols = '40' name = 'arterialWalls' ></textarea><br><br>";
     //
     //  echo "<table border='1'>
     //    <tr>
     //      <th>Pules Rate</th><th>E.TT. (if carried out) B.P. (if taken)</th>
     //    </tr>
     //    <tr>
     //      <td><input type='number' name='pulseRate'></td><td><textarea rows = '1' cols = '50' name = 'bp' ></textarea></td>
     //    </tr>
     //  </table>
     //  <h3>(h) Respiratory System</h3><textarea rows = '3' cols = '60' name = 'respSystemInfo' ></textarea><br>
     // <p><b>Chest Measurements (to nearest 1/2 inch)</b></p>";
     //
     // echo ' Full Expiration(Inches) : <input type="number" name="fullExpChest"><br>
     // Range of Expansion(Inches) : <input type="number" name="rangeOfExp"><br><br>';
     //
     // echo "<h3>(i) Central Nervous System</h3>
     // <p>(Reflexes, tromors)</p>
     // <textarea rows = '3' cols = '60' name = 'centralNerveSys' ></textarea><br>
     //
     // <h3>(j) Abdomen</h3>
     // <p>(Hernia, muscle tone and organs)</p>
     // <textarea rows = '3' cols = '60' name = 'abdomen' ></textarea><br>
     //
     // <h3>(k) Any Abnormalities or Conditions Affecting Physical Papacity</h3>
     // <p>(not already noted)</p>
     // <textarea rows = '3' cols = '60' name = 'abnormalities' ></textarea><br>";
     //
     // echo '<p><b>Gender</b></p>
     // Male: <input type="radio" name="gender" value="male"><br>
     // Female: <input type="radio" name="gender" value="female"><br><br>';
     //
     // echo "<h3>(l) Women</h3>
     // <p>(Breasts, menstrual history, vaginal dischargbe, prolapse)</p>
     // <textarea rows = '3' cols = '60' name = 'womenInfo' ></textarea><br><br>
     // L.M.P.(date) : <input type='date' name='lmpDate'><br><br>
     // Marital State : Married<input type='radio' name='maritalState' value='yes'> Not Married<input type='radio' name='maritalState' value='no'><br>";
     //
     // echo '<p><b>If Married : </b></p>
     // No. of Children : <input type="number" name="numChildren"><br>
     // No. of Pregnancies : <input type="number" name="numPregs"><br>
     // Date of Last Confinement : <input type="date" name="dateLastConf"><br><br>';
     //



     ?>

     <form action="medicalReportDisplay8.php" method="post">
       <button type="submit" name="next">Next</button>
     </form>
  </body>
</html>
