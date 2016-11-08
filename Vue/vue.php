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
    <table style="widht:100%;">
      <thead>
        <tr>
          <th>Numéro</th>
          <th>Bouton</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($listeCode as $tmp) {
          echo '<tr><td>'.$tmp.'</td><td><form method="post" action="index.php"><input type="hidden" name="verifValid" value="'.$tmp.'"><input id="btTab" type="submit" name="soumettre" value="Vérification"/></form></td></tr>';
        }
        ?>
      </tbody>
    </table>
  <?php
  }
}
?>
