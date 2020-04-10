<?php
  include_once "includes/class-autoload.inc.php";
  session_start();

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
     <section class="page">

     <section class="info">

       <h2 id='white'>Patient Information</h2>
       <?php
         $nic = "123703702V";//$_SESSION['nic'];
         $_SESSION['nic'] = $nic;
         $patientView = new PatientView();
         $results = $patientView->showPatientInfo($nic);
         if (!empty($results[0])){
           if($results['type'] == 'force') {
             $force_id = $results[0]['force_id'];
             $force = $results[0]['force'];
             $first_name = $results[0]['first_name'];
             $last_name = $results[0]['last_name'];
             $regiment = $results[0]['regiment'];
             $rank = $results[0]['rank'];
             $email = $results[0]['email'];
             $dob = $results[0]['date_of_birth'];
             $height = $results[0]['height'];
             $weight = $results[0]['weight'];
             $address = $results[0]['address'];
             $mobile = $results[0]['mobile'];

             echo "<p>NIC: ".$nic."</p>";
             echo "<p>Force ID: ".$force_id."</p>";
             echo "<p>Force: ".$force."</p>";
             echo "<p>First Name: ".$first_name."</p>";
             echo "<p>Last Name: ".$last_name."</p>";
             echo "<p>Date of Birth: ".$dob."</p>";
             echo "<p>Regiment: ".$regiment."</p>";
             echo "<p>Rank: ".$rank."</p>";
             echo "<p>Height: ".$height."</p>";
             echo "<p>Weight: ".$weight."</p>";
             echo "<p>Email: ".$email."</p>";
             echo "<p>Address: ".$address."</p>";
             echo "<p>Mobile: ".$mobile."</p><br>";
           }

         else if($results['type'] == 'family') {
           $force_id = $results[0]['force_id'];
           $force = $results[0]['force'];
           $first_name = $results[0]['first_name'];
           $last_name = $results[0]['last_name'];
           $relation = $results[0]['relation'];
           $email = $results[0]['email'];
           $dob = $results[0]['date_of_birth'];
           $height = $results[0]['height'];
           $weight = $results[0]['weight'];
           $address = $results[0]['address'];
           $mobile = $results[0]['mobile'];

           echo "<p>NIC: ".$nic."</p>";
           echo "<p>Force ID of family member: ".$force_id."</p>";
           echo "<p>Force of family member: ".$force."</p>";
           echo "<p>Relation to family member: ".$relation."</p>";
           echo "<p>First Name: ".$first_name."</p>";
           echo "<p>Last Name: ".$last_name."</p>";
           echo "<p>Date of Birth: ".$dob."</p>";
           echo "<p>Height: ".$height."</p>";
           echo "<p>Weight: ".$weight."</p>";
           echo "<p>Email: ".$email."</p>";
           echo "<p>Address: ".$address."</p>";
           echo "<p>Mobile: ".$mobile."</p><br>";
         }
       }
       else{ echo 'Unregistered patient';}
       ?>
     </section>
     <section class='content'>

    <h2>Visit History</h2>
     <table class='content-table' border='1'>
       <thead>

       <tr> <th>Date of Admission</th><th>Reason for admission</th><th>Medical History</th><th>Current medications</th><th>Doctor</th><th>Ward</th><th>Details by the Doctor</th><th>Date of Discharge</th><th>Summary upon Discharge</th></tr>
      </thead>
      <tbody>

        <?php
        $nic = $_SESSION['nic'];
        $patientView = new PatientView();
        $results = $patientView->showAllVisits($nic);

        foreach ($results as $result) {
          $doa = $result['doa'];
          $reason = $result['reason'];
          $history = $result['history'];
          $cm = $result['cm'];
          $doctor = $result['doctor'];
          $ward = $result['ward'];
          $dischargeDate = $result['discharge_date'];
          $dischargeSummary = $result['discharge_summary'];
          $detailsObj = unserialize($visitInfo[0]['details']);
          $details = $detailsObj->getDetails();
          echo "<tr>
            <td>$doa</td><td>$reason</td><td>$history</td><td>$cm</td><td>$doctor</td><td>$ward</td><td>$details</td><td>$dischargeDate</td><td>$dischargeSummary</td>
          </tr>";
        }
      ?>

      </tbody>

     </table>
     <a href="patientProfile.php"><button type='button'> Back </button></a>
 </section>
</section>

   </body>
 </html>
