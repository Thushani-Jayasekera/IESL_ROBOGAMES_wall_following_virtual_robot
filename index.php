<?php
require_once 'core/init.php';
?>
    <h1>Hospital Information Mangement System</h1>
    <hr>
    <h2>Welcome!</h2>
    
<?php
$user=new User();

if($user->isLoggedIn()){
    Redirect::to("profile.php?user=".$user->data()->user_uid);?>");
    
<?php   

}else{
    echo "<p><b>Already registered? <a href='login.php'>log in</a></b></p> ";
    echo "<p><b>New user? <a href='register.php'>register</a></b>";
}
?>