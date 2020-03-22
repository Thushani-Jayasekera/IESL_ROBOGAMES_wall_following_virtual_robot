<?php include_once 'includes/class-autoload.inc.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="includes/forcespatientssignup.inc.php" method="post">
        <input type="text" name="force" placeholder="Force"><br>
        <input type="text" name="first" placeholder="First Name"><br>
        <input type="text" name="last" placeholder="Last Name"><br>
        <input type="text" name="nic" placeholder="NIC"><br>
        <input type="text" name="force_id" placeholder="Force ID"><br>
        <input type="text" name="regiment" placeholder="Regiment"><br>
        <input type="text" name="rank" placeholder="Rank"><br>
        <input type="text" name="email" placeholder="E-mail"><br>
        <input type="text" name="dob" placeholder="Date of Birth"><br>
        <input type="text" name="height" placeholder="Height"><br>
        <input type="text" name="weight" placeholder="Weight"><br>
        <input type="text" name="address" placeholder="Address"><br>
        <input type="text" name="mobile" placeholder="Mobile"><br>
        <button type="submit" name="submit">Sign up</button><br>
    </form>


    <?php
    statusCheck::check("signup");
    ?>


  </body>
</html>
