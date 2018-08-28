<?php
//définir un cookie qui sera envoyé 
if(!empty($_POST['login'])){
    setcookie('NewLogin', $_POST['login'], time() + 60*60*24*30);
}
  if(!empty($_POST['password'])) {
    setcookie('NewCookie', $_POST['password'], time() + 60*60*24*30);
  }
 ?>

 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="assets/style.css" />
     <title>Exercice5</title>
   </head>
  <body>
        <form action="index.php" method="POST">
            <label for="login">Identifiant</label>
            <input type="text" name="login" id="login" placeholder="Identifiant" />
            <label for="password">Mot de passe</label>
            <input type="text" name="password" id="password" placeholder="Mot de passe"/>
            <input type="submit" name="submit" value="Valider">
        </form>
        <?php
            // post permet de récupérer les données du formulaire
            if (empty($_POST['login'])) {
                ?>
                <p>Login non défini</p>
            <?php } else { ?>
                <p>Votre login modifié : <?= $_POST['login']; ?></p>
            <?php } ?>
            <?php
            // post permet de récupérer les données du formulaire
            if (empty($_POST['password'])) {
                ?>
                <p>Mot de passe non défini</p>
            <?php } else { ?>
                <p>Votre mot de passe modifié : <?= $_POST['password']; ?></p>
<?php } ?>
    </body>
</html>
