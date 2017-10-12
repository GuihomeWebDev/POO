<?php
/**
 *la class Guerrier hérite de la class mére Personnage
 */
class Guerrier extends Personnage{
  public $life = 80;
  public $sword = 25;
  public $strength = 20;
  public $intelligence = 5;
  public $shout ="";
  public $name;
  public $target;
/**
* fonction yell affiche le cri du guérrier
*/
  public function yell($shout){
    $shout= "EN PLEIN DANS SA MOUILLE!!!";
    echo $shout;
  }
  /**
  *fonction handOfGod permet au guerrier de frapper sa cible
  *on impute de la vie de la cible la puissance de l'eppée + la force
  */
  public function handOfGod($target){
      $target->life -= $this->sword + $this->strength;
  }

}
