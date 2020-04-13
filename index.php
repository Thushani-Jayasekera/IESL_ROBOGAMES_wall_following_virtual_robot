<?php
require_once 'core/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylesheets/login.css">
</head>

<body >
    <head>
    <div class="container" align='center'>
        <img src="stylesheets/Army.png" alt="Logo" class="img-fluid w-25">
    </div>
    </head>
    
    <main>
        <div class="container py-4 border-primary rounded-lg " style="width: 30%">
        
        <?php
        $user = new User();


        if ($user->isLoggedIn()) {
            Redirect::to("profile.php");
        } else {
            ?>
            
            <div class="card p-3 text-center " >
            <h2 class="p-3">Sri Lanka Army Hospital</h2>
            <hr style="background-color: blue">
            <?php
            echo   "<button type='button' class='btn btn-primary ' cl onclick=\"window.location.href='viewlogin.php'\">LOG IN</button><br><br>";
            echo   "<button type='button' class='btn btn-primary mb-3' onclick=\"window.location.href='viewregister.php'\">REGISTER</button>";
         }
        ?>
        </div>
        </div>


    

    </main>

</body>

</html>