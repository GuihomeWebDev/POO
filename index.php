<?php
//inclusion des class
require 'Personnage.php';
require 'Magicien.php';
require 'Guerrier.php';
//instanciation de mes class
$leodagan = new Guerrier("Leodagan");
$merlin = new Magicien('Merlin');
$guihome =new Personnage('Guihome');
//affiche les carracteristiques du guerrier Leodagan
var_dump($leodagan);
//affiche les carracteristiques du magicien Merlin
var_dump($merlin);
//affiche les carracteristiques du personnage Guihome
var_dump($guihome);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Présentation des personnages</h1>
    <p><?= $guihome->name ?></p>
    <p><?= $merlin->name ?></p>
    <p><?= $leodagan->name ?></p>
    <h2>Intérraction des personnages</h2>
    <p><?= "Guillaume vois au loin deux individus et cri.. ";?></p>
    <p><?= $guihome->yell('EEEHH!!! Vous faites quoi vous deux !!');?></p>
    <p><?= "Merlin cri.. ";?></p>
      <p><?= $merlin->yell();?></p>
        <p><?= "Merlin lance une boule de feu sur Leodagan "; ?></p>
          <p><?php $merlin->spell($leodagan); ?></p>
            <p><?= "vie de leodagan"." ".$leodagan->life; ?></p>
              <p><?= "Leodagan cri.. "; ?></p>
                <p><?php $leodagan->yell(); ?></p>
                <p><?= "Leodagan frappe Merlin avec son éppée "; ?></p>
                <p><?php $leodagan->handOfGod($merlin); ?></p>
                <p><?= "vie de merlin"." ".$merlin->life; ?></p>
                <h3>Fin du combat (dans quel état sont nos personnages)</h3>
                <p><?= $guihome->death(); ?></p>
                <p><?= $merlin->death(); ?></p>
                <p><?= $leodagan->death(); ?></p>
  </body>
</html>
