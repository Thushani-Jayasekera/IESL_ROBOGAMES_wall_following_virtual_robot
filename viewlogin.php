<?php
require_once 'core/init.php';
$error_msg=Input::get('error_msg');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="stylesheets/login.css" rel="stylesheet">
</head>



<body>
    <div class="container" align='center'>
        <img src="stylesheets/Army.png" alt="Logo" class="img-fluid w-25">
    </div>
    <div class="container py-4">
        <div class="row border border-primary rounded-lg">
            <div class="col-5" style='background-color: blue;'>
                <h1 class='p-3' style="color: white">Log-in to System</h1>
                <hr style="background-color: white">
                <?php if($error_msg) {?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo($error_msg);?>
                </div>
                <?php }?>
                
            </div>
            <div class="col-7 p-0" style="background-color: blue">
                <div class='card p-3'>
                    <form action="controllerlogin.php" method="POST">
                        <div class="text-left">
                            <h3>Add your details here</h13>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="user_uid">Your ID Number</label>
                            <input type="text" class="form-control" class="form-control" name='user_uid' id='user_uid'  placeholder="ID Number">
                        </div>
                        <div class="form-group">
                            <label for="user_pwd">Your Password</label>
                            <input type="password" class="form-control" name='user_pwd' id='user_pwd' autocomplete="off" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="checkbox-inline" name='user_remember' id='user_remember' class="urm">
                            <label for="user_remember" class="main">Remember Me</label>


                        </div>
                        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                        <div class="text-right">
                            <input type="submit" class="btn btn-primary btn-block" style='background-color:blue' value="Log in">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>


</html>