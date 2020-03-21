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

<form action="" method="POSt">
    <div class='field'>
        <label for='user_first'>First name</label>
        <input type='text' name='user_first' value="<?php echo escape($user->data()->user_first);?>" placeholder="First Name">
    </div>
    <div class='field'>
        <label for='user_last'>Last name</label>
        <input type='text' name='user_last' value="<?php echo escape($user->data()->user_last);?>" placeholder="Last Name">
    </div>
    <div class='field'>
        <label for='user_uid'>User name</label>
        <input type='text' name='user_uid' value="<?php echo escape($user->data()->user_uid);?>" placeholder="ID Number">
    </div>
    <input type="submit" value='Update'>
    <input type="hidden" name='token' value="<?php echo Token::generate();?>">




</form>

