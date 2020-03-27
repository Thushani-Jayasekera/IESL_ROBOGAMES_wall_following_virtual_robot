<?php
    include_once "physicalCapacityFemale.class.php";

    class PhysicalCapacityFemaleMarried extends PhysicalCapacityFemale{
        private $numChildren;
        private $numPregs;
        private $dateLastConf;

        public function __construct($eyesColor, $hairColor, $complextion, $height, $weight, $scars, $urAppearance, $urAlbumen, $urSugar, $urSpGravity, $physique, $guap, $skin, $eConditions, $heartSize, $sounds, $arterialWalls, $pulseRate, $bp, $respSystemInfo, $fullExpChest, $rangeOfExp, $centralNerveSys, $abdomen, $abnormalities, $womenInfo, $lmpDate, $maritalState, $numChildren, $numPregs, $dateLastConf){
            parent::__construct($eyesColor, $hairColor, $complextion, $height, $weight, $scars, $urAppearance, $urAlbumen, $urSugar, $urSpGravity, $physique, $guap, $skin, $eConditions, $heartSize, $sounds, $arterialWalls, $pulseRate, $bp, $respSystemInfo, $fullExpChest, $rangeOfExp, $centralNerveSys, $abdomen, $abnormalities, $womenInfo, $lmpDate, $maritalState);
            $this->numChildren = $numChildren;
            $this->numPregs = $numPregs;
            $this->dateLastConf = $dateLastConf;
        }

        public function getPropertyFM($property){
            if ($property == 'numChildren' || $property == 'numPregs' || $property == 'dateLastConf'){
                return $this->$property;
            }else{
                $this->getPropertyF($property);
            }
        }
    }
