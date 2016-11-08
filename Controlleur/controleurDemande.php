<?php
require_once __DIR__."/../vue/vue.php";
require_once __DIR__."/../Modele/modele.php";

class ControleurDemande{
  private $vue;
  private $modele;

  function __construct(){
    $this->vue = new Vue();
    $this->modele = new Modele();
  }

  function affichage(){
    $this->vue->demandeNumero();
  }
}
