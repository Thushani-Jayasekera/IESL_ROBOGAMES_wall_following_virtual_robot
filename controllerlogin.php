<?php
require_once 'core/init.php';


if (Input::exists()) {
    if (Token::check(Input::post('token')));
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
        'user_uid' => array('name' => 'User name', 'required' => true),
        'user_pwd' => array('name' => 'Password', 'required' => true)

    ));

    if ($validation->passed()) {
        $user = new User();
        $remember = (Input::get('user_remember') === 'on') ? true : false;
        $login = $user->login(Input::post('user_uid'), Input::post('user_pwd'), $remember);
        if ($login) {
            Redirect::to('index.php');
        } else {
            Redirect::to('viewlogin.php','Sorry Login Failed.ID Number or Password Invalid.');
        }
    } else {
        Redirect::to('viewlogin.php','Both the ID Number and Password are required.');
        
    }
}else{
    Redirect::to('viewlogin.php');
}




