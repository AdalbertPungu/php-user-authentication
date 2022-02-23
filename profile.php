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
      <h3>Nom : <?= $user['name'] ?></h3>
      <h3>Postnom : <?= $user['postnom'] ?></h3>
      <h3>Prenom : <?= $user['prenom'] ?></h3>
      <h3>Genre : <?= $user['genre'] ?></h3>
      <h3>Matricule : <?= $user['matricule'] ?></h3>
      <h3>Promotion : <?= $user['promotion'] ?></h3>
      <h3>Email : <?= $user['email'] ?></h3>
      <h3>Téléphone : <?= $user['phone'] ?></h3>
      <h3>Adresse : <?= $user['adresse'] ?></h3>
      <a href="./deconnexion.php">Se déconnecter</a>
  </body>
</html>