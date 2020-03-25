<?php
  include_once "includes/class-autoload.inc.php";
  session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Profile</title>
  </head>
  <body>
    <div class="info">
      <h2>Patient Information</h2>
      <?php
        $nic = '123703702V'; //'$_SESSION['nic']';
        $patientView = new PatientView();
        $results = $patientView->showPatientInfo($nic);
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
      ?>
    </div>

    <div class="Visits">
      <?php
      //Should add coloumns for prescriptions, medical reports when the forms are made
        $visitInfo = $patientView->showCurrentVisit($nic);
        $doa = $visitInfo[0]['doa'];
        $_SESSION['doa'] = $doa;
        $reason = $visitInfo[0]['reason'];
        $history = $visitInfo[0]['history'];
        $cm = $visitInfo[0]['cm'];
        $doctor = $visitInfo[0]['doctor'];
        $ward = $visitInfo[0]['ward'];
        echo "<h2> Current Visit </h2>
        <table border='1'>
          <tr> <th>Date of Admission</th><th>Reason for admission</th><th>Medical History</th><th>Current medications</th><th>Doctor</th><th>Ward</th></tr>
          <tr>
            <td>$doa</td><td>$reason</td><td>$history</td><td>$cm</td><td>$doctor</td><td>$ward</td>
          </tr>

        </table>";
       ?>
       <br>
       <a href="oldVisits.php">View visit History</a>
    </div>

    <div class="newDoctor">
      <h2>Chane Doctor</h2>

    <form action="includes/newDoctor.inc.php" method="post">
      <p>Enter new Doctor's name</p>
      <input type="text" name="newDoctor">
      <button type="submit" name="Submit">Submit</button>
    </form>
  </div>

  <a href="medicalReportForm/medicalReportDisplay1.php"> Medical Report</a>
  <!-- Add links to prescription history, lab report history, issue drug request, discharge form -->



  </body>
</html>
