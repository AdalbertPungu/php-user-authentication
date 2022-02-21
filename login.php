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
    
  </body>
</html>