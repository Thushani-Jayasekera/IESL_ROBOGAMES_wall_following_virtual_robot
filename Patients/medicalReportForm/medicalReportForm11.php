<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <form action="includes/form11.inc.php" method="post">
      <h1>Specialist Reports amd Results of Investigations</h3>
        <textarea rows = '30' cols = '250' name = 'sraroi'></textarea>
        <table border="1">
          <tr>
            <th> </th><th>Vision without glasses</th><th>Sph.</th><th>Cyl.</th><th>Axis standard notation</th><th>Vision with glasses</th>
          </tr>
          <tr>
            <td>R</td><td><textarea rows = '2' cols = '30' name = 'right[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'right[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'right[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'right[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'right[]'></textarea></td>
          </tr>
          <tr>
            <td>L</td><td><textarea rows = '2' cols = '30' name = 'left[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'left[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'left[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'left[]'></textarea></td><td><textarea rows = '2' cols = '30' name = 'left[]'></textarea></td>
        </table><br>
        <br>Date : <input type="date" name="dateOfReport"><br><br>

        <h3><b>(a) Initial PULHEEMS Assessment</b></h3>
        <table border="2">
          <tr>
            <th>Y.O.B</th><th>P</th><th>U</th><th>L</th><th>H</th><th>E</th><th>E</th><th>M</th><th>S</th>
          </tr>
          <tr>
            <td><input type="text" name="iyob"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td><td><input type="text" name="ipulheems[]"></td>
          </tr>
        </table><br>
        Height(inches) : <input type="number" name="iheight"><br>
        CP. : <input type="number" name="icp"><br>
        Weight(lbs) : <input type="number" name="iweight"><br><br>

        P : <input type="number" name="ip"><br>
        U : <input type="number" name="iu"><br>
        L : <input type="number" name="il"><br>
        S : <input type="number" name="is"><br><br>

        Date : <input type="date" name="dateIPulheems"><br><br>

        <h3><b>(b) Service PULHEEMS Assessment</b></h3>
        <table border="2">
          <tr>
            <th>Y.O.B</th><th>P</th><th>U</th><th>L</th><th>H</th><th>E</th><th>E</th><th>M</th><th>S</th>
          </tr>
          <tr>
            <td><input type="text" name="syob"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td><td><input type="text" name="spulheems[]"></td>
          </tr>
        </table><br>
        Height(inches) : <input type="number" name="sheight"><br>
        CP. : <input type="number" name="scp"><br>
        Weight(lbs) : <input type="number" name="sweight"><br><br>

        P : <input type="text" name="sp"><br>
        U : <input type="text" name="su"><br>
        L : <input type="text" name="sl"><br>
        S : <input type="text" name="ss"><br><br>

        Date : <input type="date" name="dateSPulheems"><br><br>

        <button type="submit" name="next">Next</button>
    </form>
  </body>
</html>
