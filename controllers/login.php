<?php
    session_start();

    $utilisateurs = $_SESSION['utilisateurs'];

    $email = $_POST['email'];
    $password = $_POST['password'];
    