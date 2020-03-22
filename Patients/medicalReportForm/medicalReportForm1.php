<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medical Report</title>
  </head>
  <body>
    <form action="includes/form1.inc.php" method="post">
      Service No : <input type="text" name="force_id" placeholder='Ex: s/xxxxx'>
      NIC: <input type="text" name="nic" placeholder='Ex: 97xxxxxxxv'>
      Date of admission: <input type="date" name="date">
      <h1>Personal History</h1>
      <table border="1">
        <tr>
          <th>Illness</th> <th>Yes/No</th><th>If "Yes", at what age?</th>
        </tr>
        <tr> <td>Bronchitis</td><td> <input type="text" name="bronchdata"></td><td><input type="text" name="bronchage"></td></tr>
        <tr> <td>Asthma</td><td> <input type="text" name="asthmadata"></td><td><input type="text" name="asthmaage"></td></tr>
        <tr> <td>Tuberculosis</td><td> <input type="text" name="tbdata"></td><td><input type="text" name="tbage"></td></tr>
        <tr> <td>Fits</td><td> <input type="text" name="fitsdata"></td><td><input type="text" name="fitsage"></td></tr>
        <tr> <td>Gastric Disorders</td><td> <input type="text" name="gasdata"></td><td><input type="text" name="gasage"></td></tr>
        <tr> <td>Rheumatism</td><td> <input type="text" name="rheumatismdata"></td><td><input type="text" name="rheumatismage"></td></tr>
        <tr> <td>Nervous Breakdown</td><td> <input type="text" name="nervedata"></td><td><input type="text" name="nerveage"></td></tr>
        <tr> <td>Mental Illness</td><td> <input type="text" name="mentaldata"></td><td><input type="text" name="mentalage"></td></tr>
        <tr> <td>Filariasis</td><td> <input type="text" name="filariasisdata"></td><td><input type="text" name="filariasisage"></td></tr>
        <tr> <td>Any Other Illness</td><td> <input type="text" name="otherdata"></td><td><input type="text" name="otherage"></td></tr>
      </table>
      <p>Mention other illness if applicable</p>
      <textarea rows = "5" cols = "62" name = "other">
      </textarea><br><br>
      Have you ever had a discharge or running from the ears <input type="checkbox" name="data[]" value="ears"><br>
      Has your chest ever been X-Rayed? <input type="checkbox" name="data[]" value="xray">
      If so, when and for what reason? <input type="text" name="xraydata"><br>
      Have you ever been discharged as medically unfit from any bramch of the services? <input type="checkbox" name="data[]" value="discharged"><br>
      Have you ever been rejected as medically unfit from any branch of the services? <input type="checkbox" name="data[]" value="rejected"><br>
      Are you, or have you been, in receipt of a disability pension? <input type="checkbox" name="data[]" value="disabilitypension"><br>
      <br><br><br><button type="submit" name="next">Next</button>
    </form>
  </body>
</html>
