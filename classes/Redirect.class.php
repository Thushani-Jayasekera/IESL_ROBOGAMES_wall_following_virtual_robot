<?php

class Redirect{
    public static function to($location=null,$error=null){
        if($location && !$error){
            if(is_numeric($location)){
                switch($location){
                    case 404:
                        header('HTTP/1.0.404 Not Found');
                        include 'includes/Errors/404.php';
                        exit();
                    break;
                }

                
            }
            header('Location:'.$location);
            exit();
        }else if($location && $error){
            if(is_numeric($location)){
                switch($location){
                    case 404:
                        header('HTTP/1.0.404 Not Found');
                        include 'includes/Errors/404.php';
                        exit();
                    break;
                }

                
            }
            header('Location:'.$location.'?error_msg='.$error);
        }
    }
}