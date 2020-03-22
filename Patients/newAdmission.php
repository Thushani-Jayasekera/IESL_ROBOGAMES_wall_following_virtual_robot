<?php include_once 'includes/class-autoload.inc.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Admission</title>
</head>
<body>
    <form action="includes/newAdmission.inc.php" method='POST'>
    <input type="text" name="nic" placeholder="NIC"><br>
    <input type="date" name='doa' placeholder="Date of Admission"><br>
    <p> Reason for admission </p>
    <textarea rows = "5" cols = "50" name = "reason">
    </textarea><br>
    <p> Medical History </p>
    <textarea rows = "5" cols = "50" name = "history">
    </textarea><br>
    <p>  Any current medications? </p>
    <textarea rows = "5" cols = "50" name = "cm">     
    </textarea><br>
    <input type="text" name='doctor' placeholder='Name of Doctor'><br>
    <input type="text" name='ward' placeholder='Ward'><br>
    <button type="submit" name="submit">Submit</button><br>   
    </form>
    <?php
    statusCheck::check("status");
    ?>
</body>
</html>