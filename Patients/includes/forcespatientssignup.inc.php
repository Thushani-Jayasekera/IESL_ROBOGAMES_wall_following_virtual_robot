<?php
      include_once 'class-autoload.inc.php';

      if (isset($_POST['submit'])) {
        $force = $_POST["force"];
        $first = $_POST["first"];
        $last = $_POST["last"];
        $nic= $_POST["nic"];
        $force_id = $_POST["force_id"];
        $regiment = $_POST["regiment"];
        $rank = $_POST["rank"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        $address = $_POST["address"];
        $mobile = $_POST["mobile"];
        if (empty($force) || empty($first) || empty($last) || empty($nic) || empty($force_id) || empty($regiment) || empty($rank) || empty($email) || empty($dob) || empty($height) || empty($weight) || empty($address) || empty($mobile)) {
          header("Location: ../forcespatientsignup.php?signup=empty");
        } else {
          if(!preg_match("/^[a-zA-Z]*$/", $force) || !preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[a-zA-Z]*$/", $regiment) || !preg_match("/^[a-zA-Z]*$/", $rank)){
            header("Location: ../forcespatientsignup.php?signup=char");
          }else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              header("Location: ../forcespatientsignup.php?signup=invalidemail");
            }else{
              $patientContrObject = new PatientContr();
              $patientContrObject->createForcesPatient($force, $first, $last, $nic, $force_id, $regiment, $rank, $email, $dob, $height, $weight, $address, $mobile);
              header("Location: ../forcespatientsignup.php?signup=success");
            }
          }
        }


    }
