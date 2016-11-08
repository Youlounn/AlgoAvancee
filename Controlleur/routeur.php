<?php
require_once 'controleurNumero.php';
require_once 'controleurDemande.php';
require_once 'controleurValid.php';

class Routeur{
  private $ctrlNum;
  private $ctrlDemande;
  private $ctrlValid;

  public function __construct(){
    $this->ctrlNum = new ControleurNumero();
    $this->ctrlDemande = new ControleurDemande();
    $this->ctrlValide = new ControleurValid();
    $this->ctrlDemande->affichage();
  }

  public function afficherNumero($numero){
    $this->ctrlNum->afficherNumero($numero);
  }

  public function verifValid($numero){
    $this->ctrlValide->valide($numero);
  }
} ?>
