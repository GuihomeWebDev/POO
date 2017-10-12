<?php
/**
 *
 */
class Guerrier extends Personnage{
  public $life = 80;
  public $sword = 25;
  public $strength = 20;
  public $intelligence = 5;
  public $shout ="";
  public $name;
  public $target;

  public function yell($shout){
    $shout= "EN PLEIN DANS SA MOUILLE!!!";
    echo $shout;
  }
  public function handOfGod($target){
      $target->life -= $this->sword + $this->strength;
  }

}
