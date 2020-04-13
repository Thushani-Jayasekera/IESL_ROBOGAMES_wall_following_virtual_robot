<?php
require_once 'core/init.php';





if (Input::exists()) {
    if (Token::check(Input::get('token'))) {

        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'user_first' => array(
                'name' => 'First name',
                'required' => true,
                'min' => 2,
                'max' => 50,

            ),
            'user_last' => array(
                'name' => 'Last name',
                'required' => true,
                'min' => 2,
                'max' => 50,

            ),
            'user_uid' => array(
                'name' => 'User name',
                'required' => true,
                'min' => 2,
                'max' => 50,
                'unique' => 'users'
            ),
            'user_pwd' => array(
                'name' => 'Password',
                'required' => true,
                'min' => 4,

            ),
            'user_pwd_again' => array(
                'name' => 'Confirmation Password',
                'required' => true,
                'matches' => 'user_pwd'
            ),
            'user_group' => array(
                'name' => 'User Category',
                'select' => 0

            )

        ));
        if ($validation->passed()) {
            $user = new User();


            try {
                $user->create(array(
                    'user_first' => Input::get('user_first'),
                    'user_last' => Input::get('user_last'),
                    'user_pwd' => Hash::make(Input::get('user_pwd')),
                    'user_uid' => Input::get('user_uid'),
                    'user_joined' => date('Y-m-d H:i:s'),
                    'user_group' => Input::get('user_group')

                ));
                Session::flash('home', 'You are now registered you can now log in');
                Redirect::to('index.php');
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } else {
            foreach ($validation->errors() as $error) {
                echo $error . "<br>";
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="stylesheets/login.css" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container" align='center'>
            <img src="stylesheets/Army.png" alt="Logo" class="img-fluid w-25">
        </div>
    </header>

    <body>
        <div class="container py-4 text-center " style="width: 40%">
            <div class="card p-3 text-left">
                <form name="register" action="" method="POST">
                    <div class="text-center">
                    <h1>Register</h1>
                    </div>
                    
                    <hr>
                    <div class="form-group">
                        <input type="text" name="user_first" id="user_first" class='form-control' value="<?php echo escape(Input::get('user_first')); ?>" autocomplete="off" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="user_last" id="user_last" class='form-control'  value="<?php echo escape(Input::get('user_last')); ?>" autocomplete="off" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="user_uid" id="user_uid" class='form-control'  value="<?php echo escape(Input::get('user_uid')); ?>" autocomplete="off" placeholder="ID Number">
                    </div>
                    <div class="form-group ">
                        <p> Select Category <p>
                                <div class="radio">
                                    <label for="user_doctor">
                                        <input type="radio" name="user_group" id="user_doctor" value=1 checked>
                                        Doctor
                                    </label>
                                </div>

                                <div class="radio">
                                    <label for="user_doctor">
                                        <input type="radio" name="user_group" id="user_doctor" value=2>
                                        Nurse
                                    </label>
                                </div>

                                <div class="radio">
                                    <label for="user_doctor">
                                        <input type="radio" name="user_group" id="user_doctor" value=3>
                                        Admission Officer
                                    </label>
                                </div>

                    </div>
                    <div class="form-group">
                        <input type="password" name="user_pwd" class='form-control'  id="user_pwd" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="user_pwd_again" class='form-control'  id="user_pwd_again" placeholder="Confirm Password">
                    </div>
                    
                    <input type="hidden" name="token" value="<?php echo  Token::generate(); ?>">
                    <br>
                    <div class="">
                        <input type='submit' class="btn btn-primary" value="Register">
                    </div>
                </form>
            </div>
        </div>
        <br>

    </body>

</body>

</html>