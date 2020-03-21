<?php

class  Hash{
    public static function make($string){
        return password_hash($string,PASSWORD_DEFAULT);

    }
    
    public static function unique(){
        return self::make(uniqid());

    }
    public static function verify($pwd1,$pwd2){
        return password_verify($pwd1,$pwd2);
    }
}