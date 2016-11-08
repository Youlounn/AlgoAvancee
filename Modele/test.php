<?php
// Récupération du numéro depuis index.html
$numero = $_POST['1'];

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


//Requête HTTP
(string) $ret = file_get_contents("https://www.cinemasgaumontpathe.com/index.php?do=reservation_white/ajax/checkNumeroCarte&v=".$numero."&sectionId=136&progId=27217976&nofid=1");
$ret1 = utf8_encode($ret);

//Intérpretation du message reçu
$ret = json_decode($ret1);
if($ret->{'s'} == 1){
  $bool = 'valide';
}
else{
  $bool = 'pas valide';
}
print_r ("Le numéro ".$ret->{'num'}." est ".$bool);

 ?>
