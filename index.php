<?php
require 'Personnage.php';
require 'Magicien.php';
require 'Guerrier.php';
$leodagan = new Guerrier("Leodagan");
$merlin = new Magicien('Merlin');
var_dump($leodagan);
var_dump($merlin);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?php  echo "Merlin cri.. ";?></p>
      <p><?php  echo $merlin->yell();?></p>
        <p><?php echo "Merlin lance une boule de feu sur Leodagan "; ?></p>
          <p><?php $merlin->spell($leodagan); ?></p>
            <p><?php echo "vie de leodagan"." ".$leodagan->life; ?></p>
              <p><?php echo "Leodagan cri.. "; ?></p>
                <p><?php $leodagan->yell(); ?></p>
                <p><?php echo "Leodagan frappe Merlin avec son éppée "; ?></p>
                <p><?php $leodagan->handOfGod($merlin); ?></p>
                <p><?php echo "vie de merlin"." ".$merlin->life; ?></p>
  </body>
</html>
