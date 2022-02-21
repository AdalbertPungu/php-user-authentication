<?php

session_start();

$name = $_POST["nom"];
$postnom = $_POST["postnom"];
$prenom = $_POST["prenom"];
$genre = $_POST["genre"];
$matricule = $_POST["matricule"];
$promotion = $_POST["promotion"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$adresse = $_POST["adresse"];

if ($name != "" && 
    $postnom != "" && 
    $prenom != "" && 
    $genre != "" && 
    $matricule != "" && 
    $promotion != "" && 
    $email != "" && 
    $phone != "" && 
    $password != "" && 
    $password2 != "") {

    if (!empty($_SESSION['utilisateurs'][$email])) {
        header("Location: /index.php?error=l'email est déjà utilisé");
    } else {
        $_SESSION['utilisateurs'][$email] = [
            'name' => $name,
            'postnom' => $postnom,
            'prenom' => $prenom,
            'genre' => $genre,
            'matricule' => $matricule,
            'promotion' => $promotion,
            'email' => $email,
            'phone' => $phone,              
            'password' => $password,
            'password' => $password2,
            'adresse' => $adresse
        ];

        $_SESSION['connexion'] = [
            'name' => $name,
            'postnom' => $postnom,
            'prenom' => $prenom,
            'genre' => $genre,
            'matricule' => $matricule,
            'promotion' => $promotion,
            'email' => $email,
            'phone' => $phone,              
            'password' => $password,
            'password' => $password2,
            'adresse' => $adresse
        ];

        header('Location: /profile.php');
    }
}

if ($name == "") {
    echo "Le nom est vide<br><br>";
}

if ($postnom == "") {
    echo "Le postnom est vide<br><br>";
}

if ($prenom == "") {
    echo "Le prenom est vide<br><br>";
}

if ($genre == "") {
    echo "Le genre  est vide<br><br>";
}

if ($phone == "") {
    echo "Le numéro de télephone est vide<br><br>";
}

if ($matricule == "") {
    echo "Le matricule est vide<br><br>";
}

if ($promotion == "") {
    echo "La promotion est vide<br><br>";
}

if ($email == "") {
    echo "L'email  est vide<br><br>";
}

if ($password == "") {
    echo "Le mot de passe est vide<br><br>";
}

if ($password2 == "") {
    echo "Le mot de passe est vide<br><br>";
}

if ($adresse == "") {
    echo "L'adresse est vide<br><br>";
}

