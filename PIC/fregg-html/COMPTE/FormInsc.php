<?php
session_start();
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
  //  $confirmer_mot_de_passe = $_POST["confirmer_mot_de_passe"];

    // Validation des données (vous pouvez ajouter des validations supplémentaires ici)

    // Vérification si les mots de passe correspondent
  //  if ($mot_de_passe === $confirmer_mot_de_passe) {
        // Les mots de passe correspondent, vous pouvez traiter l'inscription ici
        // Par exemple, enregistrement des données dans la base de données

        // Exemple d'insertion dans la base de données
        $sql = "INSERT INTO utilisateur (nom, prenom, mail, mdp) VALUES ('$nom', '$prenom', '$mail', '$mdp')";

        if (mysqli_query($connexion, $sql)) {
            echo "Inscription réussie !";
        } else {
            echo "Erreur lors de l'inscription : " . mysqli_error($connexion);
        }
    } else {
        // Les mots de passe ne correspondent pas
        echo "Erreur: Les mots de passe ne correspondent pas.";
    }
//}
?>