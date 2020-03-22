<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h1>Treatment at a Hospital</h1>
    <form action="medicalReportForm2.php" method="post">
    Enter number of rows needed <input type="number" name="rows">
    <button type="submit" name="button">Enter</button>
    </form>
    <br><br>
    <form action="includes/form2.inc.php" method="post">
      <?php
      echo "<table border='1'>";

      if (isset($_POST['rows'])){
      echo "<tr>
        <th>Nature of Illness, Operation or Injury</th><th>Name of Hospital</th><th>In or Out Patient</th><th>Approx.Dates and Period</th>
      </tr>";

        $rows = $_POST['rows'];
        while ($rows>0){
          echo "<tr><td><textarea rows = '1' cols = '50' name = 'nature[]'></textarea></td><td><textarea rows = '1' cols = '25' name = 'hospital[]'></textarea></td><td><textarea rows = '1' cols = '20' name = 'inout[]'></textarea></td><td><textarea rows = '1' cols = '30' name = 'dates[]'></textarea></td></tr>";
          $rows--;
        }



    echo "</table>";
    echo "<button type='submit' name='next'>Next</button>";
    }
    ?>
  </form>



  </body>
</html>
