<?php

    class SpecialistReport{
        private $sraroi;
        private $right;
        private $left;
        private $dateOfReport;
        private $initPulheems;
        private $servicePulheems;

        public function __construct($sraroi, $right, $left, $dateOfReport, $initPulheems, $servicePulheems){
            $this->sraroi = $sraroi;
            $this->right = $right;
            $this->left = $left;
            $this->dateOfReport = $dateOfReport;
            $this->initPulheems = $initPulheems;
            $this->servicePulheems = $servicePulheems;

        }

        public function getProperty($property){
            return $this->$property;
        }
    }