<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medical Report </title>
  </head>
  <body>
    <form action="includes/form9.inc.php" method="post">
     
      <h1>Mental Capacity and Emotional stability </h1>
      <h4>Speech</h4>
      <textarea rows = "10" cols = "60" name = "speech">
      </textarea><br><br>
     
       <h4>Evidence Suggesting,</h4>
       <h5> Mental Backwardness </h5>
      <textarea rows = "6" cols = "60" name = "mentalBackwardness">
      </textarea><br><br>
      <h5> Emotional Instability </h5>
      <textarea rows = "6" cols = "60" name = "emotionalInstability">
      </textarea><br><br>


      <table border="1"> 
      <tr><th> M </th> <th> S </th> </tr> 
      <tr><td>  <input type="text" name="m"></td><td>  <input type="text" name="s"></td></tr>
      </table><br>
       Effect on P. if any <input type="text" name="effect"><br>
     


      <br><br><button type="submit" name="next">Next</button>
    </form>
  </body>
</html>
