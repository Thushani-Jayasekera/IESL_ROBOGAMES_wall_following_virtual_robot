<?php
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

    public function showCurrentPrescription($nic, $doa){
      $results = $this->getCurrentPrescription($nic, $doa);
      return $results;
    }

    public function showAllPrescriptions($nic){
      $results = $this->getAllPrescriptions($nic);
      return $results;
    }

    
  }
 ?>
