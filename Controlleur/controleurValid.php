<?php
require_once __DIR__."/../vue/vue.php";
require_once __DIR__."/../Modele/modele.php";

class ControleurValid{
  private $vue;
  private $modele;


  function __construct(){
    $this->vue=new Vue();
    $this->modele=new Modele();
  }

  function verifNumero($num){
    $this->modele->verifNumero($num);
  }

  function valide($numero){
    $bool = $this->modele->verifNumero($numero);
    $this->vue->afficherResultat($bool,$numero);
    $liste = $this->modele->afficherNumero($numero);
    $this->vue->afficherTableau($liste);
  }
}?>
