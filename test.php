<?php
$numero = $_POST['1'];
<<<<<<< HEAD
$ret = file_get_contents("https://www.cinemasgaumontpathe.com/index.php?do=reservation_white/ajax/checkNumeroCarte&v=".$numero."&sectionId=136&progId=27217976&nofid=1");
$pd=json_decode($ret);
var_dump ($pd);
=======
(string) $ret = file_get_contents("https://www.cinemasgaumontpathe.com/index.php?do=reservation_white/ajax/checkNumeroCarte&v=".$numero."&sectionId=136&progId=27217976&nofid=1");
$ret1 = utf8_encode($ret);
$ret = json_decode($ret1);
print_r ($ret->{'s'});
>>>>>>> origin/master
 ?>
