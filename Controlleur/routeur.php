<?php
require_once 'controleurNumero.php';
require_once 'controleurDemande.php';

class Routeur{
  private $ctrlNum;
  private $ctrlDemande;

  public function __construct(){
    $this->ctrlNum = new ControleurNumero();
    $this->ctrlDemande = new ControleurDemande();
    $this->ctrlDemande->affichage();
  }

  public function verifNumero($numero){
    $this->ctrlNum->verifNumero($numero);
  }
} ?>
