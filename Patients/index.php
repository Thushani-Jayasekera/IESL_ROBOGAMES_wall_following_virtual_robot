<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="index.php" method="post">
        Officer: <input type="checkbox" name="type" value="forces"><br>
        Soldier: <input type="checkbox" name="type" value="forces"><br>
        Family: <input type="checkbox" name="type" value="family"><br>
        <button type="submit" name="next">Next</button><br>
    </form>
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