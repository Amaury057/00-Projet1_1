<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];

    // Vérification de l'existence de l'utilisateur dans la base de données
    $sql = "SELECT * FROM utilisateur WHERE mail='$mail' AND mdp='$mdp'";
    $resultat = mysqli_query($connexion, $sql);

    if (mysqli_num_rows($resultat) > 0) {
        $row = mysqli_fetch_assoc($resultat);
    
        $_SESSION["mail"] = $mail;
        $_SESSION["prenom"] = $row["prenom"];
        $_SESSION["nom"] = $row["nom"];
        $_SESSION["id_utilisateur"] = $row["id_utilisateur"];

        header('location: ../index.php');
        exit;
    } else {
        // L'utilisateur n'existe pas ou les informations sont incorrectes
        echo "Erreur: Email ou mot de passe incorrect.";
    }
    
}
$connexion->close();

?>
