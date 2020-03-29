<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medical Report </title>
    <link rel="stylesheet" href="../css/medicalReportForm.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>
    <header>
      <h2>Medical Report Form - Page 6</h2>
    </header>
    <div class="form">
    <form action="includes/form6.inc.php" method="post">

      <h2>Ears, Nose, Throat</h2>
      <h3>Hearing</h3>
      <table class='content-table' border="1">
        <thead> <tr> <th></th> <th>Hears F.W. at </th><th>Hears C.V. at </th> </tr> </thead>
        <tbody>
        <tr><th>Right</th><td> <input type="text" name="rfw"></td><td><input type="text" name = "rcv"></td></tr>
        <tr><th>Left</th><td> <input type="text" name="lfw"></td><td><input type="text" name = "lcv"></td></tr>
        <tr><th>Both</th><td> <input type="text" name="bothfw"></td><td><input type="text" name = "bothcv"></td></tr>
        </tbody>
      </table>
      <br><h3> Wax </h3>
      <table class='content-table' border="1">

        <thead> <tr> <th></th> <th>Present </th><th>Removed</th> </tr></thead>
        <tbody>

        <tr><th>Right</th><td> <input type="text" name="rpresent" placeholder="Yes/No"></td><td><input type="text" name = "rremoved" placeholder="Yes/No"></td></tr>
        <tr><th>Left</th><td> <input type="text" name="lpresent" placeholder="Yes/No"></td><td><input type="text" name = "lremoved" placeholder="Yes/No"></td></tr>
      </tbody>

      </table>

      <br> <h3>Diseases, etc</h3>
      <textarea rows = "5" cols = "60" name = "diseases">
      </textarea><br><br>

      <table id='short-table' class='short-table' border="1">
      <thead><tr><th> H </th> </tr></thead>
      <tbody>

      <tr><td>  <input type="text" name="h"></td></tr>

      </tbody>
      </table>
      <br>
      Effect on P. if any <input id= 'short' type="text" name="effect"><br>

      <br><br><button type="submit" name="next">Next</button>
    </form>
  </body>
</html>
