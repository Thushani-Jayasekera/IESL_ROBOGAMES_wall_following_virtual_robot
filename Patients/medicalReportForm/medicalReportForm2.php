<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
    <link rel="stylesheet" href="../css/medicalReportForm.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>
    <header>
      <h2>Medical Report Form - Page 2</h2>
    </header>

    <div class="form">

    <h3>Treatment at a Hospital</h3>
    <form action="medicalReportForm2.php" method="post">
    Enter number of rows needed <input type="number" name="rows">
    <button id='button-row' type="submit" name="button">Enter</button>
    </form>
    <br><br>
    <form action="includes/form2.inc.php" method="post">
      <?php
      echo "<table class='content-table' border='1'>";

      if (isset($_POST['rows'])){
      echo "<thead><tr>
        <th>Nature of Illness, Operation or Injury</th><th>Name of Hospital</th><th>In or Out Patient</th><th>Approx.Dates and Period</th>
      </tr></thead>";
      echo "<tbody>";
        $rows = $_POST['rows'];
        while ($rows>0){
          echo "<tr><td><textarea rows = '1' cols = '50' name = 'nature[]'></textarea></td><td><textarea rows = '1' cols = '25' name = 'hospital[]'></textarea></td><td><textarea rows = '1' cols = '20' name = 'inout[]'></textarea></td><td><textarea rows = '1' cols = '30' name = 'dates[]'></textarea></td></tr>";
          $rows--;
        }
        echo "</tbody>";




    echo "</table>";
    echo "<br><br><button type='submit' name='next'>Next</button>";
    }
    ?>
  </form>

</div>

  </body>
</html>
