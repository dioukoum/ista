<?php 
session_start();
//SUPPRESSION DE VALEURS DE SESSSIONS
session_unset();
//FERMETURE DE LA SESSION
session_destroy();
//REDIRECTION
header('Location: index.php');
