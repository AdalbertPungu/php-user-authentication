<?php
    session_start();
    $user = $_SESSION['connexion'];

    if (empty($_SESSION['connexion'])) {
        header('Location: ./login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
  </head>
  <body>
        <h1>Salut Bienvenue</h1><hr>
        <a href="./deconnexion.php">Se déconnecter</a>
  </body>
</html>