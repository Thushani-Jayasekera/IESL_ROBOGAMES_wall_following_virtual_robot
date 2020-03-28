<?php
  session_start();
  include_once "classes/form10.class.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <h4>Each Examiner will initial here and indicate any specialist examinations or other investigations considered necessary before a final #### assessment is given</h4>
    <?php
      $results = $_SESSION['results'];

      $serializedForm10 = $results[0]['serializedForm10'];

      $form10Object = unserialize($serializedForm10);

      $one = $form10Object->getOne();
      $two = $form10Object->getTwo();
      $three = $form10Object->getThree();
      $four = $form10Object->getFour();
      $initials1 = $form10Object->getInitials1();
      $initials2 = $form10Object->getInitials2();
      $initials3 = $form10Object->getInitials3();
      $initials4 = $form10Object->getInitials4();

      echo '<p>(*) No. 1 <b>'.$one.'</b> Initials of examiner <b>'.$initials1.'</b></p>
      <p>(*) No. 2 <b>'.$two.'</b> Initials of examiner <b>'.$initials2.'</b></p>
      <p>(*) No. 3 <b>'.$three.'</b> Initials of examiner <b>'.$initials3.'</b></p>
      <p>(*) No. 4 <b>'.$four.'</b> Initials of examiner <b>'.$initials4.'</b></p>';

     ?>

     <form action="medicalReportDisplay11.php" method="post">
       <button type="submit" name="next">Next</button>
     </form>
  </body>
</html>
