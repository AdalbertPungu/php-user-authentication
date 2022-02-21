<?php
    
    session_start();
    
    if (isset($_SESSION['connexion']) && !empty($_SESSION['connexion'])) {
        header('Location: ./profile.php');
    }

?>
