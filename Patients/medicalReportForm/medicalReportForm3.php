<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h1>Other Medical Treatment at Home or in a Nursing Home</h1>
    <form action="medicalReportForm3.php" method="post">
    Enter number of rows needed <input type="number" name="rows">
    <button type="submit" name="button">Enter</button>
    </form>
    <br><br>
    <form action="includes/form3.inc.php" method="post">
      <?php
      echo "<table border='1'>";

      if (isset($_POST['rows'])){
      echo "<tr>
          <th>Nature of Illness, Operation or Injury</th><th>Name and Address of Doctor or Nursing Home</th><th>Approx. Date and Period</th>
        </tr>";

        $rows = $_POST['rows'];
        while ($rows>0){
          echo "<tr><td><textarea rows = '1' cols = '50' name = 'nature[]'></textarea></td><td><textarea rows = '1' cols = '60' name = 'nameAndAddress[]'></textarea></td><td><textarea rows = '1' cols = '50' name = 'datePeriod[]'></textarea></td></tr>";
          $rows--;
        }



    echo "</table>";
    echo "<br>Any other information you wish to give about your Health<br><textarea rows = '5' cols = '50' name = 'otherInfo'></textarea><br>";
    echo "<button type='submit' name='next'>Next</button>";
    }
    ?>
  </form>



  </body>
</html>
