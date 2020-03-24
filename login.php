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
<link href="RegisterLogin.css" rel="stylesheet">
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
