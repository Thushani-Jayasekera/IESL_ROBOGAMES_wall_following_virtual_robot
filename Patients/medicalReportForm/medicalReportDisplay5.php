<?php
  session_start();
  include_once "classes/eyes.class.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h2>Eyes</h2>
    <?php
      $results = $_SESSION['results'];

      $serializedEyes = $results[0]['serializedEyes'];

      $eyes = unserialize($serializedEyes);

      $eyeTable = $eyes->getEyeTable();
      $diseases = $eyes->getDiseases();
      $effect = $eyes->getEffect();

      echo '<table border="1">
        <tr>
          <th></th> <th>Right</th><th>Left</th><th>CP</th>
        </tr>
        <tr><th>Without Glasses</th><td>'.$eyeTable['right'].'</td><td>'.$eyeTable['left'].'</td><td>'.$eyeTable['CP'].'</td>

        <tr><td>'.$eyeTable['emptyHeading'].'</td><td>'.$eyeTable['emptyRight'].'</td><td>'.$eyeTable['emptyLeft'].'</td><td>'.$eyeTable['emptyCP'].'</td></tr>

      </table>
      <p><b>Diseases, etc : </b></p>
      '.$diseases.'<br><br><br>

      <b>Effect on P. if any : </b> '.$effect.'<br>';

     ?>
  </body>
</html>
