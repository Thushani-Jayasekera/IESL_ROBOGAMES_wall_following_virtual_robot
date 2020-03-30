<?php
  include_once "includes/class-autoload.inc.php";
  session_start();
  $nic = $_SESSION['nic'];
  $doa = $_SESSION['doa'];
  $patientObj = new PatientView();
  $currentPrescription = $patientObj->showCurrentPrescription($nic, $doa);
  $allPrescriptions = $patientObj->showAllPrescriptions($nic);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prescriptions</title>
    <link rel="stylesheet" href="css/oldVisits.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>
    <header>
      <h2>Prescriptions</h2>
    </header>
    <div class="form">

    <h2>Current Prescription</h2>
    <?php
        if(empty($currentPrescription)){
          echo "<h5> No unissued prescriptions <h5>";

        } else{
          echo "<table class='content-table' id='prescription-table' border='1'>
            <form action='includes/viewPrescription.inc.php' method='post'>
            <thead>
              <tr>
                <th>Date</th><th>Prescripton</th><th>Click when issued</th>
              </tr>
            </thead>
            <tbody>";
        foreach($currentPrescription as $result){
          $prescriptionObj = unserialize($result['Prescription']);
          $_SESSION['prescription'] = $result['Prescription'];
          $prescription = $prescriptionObj->getPrescription();
          echo "<tr><td>$doa</td><td>$prescription</td><td><button type='submit'>Issue</button></td></tr>";
        }
      }

        ?>
      </tbody>
    </table><br>
    </form>

    <h2>Issued Prescriptions</h2>

    <table class='content-table' id='prescription-table' border='1'>
      <thead>
        <tr>
          <th>Date</th><th>Prescripton</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($allPrescriptions as $result){
          $prescriptionObj = unserialize($result['Prescription']);
          $prescription = $prescriptionObj->getPrescription();
          $date = $result['doa'];
          echo "<tr><td>$date</td><td>$prescription</td></tr>";
        }

        ?>
      </tbody>
    </table>


   </div>

  </body>
</html>
