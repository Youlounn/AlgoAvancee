<?php
session_start();
require_once "controlleur/routeur.php";

$routeur = new Routeur();

if(isset($_POST['1'])){
  $numero = $_POST['1'];
  if(!$numero == ""){
    $routeur->afficherNumero($numero);
  }
}
if(isset($_POST['verifValid'])){
  $numero2 = $_POST['verifValid'];
  if(!$numero2 == ""){
    $routeur->verifValid($numero2);
    //$routeur->verifValid($numero2);
  }
}

?>
