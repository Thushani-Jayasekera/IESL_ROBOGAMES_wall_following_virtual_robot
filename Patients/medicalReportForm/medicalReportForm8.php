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
      <h2>Medical Report Form - Page 8</h2>
    </header>
    <div class="form">

    <h2>Physical Capacity</h2>
    <form action="includes/form8.inc.php" method="post">
      <h3>(a) Identification</h3>
      Color of eyes : <input type="text" name="eyesColor"><br>
      Color of Hair : <input type="text" name="hairColor"><br>
      Complexion : <input type="text" name="complexion"><br><br>

      Height(Inches) : <textarea rows = '1' cols = '33' name = 'height' placeholder='without boots/shoes, to nearest 1/4"'></textarea>
      Weight(lbs) : <textarea rows = '1' cols = '33' name = 'weight' placeholder='without boots/shoes, to nearest lb'></textarea><br><br>

      Scars, tattoo marks, &c., state site: <textarea rows = '1' cols = '64' name = 'scars' ></textarea><br><br>

      <h3>(b) Urine Examination</h3>
      Appearance : <input type="text" name="appearance"><br>
      Albumen : <input type="text" name="albumen"><br>
      Sugar : <input type="text" name="sugar"><br>
      Special Gravity : <input type="text" name="spGravity"><br><br>

      <h3>(c) Physique</h3><textarea rows = '3' cols = '50' name = 'physique' ></textarea><br><br>

      <h3>(d) Genito-urinary and perineum</h3>
      <p>(Hydrocele, varicocele, undescended test is haemorrhoids, evidence of previous V.D.)</p>
      <textarea rows = '3' cols = '50' name = 'guap' ></textarea><br><br>

      <h3>(e) Skin</h3><textarea rows = '3' cols = '50' name = 'skin' ></textarea><br><br>

      <h3>(f) Endocrine conditions</h3><textarea rows = '3' cols = '50' name = 'eConditions' ></textarea><br><br>

      <h3>(g) Cardio Vascular System</h3>
      Heart Size : <input type="text" name="heartSize"><br>
      Sounds : <textarea rows = '1' cols = '40' name = 'sounds' ></textarea><br>
      Arterial Walls : <textarea rows = '1' cols = '40' name = 'arterialWalls' ></textarea><br><br>

      <table class='content-table' border="1">
        <thead>

        <tr>
          <th>Pules Rate</th><th>E.TT. (if carried out) B.P. (if taken)</th>
        </tr>

      </thead>
      <tbody>

        <tr>
          <td><input type="number" name="pulseRate"></td><td><textarea rows = '1' cols = '50' name = 'bp' ></textarea></td>
        </tr>

      </tbody>
      </table>

      <h3>(h) Respiratory System</h3><textarea rows = '3' cols = '60' name = 'respSystemInfo' ></textarea><br>
      <p><b>Chest Measurements (to nearest 1/2 inch)</b></p>
      Full Expiration(Inches) : <input type="number" name="fullExpChest"><br>
      Range of Expansion(Inches) : <input type="number" name="rangeOfExp"><br><br>

      <h3>(i) Central Nervous System</h3>
      <p>(Reflexes, tromors)</p>
      <textarea rows = '3' cols = '60' name = 'centralNerveSys' ></textarea><br>

      <h3>(j) Abdomen</h3>
      <p>(Hernia, muscle tone and organs)</p>
      <textarea rows = '3' cols = '60' name = 'abdomen' ></textarea><br>

      <h3>(k) Any Abnormalities or Conditions Affecting Physical Papacity</h3>
      <p>(not already noted)</p>
      <textarea rows = '3' cols = '60' name = 'abnormalities' ></textarea><br>

      <p><b>Gender</b></p>
      Male: <input type="radio" name="gender" value="male"><br>
      Female: <input type="radio" name="gender" value="female"><br><br>

      <h3>(l) Women</h3>
      <p>(Breasts, menstrual history, vaginal dischargbe, prolapse)</p>
      <textarea rows = '3' cols = '60' name = 'womenInfo' ></textarea><br><br>
      L.M.P.(date) : <input type='date' name='lmpDate'><br><br>
      Marital State : Married<input type='radio' name='maritalState' value='yes'> Not Married<input type='radio' name='maritalState' value='no'><br>

      <p><b>If Married : </b></p>
      No. of Children : <input type="number" name="numChildren"><br>
      No. of Pregnancies : <input type="number" name="numPregs"><br>
      Date of Last Confinement : <input type="date" name="dateLastConf"><br><br>


      <button type="submit" name="next">Next</button>

    </form>
</div>
  </body>
</html>
