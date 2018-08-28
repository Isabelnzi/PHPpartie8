<?php
//démarer une session pour faire passer des données d'une page à une autre.
session_start();
$_SESSION['lastname'] = 'Nzingani';
$_SESSION['firstname'] = 'Isabel';
$_SESSION['age'] = 35;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/style.css" />
    <title>P8ex2</title>
  </head>
  <body>
      <!--lien vers la deuxiéme page-->
    <a href="index2.php"><button type="button" class="btn btn-success">Voir</button>
  </body>
</html>
