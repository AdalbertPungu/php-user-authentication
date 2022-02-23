<?php
    session_start();

    $utilisateurs = $_SESSION['utilisateurs'];

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($_SESSION['utilisateurs'][$email]) && $password == $_SESSION['utilisateurs'][$email]['password']) {
        $_SESSION['connexion'] = $_SESSION['utilisateurs'][$email];
        header('Location: /profile.php');
    }elseif ($email == "") {
        echo "L'email  est vide<br><br>";
    }elseif ($password == "") {
        echo "Le mot de passe est vide<br><br>";
    } else {
        header('Location: /login.php?error=Coordonnées Incorrectes');
    }

