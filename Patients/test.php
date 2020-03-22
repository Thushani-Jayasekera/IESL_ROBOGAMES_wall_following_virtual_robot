<?php
mysqli_connect('localhost', 'root', '') or die('Could not connect the database : Username or password incorrect');
mysqli_select_db(mysqli_connect('localhost', 'root', ''),'patients') or die ('No database found');
echo 'Database Connected successfully';
?>