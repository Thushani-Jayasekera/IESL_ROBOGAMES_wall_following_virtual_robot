<?php
  session_start();
  include_once "../../includes/class-autoload.inc.php";

  $eyesColor = $_POST['eyesColor'];
  $hairColor = $_POST['hairColor'];
  $complextion = $_POST['complexion'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $scars= $_POST['scars'];
  $urAppearance = $_POST['appearance'];
  $urAlbumen = $_POST['albumen'];
  $urSugar = $_POST['sugar'];
  $urSpGravity = $_POST['spGravity'];
  $physique = $_POST['physique'];
  $guap = $_POST['guap'];
  $skin = $_POST['skin'];
  $eConditions = $_POST['eConditions'];
  $heartSize = $_POST['heartSize'];
  $sounds = $_POST['sounds'];
  $arterialWalls = $_POST['arterialWalls'];
  $pulseRate = $_POST['pulseRate'];
  $bp = $_POST['bp'];
  $respSystemInfo = $_POST['respSystemInfo'];
  $fullExpChest = $_POST['fullExpChest'];
  $rangeOfExp = $_POST['rangeOfExp'];
  $centralNerveSys = $_POST['centralNerveSys'];
  $abdomen = $_POST['abdomen'];
  $abnormalities = $_POST['abnormalities'];
  $gender = $_POST['gender'];

  if ($gender == 'female') {
    $womenInfo = $_POST['womenInfo'];
    $lmpDate = $_POST['lmpDate'];
    $maritalState = $_POST['maritalState'];

    if ($maritalState == 'yes') {
      $numChildren = $_POST['numChildren'];
      $numPregs = $_POST['numPregs'];
      $dateLastConf = $_POST['dateLastConf'];

      $physicalCapacityObject = new PhysicalCapacityFemaleMarried($eyesColor, $hairColor, $complextion, $height, $weight, $scars, $urAppearance, $urAlbumen, $urSugar, $urSpGravity, $physique, $guap, $skin, $eConditions, $heartSize, $sounds, $arterialWalls, $pulseRate, $bp, $respSystemInfo, $fullExpChest, $rangeOfExp, $centralNerveSys, $abdomen, $abnormalities, $womenInfo, $lmpDate, $maritalState, $numChildren, $numPregs, $dateLastConf);

    }else {
      $physicalCapacityObject = new PhysicalCapacityFemale($eyesColor, $hairColor, $complextion, $height, $weight, $scars, $urAppearance, $urAlbumen, $urSugar, $urSpGravity, $physique, $guap, $skin, $eConditions, $heartSize, $sounds, $arterialWalls, $pulseRate, $bp, $respSystemInfo, $fullExpChest, $rangeOfExp, $centralNerveSys, $abdomen, $abnormalities, $womenInfo, $lmpDate, $maritalState);
    }

  }else{
    $physicalCapacityObject = new PhysicalCapacity($eyesColor, $hairColor, $complextion, $height, $weight, $scars, $urAppearance, $urAlbumen, $urSugar, $urSpGravity, $physique, $guap, $skin, $eConditions, $heartSize, $sounds, $arterialWalls, $pulseRate, $bp, $respSystemInfo, $fullExpChest, $rangeOfExp, $centralNerveSys, $abdomen, $abnormalities);
  }

  $serializedPhysicalCapacityObject = serialize($physicalCapacityObject);

  $_SESSION['serializedPhysicalCapacityObject'] = $serializedPhysicalCapacityObject;

  header("Location: ../medicalReportForm9.php")


?>
