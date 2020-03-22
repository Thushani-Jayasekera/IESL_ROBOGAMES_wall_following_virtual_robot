<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medical Report </title>
  </head>
  <body>
    <form action="includes/form6.inc.php" method="post">
     
      <h1>Ears, Nose, Throat</h1>
      <h2>Hearing</h2>
      <table border="1">
        <tr> <th></th> <th>Hears F.W. at </th><th>Hears C.V. at </th> </tr>
        <tr><th>Right</th><td> <input type="text" name="rfw"></td><td><input type="text" name = "rcv"></td></tr>
        <tr><th>Left</th><td> <input type="text" name="lfw"></td><td><input type="text" name = "lcv"></td></tr>
        <tr><th>Both</th><td> <input type="text" name="bothfw"></td><td><input type="text" name = "bothcv"></td></tr>   
      </table>

      <table border="1">
        <h3> Wax </h3>
        <tr> <th></th> <th>Present </th><th>Removed</th> </tr>
        <tr><th>Right</th><td> <input type="text" name="rpresent" placeholder="Yes/No"></td><td><input type="text" name = "rremoved" placeholder="Yes/No"></td></tr>
        <tr><th>Left</th><td> <input type="text" name="lpresent" placeholder="Yes/No"></td><td><input type="text" name = "lremoved" placeholder="Yes/No"></td></tr>
      </table>

      <h2>Diseases, etc</h2>
      <textarea rows = "5" cols = "60" name = "diseases">
      </textarea><br><br>
      
      <table border="1"> 
      <tr><th> H </th> </tr> 
      <tr><td>  <input type="text" name="h"></td></tr>
      </table>
      <br>
      Effect on P. if any <input type="text" name="effect"><br>
     
      <br><br><button type="submit" name="next">Next</button>
    </form>
  </body>
</html>
