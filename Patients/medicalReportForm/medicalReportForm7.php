<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medical Report </title>
  </head>
  <body>
    <form action="includes/form7.inc.php" method="post">
     
      <h1>Upper Limbs and Locomotor System</h1>
      <h4>Upper Limbs (finger, hands, wrists, elbows, shoulder girdles, cervical and dorsal vertebrae</h4>
      <textarea rows = "10" cols = "60" name = "upperLimbs">
      </textarea><br><br>
      <table border="1"> 
      <tr><th> U </th> </tr> 
      <tr><td>  <input type="text" name="u"></td></tr>
      </table><br>
       Effect on P. if any <input type="text" name="effectUpperLimbs"><br>
     
    <h4>Locomotion (Hahax valgus/rigidus, flat feet, joints, pelvis, lumbar and sacral vertebrae, coccys, varicose veins</h4>
      <textarea rows = "10" cols = "60" name = "locomotion">
      </textarea><br><br>
      <table border="1"> 
      <tr><th> L </th> </tr> 
      <tr><td>  <input type="text" name="l"></td></tr>
      </table><br>
       Effect on P. if any <input type="text" name="effectLocomotion"><br>
     


      <br><br><button type="submit" name="next">Next</button>
    </form>
  </body>
</html>
