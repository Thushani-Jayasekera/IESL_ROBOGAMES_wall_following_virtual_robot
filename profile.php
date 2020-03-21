<?php

require_once 'core/init.php';

if(!$user_uid=Input::get('user')){
    Redirect::to('index.php');

}else{
    $user=new User($user_uid);
    if(!$user->exists()){
        Redirect::to(404);
    }else{
        $data=$user->data();
    }
    ?>

    <h1>  
    <?php echo escape($data->user_first)." ".escape($data->user_last);?>
    </h1>
    <h3>ID Number - <?php echo escape($data->user_uid);?></h3>
    <hr>

    <p>Hello</p>
    <?php
        if($user->hasPermission('Doctor')){
            echo '<p>Welcome Doctor!</p>';
        }else if($user->hasPermission('Nurse')){
            echo '<p>Welcome Nurse!</p>';
        }else if($user->hasPermission('Admission Officer')){
            echo '<p>Welcome Officer!</p>';
        }
    
    
    ?>


    
    <ul>
        <li><a href="logout.php">Log out</a></li>
        <li><a href="update.php">Edit info</a></li>
        <li><a href="updatepassword.php">Change Password</a></li>

    </ul>


<?php
    
}