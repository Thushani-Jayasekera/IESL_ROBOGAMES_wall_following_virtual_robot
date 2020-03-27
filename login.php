<?php
require_once 'core/init.php';

if(Input::exists()){
    if(Token::check(Input::get('token')));
        $validate=new Validate();
        $validation=$validate->check($_POST,array(
            'user_uid'=>array('name'=>'User name','required'=>true),
            'user_pwd'=>array('name'=>'Password','required'=>true)

        ));

        if($validation->passed()){
            $user=new User();
            $remember=(Input::get('user_remember')==='on') ? true:false;
            $login=$user->login(Input::get('user_uid'),Input::get('user_pwd'),$remember);
            if($login){
                Redirect::to('index.php');
            }else{
                echo "<script type='text/javascript'>alert('Sorry,Log in Failed');</script>";
            }
        
        
        }else{
            foreach($validation->errors() as $error){
                if ($error=='User name is required'){
                echo "<script type='text/javascript'>alert('Username Required');</script>";
               }
               if ($error=='Password is required'){
                echo "<script type='text/javascript'>alert('Password is required');</script>";
               }
            }
        }
}





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
    <link href="stylesheets/RegisterLogin.css" rel="stylesheet">
</head>
    <header>
    <div class="main_header" ><h1>Hospital Information Management System</h1></div> 
    </header>


<body>

<div class="field">
    <form action="" method="POST">
        <h1>Log in</h1>
        <hr>
        <input type="text" name='user_uid' id='user_uid' autocomplete="off" placeholder="ID Number">
        <input type="password" name='user_pwd' id='user_pwd' autocomplete="off" placeholder="Password">
        <label for="user_remember" class="main">Remember Me
        <input type="checkbox" name='user_remember' id='user_remember'class="urm" ><span ></span>
        </label>
        <input type="hidden" name="token" value="<?php echo Token::generate();?>">
        <input type="submit" value="Log in">

    </form>
</div>
    
</body>


</html>



