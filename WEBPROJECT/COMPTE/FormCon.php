<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    // Vérification de l'existence de l'utilisateur dans la base de données
    $sql = "SELECT * FROM utilisateurs WHERE email='$email' AND mot_de_passe='$mot_de_passe'";
    $resultat = mysqli_query($connexion, $sql);

    if (mysqli_num_rows($resultat) == 1) {
        // L'utilisateur existe dans la base de données
        echo "Connexion réussie !";
    } else {
        // L'utilisateur n'existe pas ou les informations sont incorrectes
        echo "Erreur: Email ou mot de passe incorrect.";
    }
}
?>
