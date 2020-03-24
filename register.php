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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="RegisterLogin.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>
    <header>
    <div class="main_header" ><h1>Hospital Information Management System</h1></div> 
    </header>
    <body>
        <div class="field-r" >
            <form name="register" action="" method="POST" >
        
            <h1>Register</h1>
            <hr>
            <input type="text" name="user_first" id="user_first" value="<?php echo escape(Input::get('user_first'));?>" autocomplete="off" placeholder="First Name"><br>
            <input type="text" name="user_last" id="user_last" value="<?php echo escape(Input::get('user_last'));?>" autocomplete="off" placeholder="Last Name"><br>
            <input type="text" name="user_uid" id="user_uid" value="<?php echo escape(Input::get('user_uid'));?>" autocomplete="off"  placeholder="ID Number"><br>
            <div class="container">
                <p> Select Category <p>
                    <div class="radio">
                        <label  for="user_doctor">
                        <input type="radio" name="user_group" id="user_doctor" value=1 checked >
                        Doctor
                        </label>
                    </div>

                    <div class="radio">
                        <label  for="user_doctor">
                        <input type="radio" name="user_group" id="user_doctor" value=2 >
                        Nurse
                        </label>
                    </div>
                
                    <div class="radio">
                        <label  for="user_doctor">
                        <input type="radio" name="user_group" id="user_doctor" value=3 >
                        Admission Officer
                        </label>
                    </div>
            
            
                
                    <br>  
            <div>    
            <input type="password" name="user_pwd" id="user_pwd" placeholder="Password"><br>
            <input type="password" name="user_pwd_again" id="user_pwd_again" placeholder="Confirm Password"><br>
            <input type="hidden" name="token" value="<?php echo  Token::generate();?>">
            <br>    
            </div>
            <br>
            <input type='submit' value="Register">
            
                

        
        
        </form>
    </div>

    </body>
    
</body>
</html>


