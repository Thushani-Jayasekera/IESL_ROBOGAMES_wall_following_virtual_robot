<?php
  spl_autoload_register('myAutoLoader');
  function myAutoLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'includes') !== false || strpos($url, 'medicalReportDisplay') !== false ){
        $path = "../classes/";
    }
    else if(strpos($url, 'medicalReportForm') !== false){
        $path = "../../classes/";
    }

    else {$path = "classes/";}
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)){
        return false;
    }
    include_once $fullPath;
  }
