<!DOCTYPE html>
<?php
include('phpqrcode-git-863ffffac4c9d22e522464e325cbcbadfbb26470/lib/full/qrlib.php');
?>
<html>
<head>
<meta charset="utf-8" />
<title>Permutation</title>
</head>

    <body>
      <style>
        body{
          font-size: 15pt;
          align-items: center;
          text-align: center;
        }
      </style>

<?php

function permute($i,$n,$debut,$str,$fin) {
   if ($i == $n){

    $dataText   = $debut.$str.$fin;
    /*$svgTagId   = 'QRcode_de_gros_batard';
    $saveToFile = false;
    $imageWidth = 250;*/
    echo "<td height='40'>";
       echo "$debut $str $fin";
       //echo "</br>";
       //$svgCode = QRcode::svg($dataText, $svgTagId, $saveToFile, QR_ECLEVEL_L, $imageWidth);*/
       // HTML5 Canvas renderer

   $jsCanvasCode = QRcode::canvas($dataText);

   // reqired JS rendering lib
   //bouton check
   echo'<input type="submit" value="Check">';
   
   echo '<script type="text/javascript" src="phpqrcode-git-863ffffac4c9d22e522464e325cbcbadfbb26470/lib/js/qrcanvas.js"></script>';

   // Canvas and JS code output
   echo $jsCanvasCode;

       //echo $svgCode;
       echo "</td>";
     }
   else {
        for ($j = $i; $j < $n; $j++) {
          swap($str,$i,$j);
          permute($i+1, $n,$debut,$str,$fin);
          swap($str,$i,$j);
       }
   }
}

function swap(&$str,$i,$j) {
    $temp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $temp;
}
    $code1= $_POST['1'];
    $code2= $_POST['2'];
    $code3= $_POST['3'];
    $code4= $_POST['4'];//echo $code1;echo "</br>";
    $debut1=substr($code1, 0, 4); //echo $debut1;echo "</br>";
    $mid1=substr($code1, 4, -4); //echo $mid1;echo "</br>";
    $fin1=substr($code1, 8);//echo $fin1;echo "</br>";
    /*$d1 = "1345";
    $d2 = "2495";
    $d3 = "9876";
    $d4 = "4567";*/

    echo "<table>";
    //echo "<tr height='40'>".permute($d1,0,strlen($d1))."</tr>";
    //echo "<tr height='40'>".permute($d2,0,strlen($d2))."</tr>";
    //echo "<tr height='40'>".permute($d3,0,strlen($d3))."</tr>";
    echo "<tr height='40'>".permute(0,strlen($mid1),$debut1,$mid1,$fin1)."</tr>";
    echo "</table>";

?>
</script>
</body>
</html>
