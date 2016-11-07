<?php
$numero = $_POST['1'];
(string) $ret = file_get_contents("https://www.cinemasgaumontpathe.com/index.php?do=reservation_white/ajax/checkNumeroCarte&v=".$numero."&sectionId=136&progId=27217976&nofid=1");
$ret1 = utf8_encode($ret);
$ret = json_decode($ret1);
if($ret->{'s'} == 1){
  $bool = 'valide';
}
else{
  $bool = 'pas valide';
}
print_r ("Le numéro ".$ret->{'num'}." est ".$bool);

 ?>
