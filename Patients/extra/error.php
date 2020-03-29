<?php
            if (isset($_GET['first'])) {
                $first = $_GET['first'];
                echo '<input type="text" name="first" placeholder="First Name" value="'.$first.'"><br>';
            }else{
                echo '<input type="text" name="first" placeholder="First Name"><br>';
            }
            if (isset($_GET['last'])) {
                $last = $_GET['last'];
                echo '<input type="text" name="last" placeholder="Last Name" value="'.$last.'"><br>';
            }else{
                echo '<input type="text" name="last" placeholder="Last Name"><br>';
            }
            echo '<input type="text" name="email" placeholder="E-mail"><br>';
            if (isset($_GET['uid'])) {
                $uid = $_GET['uid'];
                echo '<input type="text" name="uid" placeholder="UID" value="'.$uid.'"><br>';
            }else{
                echo '<input type="text" name="uid" placeholder="UID"><br>';
            }
        ?>
        <input type="password" name="pwd" placeholder="Password"><br>
        <button type="submit" name="submit">Sign up</button><br>a