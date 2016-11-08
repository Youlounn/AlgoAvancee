<?php
require_once __DIR__."/../vue/vue.php";
require_once __DIR__."/../Modele/modele.php";

class ControleurNumero{
  private $vue;
  private $modele;

  function __construct(){
    $this->vue=new Vue();
    $this->modele=new Modele();
  }

  function afficherNumero($num){
    $liste = $this->modele->afficherNumero($num);
    $this->vue->afficherTableau($liste);
  }
}?>
