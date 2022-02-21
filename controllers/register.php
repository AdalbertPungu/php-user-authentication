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

