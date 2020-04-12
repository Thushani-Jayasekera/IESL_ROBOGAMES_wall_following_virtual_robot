<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload profile picture</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <h2>Upload Profile Picture</h2>
    </header>

    <div class="form">
      <form action="includes/uploadPhoto.inc.php" method="post" enctype="multipart/form-data">
        <fieldset disabled>
          <div class="form-group">
            <label for="nic">NIC</label>
            <?php
            session_start();
            $nic = $_SESSION['nic'];
            echo '<input type="text" id="nic" class="form-control" placeholder="'.$nic.'">';
            ?>
          </div>
        </fieldset>
        <input type="file" name="image">
        <button type="submit" name="submit">Upload</button>

      </form>

    </div>
  </body>
</html>
