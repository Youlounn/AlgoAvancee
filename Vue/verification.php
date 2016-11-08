<?php
class Verification{

function afficher(){
  header("Content-type: text/html; charset=utf-8");
?>

<html>
  <head>
    <style>
      body{
        text-align: center;
      }
    </style>
  </head>
  <body>
    Votre vérification :
<?php
  }
  function valide($numero){
    ?>
  </br>
  <?php
    print_r('Votre place numéro '.$numero.' est valide')
  ?>
  <?php
  }

  function invalide($numero){
    ?>
  </br>
  <?php
    print_r('Votre place numéro '.$numero.' est invalide')
  ?>
  <?php
  }
}
?>
