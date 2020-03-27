<?php include_once 'includes/class-autoload.inc.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration for patients of family members of military personnel</title>
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>
  <header>
    <h2>Registration for patients of family members of military personnel</h2>
  </header>

    <div class="form">

  <form action="includes/familypatientsignup.inc.php" method="post">
    <div class="form-group">
        <div class="form-row">
        <div class="col">
        <input type="text" name="force" placeholder="Force of family member"><br>
      </div>
  <div class="col">
        <!--Put a dropdown menu with the list of forces -->
        <input type="text" name="force_id" placeholder='Force ID of family member'><br>
      </div>
</div>
</div>
<div class="form-group">
        <input type="text" name='relation' placeholder='Relationship to family member'><br>
      </div>
      <div class="form-group">
          <div class="form-row">
          <div class="col">
        <input type="text" name="first" placeholder="First Name"><br>
      </div>
  <div class="col">
        <input type="text" name="last" placeholder="Last Name"><br>
      </div>
</div>
</div>
<div class="form-group">
    <div class="form-row">
    <div class="col">
        <input type="text" name="nic" placeholder="NIC"><br>
      </div>
  <div class="col">
        <input type="text" name="dob" placeholder="Date of Birth"><br>
      </div>
      </div>
      </div>
      <div class="form-group">
          <div class="form-row">
          <div class="col">
        <input type="text" name="email" placeholder="E-mail"><br>
      </div>
  <div class="col">
        <input type="text" name="address" placeholder="Address"><br>
      </div>
      </div>
      </div>
      <div class="form-group">
          <div class="form-row">
          <div class="col">
        <input type="text" name="height" placeholder="Height"><br>
      </div>
  <div class="col">
        <input type="text" name="weight" placeholder="Weight"><br>
      </div>
      </div>
      </div>
      <div class="form-group">
        <input id='last-input' type="text" name="mobile" placeholder="Mobile"><br>
      </div>


        <button type="submit" name="submit">Register</button><br>
  </form>

    <?php
      statusCheck::check("signup");
    ?>
</div>



  </body>
</html>
