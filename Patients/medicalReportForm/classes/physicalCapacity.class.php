<?php

  class PhysicalCapacity{
    private $eyesColor;
    private $hairColor;
    private $complextion;
    private $height;
    private $weight;
    private $scars;
    private $urAppearance;
    private $urAlbumen;
    private $urSugar;
    private $urSpGravity;
    private $physique;
    private $guap;
    private $skin;
    private $eConditions;
    private $heartSize;
    private $sounds;
    private $arterialWalls;
    private $pulseRate;
    private $bp;
    private $respSystemInfo;
    private $fullExpChest;
    private $rangeOfExp;
    private $centralNerveSys;
    private $abdomen;
    private $abnormalities; 

    public function __construct($eyesColor, $hairColor, $complextion, $height, $weight, $scars, $urAppearance, $urAlbumen, $urSugar, $urSpGravity, $physique, $guap, $skin, $eConditions, $heartSize, $sounds, $arterialWalls, $pulseRate, $bp, $respSystemInfo, $fullExpChest, $rangeOfExp, $centralNerveSys, $abdomen, $abnormalities){
      $this->eyesColor = $eyesColor;
      $this->hairColor = $hairColor;
      $this->complextion = $complextion;
      $this->height = $height;
      $this->weight = $weight;
      $this->scars = $scars;
      $this->urAppearance = $urAppearance;
      $this->urAlbumen = $urAlbumen;
      $this->urSugar = $urSugar;
      $this->urSpGravity = $urSpGravity;
      $this->physique = $physique;
      $this->guap = $guap;
      $this->skin = $skin;
      $this->eConditions = $eConditions;
      $this->heartSize = $heartSize;
      $this->sounds = $sounds;
      $this->arterialWalls = $arterialWalls;
      $this->pulseRate = $pulseRate;
      $this->bp = $bp;
      $this->respSystemInfo = $respSystemInfo;
      $this->fullExpChest = $fullExpChest;
      $this->rangeOfExp = $rangeOfExp;
      $this->centralNerveSys = $centralNerveSys;
      $this->abdomen = $abdomen;
      $this->abnormalities = $abnormalities;

    }

    public function getProperty($property){
      return $this->$property;
    }
  }

 ?>
