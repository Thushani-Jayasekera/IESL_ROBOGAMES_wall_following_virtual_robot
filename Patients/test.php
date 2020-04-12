<?php
// mysqli_connect('localhost', 'root', '') or die('Could not connect the database : Username or password incorrect');
// mysqli_select_db(mysqli_connect('localhost', 'root', ''),'patients') or die ('No database found');
// echo 'Database Connected successfully';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="test.inc.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <button type="submit" name="submit">UPLOAD</button>

    </form>
  </body>
</html>
