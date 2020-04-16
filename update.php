<?php
require_once 'core/init.php';

$user= new User();

if(!$user->isLoggedIn()){
    Redirect::to('index.php');
}
if(Input::exists()){
    if(Token::check(Input::get('token'))){
        $validate=new Validate();
        $validation=$validate->check($_POST,array(
            'user_first'=>array(
                'name'=>'First name',
                'required'=>true,
                'min'=>2,
                'max'=>50,
                
            ),
            'user_last'=>array(
                'name'=>'Last name',
                'required'=>true,
                'min'=>2,
                'max'=>50,
                
            ),
            'user_uid'=>array(
                'name'=>'User name',
                'required'=>true,
                'min'=>2,
                'max'=>50,
                'unique'=>'users'
            )

        ),$user->data()->id);
        if($validation->passed()){
           
            
            
            try{
                $user->update(array(
                    'user_first'=>Input::get('user_first'),
                    'user_last'=>Input::get('user_last'),
                    'user_uid'=>Input::get('user_uid'),
                ));
                Session::flash('home','Information updated successfully');
                Redirect::to('index.php');
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        else{
            foreach($validation->errors()as $error){
                echo $error."<br>";
            }
        }
    }

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheets/update.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <main>
    <div class='field'>
        <h1>Edit Information</h1>
        <form action="controllerprofileimg.php" method="post" enctype="multipart/form-data" class="card p-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="profile_img" name="profile_img" required>
                        <label class="custom-file-label text left" for="profle_img">Select img</label>
                    </div>
                    <br>
                    <input type="submit" id="submit_profileimg" name="submit_profileimg" class="btn btn-outline-primary" value='Save changes and upload'data-toggle="tooltip" data-placement="bottom" title="Upload profile picture">
        </form>
        <form action="" method="POSt">
    
            <label for='user_first'>First Name</label>
            <input type='text' name='user_first' value="<?php echo escape($user->data()->user_first);?>" placeholder="First Name">
            <br>

            <label for='user_last'>Last Name</label>
            <input type='text' name='user_last' value="<?php echo escape($user->data()->user_last);?>" placeholder="Last Name">
            <br>
            <label for='user_uid'>ID Number</label>
            <input type='text' name='user_uid' value="<?php echo escape($user->data()->user_uid);?>" placeholder="ID Number">
            <br>
            <input type="submit" value='Update'class="btn btn-primary" >
            <input type="hidden" name='token' value="<?php echo Token::generate();?>">
        </form>
    </div>




    </main>
    
</body>
</html>



