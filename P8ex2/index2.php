<?php
//on doit redemarrer la session pour y avoir accés.
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Ex2Partie8user</title>
</head>
<body>
      <?php if(!empty($_SESSION['lastname'])){ ?>
    <p><?= $_SESSION['lastname'];?></p>
   <?php } ?>
  
    <?php if(!empty($_SESSION['firstname'])){ ?>
  <p><?= $_SESSION['firstname'];?></p>
   <?php }  ?>
    <?php if(!empty($_SESSION['age'])){ ?>
  <p><?= $_SESSION['age'];?></p>
  <?php } ?>
</body>
</html>