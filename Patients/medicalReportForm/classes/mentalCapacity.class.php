<?php
class MentalCapacity{
  private $nic;
  private $speech;
  private $mentalBackwardness;
  private $emotionalInstability;
  private $m;
  private $s;
  private $effect;


  function __construct($nic, $speech, $mentalBackwardness, $emotionalInstability, $m, $s, $effect){
    $this->nic = $nic;
    $this->speech = $speech;
    $this->mentalBackwardness = $mentalBackwardness;
    $this->emotionalInstability = $emotionalInstability;
    $this->m = $m;
    $this->s = $s;
    $this->effect = $effect;
  
}

  function getNic(){
    return $this->nic;
  }

  function getSpeech(){
    return $this->speech;
  }

  function getMentalBackwardness(){
    return $this->mentalBackwardness;
  }

  function getEmotionalInstability(){
    return $this->emotionalInstability;
  }

  function getM(){
    return $this->m;
  }
  function getS(){
    return $this->s;
  }
  function getEffect(){
    return $this->effect;
  }
}
 ?>
