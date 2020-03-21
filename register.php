<?php
require_once 'core/init.php';





if(Input::exists()){
    if(Token::check(Input::get('token')) ){
        
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
            ),
            'user_pwd'=>array(
                'name'=>'Password',
                'required'=>true,
                'min'=>4,
                
            ),
            'user_pwd_again'=>array(
                'name'=>'Confirmation Password',
                'required'=>true,
                'matches'=>'user_pwd'
            ),
            'user_group'=>array(
                'name'=>'User Category',
                'select'=>0
                
            )

        ));
        if($validation->passed()){
            $user=new User();
            
            
            try{
                $user->create(array(
                    'user_first'=>Input::get('user_first'),
                    'user_last'=>Input::get('user_last'),
                    'user_pwd'=>Hash::make(Input::get('user_pwd')),
                    'user_uid'=>Input::get('user_uid'),
                    'user_joined'=>date('Y-m-d H:i:s'),
                    'user_group'=>Input::get('user_group')

                ));
                Session::flash('home','You are now registered you can now log in');
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


<div class="field">
    <form name="register" action="" method="POST">
    
        <h1>Register</h1>
        <hr>
        <input type="text" name="user_first" id="user_first" value="<?php echo escape(Input::get('user_first'));?>" autocomplete="off" placeholder="First Name"><br>
        <input type="text" name="user_last" id="user_last" value="<?php echo escape(Input::get('user_last'));?>" autocomplete="off" placeholder="Last Name"><br>
        <input type="text" name="user_uid" id="user_uid" value="<?php echo escape(Input::get('user_uid'));?>" autocomplete="off"  placeholder="ID Number"><br>
        Select Category<br>
        <input type="radio" name="user_group" id="user_doctor" value=1 checked>
        <label for="user_doctor">Doctor</label><br>
        <input type="radio" name="user_group" id="user_nurse" value=2>
        <label for="user_nurse">Nurse</label><br>
        <input type="radio" name="user_group" id="user_admissionofficer" value=3>
        <label for="user_admissionofficer">Admission Officer</label><br>
        
        <input type="password" name="user_pwd" id="user_pwd" placeholder="Password"><br>
        <input type="password" name="user_pwd_again" id="user_pwd_again" placeholder="Confirm Password"><br>
        <input type="hidden" name="token" value="<?php echo  Token::generate();?>">
        <input type='submit' value="Register">
        

    
    
    </form>
</div>