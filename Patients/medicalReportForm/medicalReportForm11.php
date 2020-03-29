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
      <h2>Medical Report Form - Page 11</h2>
    </header>
    <div class="form">

    <form action="includes/form11.inc.php" method="post">
      <h2>Specialist Reports amd Results of Investigations</h2><br>
        <textarea rows = '30' cols = '150' name = 'sraroi'></textarea><br>
        <table class='content-table' border="1">
          <thead>
          <tr>
            <th> </th><th>Vision without glasses</th><th>Sph.</th><th>Cyl.</th><th>Axis standard notation</th><th>Vision with glasses</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>R</td><td><textarea rows = '2' cols = '30' name = 'right[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'right[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'right[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'right[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'right[]'></textarea></td>
          </tr>
          <tr>
            <td>L</td><td><textarea rows = '2' cols = '30' name = 'left[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'left[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'left[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'left[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'left[]'></textarea></td>
        </tbody>
        </table><br>
        <br>Date : <input id='short' type="date" name="dateOfReport"><br><br>

        <h3><b>(a) Initial PULHEEMS Assessment</b></h3>
        <table class='content-table' border="2">
          <thead>
          <tr>
            <th>Y.O.B</th><th>P</th><th>U</th><th>L</th><th>H</th><th>E</th><th>E</th><th>M</th><th>S</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" name="iyob"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td>
          </tr>
        </tbody>
        </table><br>
        Height(inches) : <input id='short'type="number" name="iheight"><br>
        CP.            : <input id='short'type="number" name="icp"><br>
        Weight(lbs)    : <input id='short'type="number" name="iweight"><br><br>

        P : <input id='short'type="number" name="ip"><br>
        U : <input id='short'type="number" name="iu"><br>
        L : <input id='short'type="number" name="il"><br>
        S : <input id='short'type="number" name="is"><br><br>

        Date : <input id='short'type="date" name="dateIPulheems"><br><br>

        <h3><b>(b) Service PULHEEMS Assessment</b></h3>
        <table class='content-table' border="2">
          <thead>
          <tr>
            <th>Y.O.B</th><th>P</th><th>U</th><th>L</th><th>H</th><th>E</th><th>E</th><th>M</th><th>S</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" name="syob"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td>
          </tr>
        </tbody>
        </table><br>
        Height(inches) : <input id='short'type="number" name="sheight"><br>
        CP. : <input id='short'type="number" name="scp"><br>
        Weight(lbs) : <input id='short'type="number" name="sweight"><br><br>

        P : <input id='short'type="text" name="sp"><br>
        U : <input id='short'type="text" name="su"><br>
        L : <input id='short'type="text" name="sl"><br>
        S : <input id='short'type="text" name="ss"><br><br>

        Date : <input id='short'type="date" name="dateSPulheems"><br><br>

        <button type="submit" name="next">Next</button>
    </form>
    <div>
  </body>
</html>
