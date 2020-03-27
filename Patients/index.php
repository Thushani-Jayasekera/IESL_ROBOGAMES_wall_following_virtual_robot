<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register new patient</title>
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>


  <body>
    <header>
      <h2>Register new patient</h2>
    </header>
    <div class="form" id='form-1'>

    <form action="index.php" method="post">
        <h2>Select Category</h2><br>
        <div class="form-check">
          <input type="radio" class="form-check-input" id = 'officer' name="type" value="forces">
          <label for="officer" id='white-text' class="form-check-label" >Officer </label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id = 'soldier' name="type" value="forces">
          <label for="Soldier" id='white-text' class="form-check-label">Soldier </label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" id='family' name="type" value="family">
          <label for="family" id='white-text' class="form-check-label">Family </label>
        </div>

        <button style="position:relative; top:18px;" type="submit" name="next">Next</button><br>
    </form>
  </div>


    <?php
        if (isset($_POST["next"])){
            $type = $_POST['type'];
            if (isset($type)){
                if ($type == "forces"){
                    header("Location: forcespatientsignup.php");
                }else{
                    header("Location: familypatientsignup.php");
                }
            }
            echo "You have to select one";
        }
    ?>
  </body>
</html>
