<?php
  include_once "includes/class-autoload.inc.php";

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Visit History</title>
   </head>
   <body>
    <h2>Visit History</h2>
     <table border='1'>
       <tr> <th>Date of Admission</th><th>Reason for admission</th><th>Medical History</th><th>Current medications</th><th>Doctor</th><th>Ward</th></tr>
        <?php
        $nic = '123703702V'; //'$_SESSION['nic']';
        $patientView = new PatientView();
        $results = $patientView->showAllVisits($nic);

        foreach ($results as $result) {
          $doa = $result['doa'];
          $reason = $result['reason'];
          $history = $result['history'];
          $cm = $result['cm'];
          $doctor = $result['doctor'];
          $ward = $result['ward'];
          echo "<tr>
            <td>$doa</td><td>$reason</td><td>$history</td><td>$cm</td><td>$doctor</td><td>$ward</td>
          </tr>";
        }




        ?>




     </table>
   </body>
 </html>
