<?php
session_start();
require_once "controlleur/routeur.php";

$routeur = new Routeur();

if(isset($_POST['1'])){
  $numero = $_POST['1'];
  if(!$numero == ""){
    $routeur->verifNumero($numero);
  }
}
?>
