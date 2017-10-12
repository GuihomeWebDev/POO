<?php
class Personnage{
public $life = 10;
public $attack = 10;
public $strength = 10;
public $intelligence = 10;
public $shout ="";
public $name;
public $target;
public function __construct($name){
  $this->name = $name;
}
public function yell($shout){
  echo $shout;
}
public function regenerated($life = null){
  if (is_null($life)) {
    $this->life = 100;
  }else {
    $this->life += $life; //$this->vie = $this->vie + $vie (facon plus longue mais plus explicite)

  }
}
public function death(){
  if ($this->life <= 0) {
    echo $this->name . " est mort";
  }else {
    echo $this->name . " est vivant et il lui reste" ." ". $this->life . " "."points de vie";
  }

}
public function punch($target){
$target->life -= $this->attack;
}
}
