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
    <link rel="stylesheet" href="stylesheets/welcomestyle.css">
</head>

<body >
    <header>

        <div class="main_header" ><h1>Hospital Information Management System</h1></div> 
        
    </header>
    <main>
        <div class="field">
        
        <?php
        $user = new User();


        if ($user->isLoggedIn()) {
            Redirect::to("profile.php?user=" . $user->data()->user_uid);
        } else {
            ?>
            <h2 style="margin-bottom:2cm; color:white">Welcome</h2>
            <?php
            echo   "<button type='button'   onclick=\"window.location.href='login.php'\">LOG IN</button><br><br>";
            echo   "<button type='button'   onclick=\"window.location.href='register.php'\">REGISTER</button>";



            
        }
        ?>
        </div>


    

    </main>

</body>

</html>