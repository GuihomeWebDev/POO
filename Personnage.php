<?php
/*
*class mère
*/
class Personnage{
//déclaration des attributs de class
public $life = 10;
public $attack = 10;
public $strength = 10;
public $intelligence = 10;
public $shout ="";
public $name;
public $target;
/*
*fonction qui permet de passer le nom du personnage en parametre lors de l instanciation
*/
public function __construct($name){
  $this->name = $name;
}
/*
*function qui permet au personnage de crier
*/
public function yell($shout){
  echo $shout;
}
/*
*fonction qui permet au personnage de reupérer de la vie
*/
public function regenerated($life = null){
  if (is_null($life)) {
    $this->life = 100;
  }else {
    $this->life += $life; //$this->vie = $this->vie + $vie (facon plus longue mais plus explicite)

  }
}
/*
*fonction qui permet de savoir si un personnage est mort ou vivant
*/
public function death(){
  if ($this->life <= 0) {
    echo $this->name . " est mort";
  }else {
    echo $this->name . " est vivant et il lui reste" ." ". $this->life . " "."points de vie";
  }

}
/*
*fonction qui permet de frapper avec ses poings(degats de merde pour un perso de base)
*/
public function punch($target){
$target->life -= $this->attack;
}
}
