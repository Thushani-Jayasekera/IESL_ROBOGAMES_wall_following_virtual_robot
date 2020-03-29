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
      <h2>Medical Report Form - Page 10</h2>
    </header>
    <div class="form">

    <form action="includes/form10.inc.php" method="post">

      <h4>Each Examiner will initial here and indicate any specialist examinations or other investigations considered necessary before a final #### assessment is given</h4>
      <br><p> No. 1 <input id='f10' type="text" name="one"> Initials of examiner <input id='f10' type="text" name="initials1"></p>
      <p> No. 2  <input id='f10' type="text" name="two"> Initials of examiner <input id='f10'  type="text" name="initials2"></p>
      <p> No. 3 <input id='f10' type="text" name="three"> Initials of examiner <input id='f10'  type="text" name="initials3"></p>
      <p> No. 4 <input id='f10' type="text" name="four"> Initials of examiner <input id='f10' type="text" name="initials4"></p>

      <br><button type="submit" name="next">Next</button>
    </form>
  </div>
  </body>
</html>
