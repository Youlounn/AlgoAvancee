<?php

class Modele{
  private $numero;

  public function __construct(){
    $this->numero = 0;
  }

  public function afficherNumero($num){
    $numero = $num;

    //Découpage du numéro
    $prefixe = substr($numero,0,4);
    $milieu = substr($numero,4,4);
    $suffixe = substr($numero,8,4);

    //Somme des quatre chiffres du milieu
    $strSomme = str_split($milieu);
    $somme = 0;
    foreach($strSomme as $tmp){
      $somme += $tmp;
    }

    //Tous les codes possibles dans un tableau
    $listeCodes = array();

    for ($i=0; $i<10 ; $i++) {
      for ($i1=0; $i1<10 ; $i1++) {
        for ($i2=0; $i2<10 ; $i2++) {
          for ($i3=0; $i3<10 ; $i3++) {
            if($i + $i1 + $i2 + $i3 == $somme){
              $nb = $prefixe.$i.$i1.$i2.$i3.$suffixe;
              array_push($listeCodes,$nb);
            }
          }
        }
      }
    }
    return $listeCodes;
  }

} ?>
