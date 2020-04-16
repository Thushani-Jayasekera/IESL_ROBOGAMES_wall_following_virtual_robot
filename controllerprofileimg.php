<?php
require_once('core/init.php');
$user=new User();

if (!$user->isLoggedIn()) {
    Redirect::to('index.php');
}else{
    $data=$user->data();
    if(Input::exists()){
        $file=$_FILES['profile_img'];
        $fileName =$_FILES['profile_img']['name'];
        $fileTmpname=$_FILES['profile_img']['tmp_name'];
        $fileSize =$_FILES['profile_img']['size'];
        $fileError =$_FILES['profile_img']['error'];
        $fileType =$_FILES['profile_img']['type'];

        $fileExt = explode('.',$fileName);
        $fileActualExt =strtolower(end($fileExt));

        $allowed  =array('jpeg');

        if (in_array($fileActualExt,$allowed)) {
            if ($fileError===0) {
                if ($fileSize <500000) {
                    $uid=$data->user_uid;
                    $fileNameNew ="profileimg$uid".".".$fileActualExt;
                    $fileDestination='staffprofileimgs/'.$fileNameNew;
                    move_uploaded_file($fileTmpname,$fileDestination);//move from temp location to final location
                    try{
                        $user->update(array(
                            'user_imgstatus'=>1,
                        ));
                        Session::flash('home','Image updated successfully');
                        Redirect::to('viewhome.php');
                    }catch(Exception $e){
                        Redirect::to('update.php');//change name later
                    }
                }else{
                    echo 'File too large';//change these to redirects with errors
                }
            }else{
                echo 'Unexpected Error';
            }
        }else{
            echo 'File type Error';
        }
    }
}