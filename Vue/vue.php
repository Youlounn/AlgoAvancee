<?php
class Vue{

function demandeNumero(){
  header("Content-type: text/html; charset=utf-8");
?>

<html>
  <head>
    <style>
      body{
        text-align: center;
      }
      table, td, th {
        border: black solid 1px;
        border-collapse: collapse;
      }
      thead{
        background-color: #5695A2;
      }
      #btTab{
        background-color: #5695A2;
        width: 150px;
        height: 40px;
        transition: background 0.5s;
      }
      #btTab:hover{
        background-color: #76B5C2;
      }
      #tableau{
        display: block;
        border-width: 1px;
        border-style: solid;
        margin: 2px;
        padding:0px;
        height: 440px;
        width: 470px;
        overflow: auto
      }
    </style>
  </head>
  <body>
    <form method="post" action="index.php">
        Code 1: <input type="text" name="1" size="12"><br>
        <input type="submit" value="OK">
    </form>
  </body>
<?php
  }

  function afficherResultat($bool, $numero){
    if($bool == 'valide'){
      print_r('Le numéro '.$numero.' est valide');
    }
    else{
      print_r('Le numéro '.$numero.' est invalide');
    }
  }

  function afficherTableau($listeCode){
    ?>
    <h2> Voici vos codes </h2>
    </br>
    </br>
    <span id="tableau">
      <table style="widht:100%;">
        <thead>
          <tr>
            <th>Index</th>
            <th>Numéro</th>
            <th>QRCode</th>
            <th>Bouton</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
          foreach ($listeCode as $tmp) {
            $i += 1;
            echo '<tr><td>'.$i.'</td><td>'.$tmp.'</td><td><img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl='.$tmp.'"></td><td><form method="post" action="index.php"><input type="hidden" name="verifValid" value="'.$tmp.'"><input id="btTab" type="submit" name="soumettre" value="Vérification"/></form></td></tr>';
          }
          ?>
        </tbody>
      </table>
  <?php
  }
}
?>
