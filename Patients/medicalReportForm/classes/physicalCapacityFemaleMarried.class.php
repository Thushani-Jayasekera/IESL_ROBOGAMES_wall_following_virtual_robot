<?php
    include_once "physicalCapacityFemale.class.php";

    class PhysicalCapacityFemaleMarried extends physicalCapacityFemale{
        private $numChildren;
        private $numPregs;
        private $dateLastConf;

        function __construct($eyesColor, $hairColor, $complextion, $height, $weight, $scars, $urAppearance, $urAlbumen, $urSugar, $urSpGravity, $physique, $guap, $skin, $eConditions, $heartSize, $sounds, $arterialWalls, $pulseRate, $bp, $respSystemInfo, $fullExpChest, $rangeOfExp, $centralNerveSys, $abdomen, $abnormalities, $womenInfo, $lmpDate, $maritalState, $numChildren, $numPregs, $dateLastConf){
            parent::__construct($eyesColor, $hairColor, $complextion, $height, $weight, $scars, $urAppearance, $urAlbumen, $urSugar, $urSpGravity, $physique, $guap, $skin, $eConditions, $heartSize, $sounds, $arterialWalls, $pulseRate, $bp, $respSystemInfo, $fullExpChest, $rangeOfExp, $centralNerveSys, $abdomen, $abnormalities, $womenInfo, $lmpDate, $maritalState);
            $this->numChildren = $numChildren;
            $this->numPregs = $numPregs;
            $this->dateLastConf = $dateLastConf;
        }

        function getProperty($property){
            if ($property == 'numChildren' || $property == 'numPregs' || $property == 'dateLastConf'){
                return $this->$property;
            }else{
                parent::getProperty($property);
            }
        }
    }