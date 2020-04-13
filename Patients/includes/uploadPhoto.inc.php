<?php
include 'class-autoload.inc.php';
session_start();
$nic = $_SESSION['nic'];

if (isset($_POST['submit'])){
  $file = $_FILES['image'];
  $fileName = $file['name'];
  $tempLocation = $file['tmp_name'];
  $fileSize = $file['size'];
  $error = $file['error'];

  $temp = explode('.', $fileName);
  $fileExtension = strtolower(end($temp));
  $allowed = ['jpg', 'jpeg', 'png'];

  if (in_array($fileExtension, $allowed)){
    if ($error === 0){

    } else {
      Redirect::to('../uploadPhoto.php?error=generic');

    }
  } else {
    Redirect::to('../uploadPhoto.php?error=type');
  }






}


 ?>
