<?php
//GET --> SESSION --> GET: Déconnexion du système, suppression des 
//données de la session et redirection.
session_start();

// L'utilisateur est connecté
if (isset($_SESSION['username']))
{
    // Détruit la session au complet
    //session_destroy(); 
    
    // Supprime uniquement la variable de session utilisé pour la "sécurité" de notre site.
    unset($_SESSION['username']); //$_SESSION['username'] = null;
}

// Redirection
header('Location:index.php');
?>