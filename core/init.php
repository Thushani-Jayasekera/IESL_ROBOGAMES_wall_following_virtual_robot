<?php
session_start();

$GLOBALS['config']=array(
    'mysql'=>array(
        'host'=>'remotemysql.com', 
        'username'=>'OXy65Ny57j',
        'password'=>'eYArF8fOJw',
        'dbName'=>'OXy65Ny57j'
    ),
    'remember'=>array(
        'cookie_name'=>'hash',
        'cookie_expiry'=>'604800'
    ),
    'session'=>array(
        'session_name'=>'user',
        'token_name'=>'token'
    )
);

 
spl_autoload_register('myAutoLoader');
function myAutoLoader($className){
    $className=strtolower($className);
    $path="classes/";
    $ext=".class.php";
    $fullPath=$path.$className.$ext;


    require_once $fullPath;
}

require_once 'functions/sanitize.php';

if(Cookie::exists(Config::get('remember/cookie_name'))&& !Session::exists(Config::get('session/session_name'))){
    $hash=Cookie::get(Config::get('remember/cookie_name'));
    $hashCheck=Dbh::getInstance()->get('users_session',array('hash','=',$hash));
    if($hashCheck->count()){
        $user=new User($hashCheck->first()->user_id);
        $user->login();

    }
}