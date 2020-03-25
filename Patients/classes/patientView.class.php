<?php
  class PatientView extends PatientModel{
    public function showMedicalReport($force_id){
      $results = $this->getMedicalReport($force_id);
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

  }
 ?>
