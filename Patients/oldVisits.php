<?php
  include_once "includes/class-autoload.inc.php";

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Visit History</title>
     <link rel="stylesheet" href="css/oldVisits.css">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   </head>
   <body>
    <div class="form">

    <h2>Visit History</h2>
     <table class='content-table' border='1'>
       <thead>

       <tr> <th>Date of Admission</th><th>Reason for admission</th><th>Medical History</th><th>Current medications</th><th>Doctor</th><th>Ward</th></tr>
      </thead>
      <tbody>

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

      </tbody>

     </table>
   </div>

   </body>
 </html>
