<?php
/**
 *
 */
class Magicien extends Personnage{
  public $life = 50;
  public $magic = 100;
  public $fireBall =40;
  public $strength = 10;
  public $intelligence = 20;
  public $shout ="";
  public $name;
  public $target;

  public function yell($shout){
    $shout= "VOUS NE PASSERAIS PAS...";
    echo $shout;
  }
  public function spell($target){
    if ($this->magic >= $this->fireBall) {
      $this->magic -= $this->fireBall;
      $target->life -= $this->fireBall + $this->intelligence;
    }else {
      echo "Vous n avez plus assez de point de magie";
    }

  }
  }
