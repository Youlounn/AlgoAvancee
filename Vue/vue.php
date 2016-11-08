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
          echo '<tr><td>'.$tmp.'</td><td><form method="post" action="test.php"><input type="submit" name="soumettre" value="envoyer"/></form></td></tr>';
        }
        ?>
      </tbody>
    </table>
  <?php
  }
}
?>
