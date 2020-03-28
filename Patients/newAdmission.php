<?php include_once 'includes/class-autoload.inc.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Admission</title>
    <link rel="stylesheet" href="css/newAdmission.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

  <header>
    <h2>Form for new admission</h2>
  </header>

  <div class="form">

    <form action="includes/newAdmission.inc.php" method='POST'>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nic">NIC</label>
        <input id='nic' type="text" name="nic">
      </div>
      <div class="form-group col-md-6">
        <label for="doa">Date of Admission</label>
        <input id='doa' type="date" name='doa'>
      </div>
    </div>

    <p> Reason for admission <p>
    <textarea rows = "5" cols = "50" name = "reason">
    </textarea>

    <p> Medical History </p>
    <textarea rows = "5" cols = "50" name = "history">
    </textarea><br>

    <p>  Any current medications? </p>
    <textarea rows = "5" cols = "50" name = "cm">
    </textarea><br>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="doc">Doctor</label>
        <input id='doc' type="text" name='doctor'>
      </div>
      <div class="form-group col-md-6">
        <label for="Ward">Ward</label>
        <input  type="text" name='ward' id='Ward'><br>
      </div>
    </div>
    <button type="submit" name="submit">Submit</button><br>
    </form>
    <?php
    statusCheck::check("status");
    ?>

  </div>

</body>
</html>
