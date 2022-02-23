<?php
  session_start();
  $_SESSION['connexion'] = [];
  header('Location: ./login.php');