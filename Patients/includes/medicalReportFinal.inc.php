<?php
  session_start();
  include_once "class-autoload.inc.php";

  $force_id = $_SESSION['force_id'];
  $nic  = $_SESSION['nic'];
  $date  = $_SESSION['date'];
  $serializedPersonalHistory  = $_SESSION['serializedPersonalHistory'];
  $serializedHospitalTreatments = $_SESSION['serializedHospitalTreatments'];
  $serializedOtherMedicalTreatments = $_SESSION['serializedOtherMedicalTreatments'];
  $otherInfo = $_SESSION['otherInfo'];
  $summary = $_SESSION['summary'];
  $serializedEyes = $_SESSION['serializedEyes'];
  $serializedEarsNoseThroat = $_SESSION['serializedEarsNoseThroat'];
  $serializedUpperLimbsLocomotion = $_SESSION['serializedUpperLimbsLocomotion'];
  $serializedPhysicalCapacityObject = $_SESSION['serializedPhysicalCapacityObject'];
  $serializedMentalCapacity = $_SESSION['serializedMentalCapacity'];
  $serializedForm10 = $_SESSION['serializedForm10'];
  $serializedSpecialistReportObject = $_SESSION['serializedSpecialistReportObject'];

  $patientContrObject = new PatientContr();
  $patientContrObject->createMedicalRecord($force_id, $nic, $date, $serializedPersonalHistory, $serializedHospitalTreatments, $serializedOtherMedicalTreatments, $otherInfo, $summary, $serializedEyes, $serializedEarsNoseThroat, $serializedUpperLimbsLocomotion, $serializedPhysicalCapacityObject, $serializedMentalCapacity, $serializedForm10, $serializedSpecialistReportObject);

  echo "Successful";

?>
