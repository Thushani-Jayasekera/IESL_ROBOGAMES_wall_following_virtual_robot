<?php
require_once 'core/init.php';

$user=new User();

if(!$user->isLoggedIn()){
    Redirect::to('index.php');
}
if(Input::exists()){
    if(Token::check(Input::get('token'))){
        $validate=new Validate();
        $validation=$validate->check($_POST,array(
            'user_pwd'=>array(
                'name'=>'Current Password',
                'required'=>true,
                'min'=> 4,
                'max'=>50

            ),
            'user_pwd_new'=>array(
                'name'=>'New Password',
                'required'=>true,
                'min'=>4,
                'max'=>50,

            ),
            'user_pwd_again'=>array(
                'name'=>'Confirmation password',
                'required'=>true,
                'min'=>4,
                'max'=>50,
                'matches'=>'user_pwd_new'

            )

        ));
        if($validation->passed()){
            if(!Hash::verify(Input::get('user_pwd'),$user->data()->user_pwd)){
                echo "Entered current password is wrong,pls reenter";
            }else{
                $user->update(array(
                    'user_pwd'=>Hash::make(Input::get('user_pwd_new'))

                ));
                Session::flash('home','IPassword changed successfully');
                Redirect::to('index.php');

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
    <title>Change Password</title>
    <link rel="stylesheet" href="stylesheets/update.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div class='field'>
        <h1>Change Password</h1>
        <form action="" method="POSt">

    
            <label for='user_pwd'>Current Password</label>
            <input type='password' name='user_pwd' id="user_pwd">

            <label for='user_pwd_new'>New Password</label>
            <input type='password' name='user_pwd_new' id="user_pwd_new">

            <label for='password'>Confirm New Password</label>
            <input type='password' name='user_pwd_again' id="user_pwd_again">

            <input type="submit" value='Change' class="btn btn-primary">
            <input type="hidden" name='token' value="<?php echo Token::generate();?>">
        </form>
    </div>
    
</body>
</html>

