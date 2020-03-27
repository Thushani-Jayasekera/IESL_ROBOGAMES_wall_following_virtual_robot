<?php
  session_start();
  include_once "classes/earsNoseThroat.class.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h2>Ears, Nose, Throat</h2>
    <?php
      $results = $_SESSION['results'];

      $serializedEarsNoseThroat = $results[0]['serializedEarsNoseThroat'];

      $earsNoseThroatObject = unserialize($serializedEarsNoseThroat);

      $hearing = $earsNoseThroatObject->getHearing();
      $wax = $earsNoseThroatObject->getWax();
      $diseases = $earsNoseThroatObject->getDiseases();
      $h = $earsNoseThroatObject->getH();
      $effect = $earsNoseThroatObject->getEffect();

      echo '<h3>Hearing</h3>
      <table border="1">
        <tr> <th></th> <th>Hears F.W. at </th><th>Hears C.V. at </th> </tr>
        <tr><th>Right</th><td>'.$hearing['rfw'].'</td><td>'.$hearing['rcv'].'</td></tr>
        <tr><th>Left</th><td>'.$hearing['lfw'].'</td><td>'.$hearing['lcv'].'</td></tr>
        <tr><th>Both</th><td>'.$hearing['bothfw'].'</td><td>'.$hearing['bothcv'].'</td></tr>
      </table>

      <table border="1">
        <h4> Wax </h4>
        <tr> <th></th> <th>Present </th><th>Removed</th> </tr>
        <tr><th>Right</th><td>'.$wax['rpresent'].'</td><td>'.$wax['rremoved'].'</td></tr>
        <tr><th>Left</th><td>'.$wax['lpresent'].'</td><td>'.$wax['lremoved'].'</td></tr>
      </table>

      <h3>Diseases, etc : </h3>
      '.$diseases.'
      <br><br><br>
      <table border="1">
      <tr><th> H </th> </tr>
      <tr><td>'.$h.'</td></tr>
      </table>
      <br><b>
      Effect on P. if any : </b>'.$effect.'<br><br><br>';


     ?>

     <form action="medicalReportDisplay7.php" method="post">
       <button type="submit" name="next">Next</button>
     </form>
  </body>
</html>
