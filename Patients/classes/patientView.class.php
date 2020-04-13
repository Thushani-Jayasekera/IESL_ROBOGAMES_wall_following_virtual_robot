<?php

  include_once "patientmodel.class.php";

  class PatientView extends PatientModel{
    public function showMedicalReport($nic){
      $results = $this->getMedicalReport($nic);
      return $results;
    }

    public function showPatientInfo($nic){
      $results = $this->getPatientInfo($nic);
      return $results;
    }

    public function showCurrentVisit($nic){
      $results = $this->getCurrentVisit($nic);
      return $results;
    }

    public function showAllVisits($nic){
      $results = $this->getAllVisits($nic);
      return $results;
    }

    public function showCurrentPrescription($nic){
      $results = $this->getCurrentPrescription($nic);
      return $results;
    }

    public function showAllPrescriptions($nic){
      $results = $this->getAllPrescriptions($nic);
      return $results;
    }

    public function showLabTestsRequests($nic){
      $results = $this->getLabTestsRequests($nic);
      return $results;
    }

    public function showDetails($nic, $doa){
      $results = $this->getDetails($nic, $doa);
      return $results;
    }

    public function showProfilePic($nic, $patientType){
      $results = $this->getProfilePic($nic, $patientType);
      return $results;
    }

  }
 ?>
