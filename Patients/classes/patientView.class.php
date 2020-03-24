<?php
  class PatientView extends PatientModel{
    public function showMedicalReport($force_id){
      $results = $this->getMedicalReport($force_id);
      return $results;
    }
  }
 ?>
