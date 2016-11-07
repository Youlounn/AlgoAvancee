<?php
$numero = $_POST['1'];
$ret = file_get_contents("https://www.cinemasgaumontpathe.com/index.php?do=reservation_white/ajax/checkNumeroCarte&v=".$numero."&sectionId=136&progId=27217976&nofid=1");
echo $ret;
 ?>
