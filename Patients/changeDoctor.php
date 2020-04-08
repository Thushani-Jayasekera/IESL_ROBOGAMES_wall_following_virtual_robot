<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Change Doctor</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
    <div class="newDoctor">
      <h2>Change Doctor</h2>

    <form action="includes/newDoctor.inc.php" method="post">
      <p>Enter new Doctor's name</p>
      <input type="text" name="newDoctor">
      <button type="submit" name="Submit">Submit</button>
    </form>
    <a href="patientProfile.php"><button type="button" name="button">Back</button></a>
  </div>
  </body>
</html>
