<?php

    session_start();
    
    if (isset($_SESSION['connexion']) && !empty($_SESSION['connexion'])) {
        header('Location: ./profile.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  </head>
  <body>
    <h1>Formulaire de connexion</h1><hr><br>
    <form action="/controllers/login.php" method="post">
        <?= (isset($_GET['error'])) ? $_GET['error'].'<br><br>' : "" ?>
        Email : <br><input type="email" placeholder="Email" name="email"><br><br>
        Mot de passe : <br><input type="password" placeholder="Mot de passe" name="password"><br><br>
        <input type="submit" value="Se connecter">
    </form>
    <br><a href="./index.php">S'enregistrer</a>
  </body>
</html>