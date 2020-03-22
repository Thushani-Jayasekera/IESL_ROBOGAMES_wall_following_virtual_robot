<?php
    include_once 'class-autoload.inc.php';

    if (isset($_POST['submit'])) {
        $nic= $_POST["nic"];
        $doa = $_POST["doa"];
        $reason = $_POST["reason"];
        $history = $_POST["history"];
        $cm = $_POST["cm"];
        $doctor = $_POST["doctor"];
        $ward = $_POST["ward"];
        
        if (empty($nic) || empty($doa) || empty($reason) ||  empty($history) || empty($doctor) || empty($ward)) {
          header("Location: ../newadmission.php?status=empty");
        } else {
            if(!preg_match("/^[a-zA-Z]*$/", $doctor)){
                header("Location: ../newadmission.php?status=char");
            
        }else{
              $patientContrObject = new PatientContr();
              $patientContrObject-> createNewRecord($nic, $doa, $reason, $history, $cm, $doctor, $ward);
              header("Location: ../newadmission.php?status=success");
            }
        }
    } 
    
