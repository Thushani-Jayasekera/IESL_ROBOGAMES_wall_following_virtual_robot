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
<form action="" method="POSt">
    <div class='field'>
        <label for='user_pwd'>Current Password</label>
        <input type='password' name='user_pwd' id="user_pwd">
    </div>
    <div>
        <label for='user_pwd_new'>New Password</label>
        <input type='password' name='user_pwd_new' id="user_pwd_new">
    </div>
    <div>
        <label for='password'>Confirm New Password</label>
        <input type='password' name='user_pwd_again' id="user_pwd_again">
    </div>
    <input type="submit" value='Change'>
    <input type="hidden" name='token' value="<?php echo Token::generate();?>">
</form>
