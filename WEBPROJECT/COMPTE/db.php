<?php
// Informations de connexion à la base de données
$serveur = "localhost"; // Nom du serveur
$utilisateur = "root"; // Nom d'utilisateur MySQL par défaut sur WampServer
$mot_de_passe = "Sio123"; // Mot de passe MySQL par défaut sur WampServer
$base_de_donnees = "picpassion"; // Nom de la base de données

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion
if (!$connexion) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
?>
