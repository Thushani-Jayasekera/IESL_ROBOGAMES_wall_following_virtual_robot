<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medical Report </title>
  </head>
  <body>
    <form action="includes/form5.inc.php" method="post">
     
      <h1>Eyes</h1>
      <table border="1">
        <tr>
          <th></th> <th>Right</th><th>Left</th><th>CP</th>
        </tr>
        <tr><th>Without Glasses</th><td> <input type="text" name="right"></td><td> <input type="text" name="left"></td><td> <input type="text" name="CP"></td>

        <tr><td><input type="text" name="emptyHeading"></td><td><input type="text" name="emptyRight"></td><td> <input type="text" name="emptyLeft"></td><td> <input type="text" name="emptyCP"></td></tr>
        
      </table>
      <p>Diseases, etc</p>
      <textarea rows = "5" cols = "60" name = "diseases">
      </textarea><br><br>
      
      Effect on P. if any <input type="text" name="effect"><br>
     
      <br><br><br><button type="submit" name="next">Next</button>
    </form>
  </body>
</html>
