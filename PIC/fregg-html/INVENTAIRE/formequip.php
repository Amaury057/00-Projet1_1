<?php
session_start();
require_once("../COMPTE/db.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

function isPostRequest()
{
    return $_SERVER["REQUEST_METHOD"] === "POST";
}

if (isPostRequest() && isset($_POST['types'])) {
    $marque = $_POST["marques"];
    $types = $_POST["types"];
    $id_utilisateur = $_SESSION["id_utilisateur"];
    $tailles_cordes = isset($_POST["tailles_cordes"]) ? $_POST["tailles_cordes"] : null;
    $diametre_cordes = isset($_POST["diametre_cordes"]) ? $_POST["diametre_cordes"] : null;
    $pointure = isset($_POST["pointure"]) ? $_POST["pointure"] : null;
    $prix = isset($_POST["prix"]) ? $_POST["prix"] : null;

    if ($types === "cordes") {
        $sql = "INSERT INTO cordes (marque, tailles_cordes, diametre_cordes, prix, id_utilisateur) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);
        $stmt->bind_param("sssdi", $marque, $tailles_cordes, $diametre_cordes, $prix, $id_utilisateur);
    } elseif ($types === "chaussons") {
        $sql = "INSERT INTO chaussons (marque, pointure, prix, id_utilisateur) 
                VALUES (?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);
        $stmt->bind_param("ssdi", $marque, $pointure, $prix, $id_utilisateur);
    }

    if ($stmt) {
        if ($stmt->execute()) {
            echo "<div class='retour'>Équipement ajouté avec succès !</div>";
            header('location: equipement.php');
            exit;
        } else {
            echo "Erreur lors de l'exécution de la requête : " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erreur lors de la préparation de la requête : " . $connexion->error;
    }
}

$connexion->close();
?>
