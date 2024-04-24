<?php
session_start();
require_once("C:/wamp64/www/00-Projet1_1/Fregg Free Website Template - Free-CSS.com/fregg-html/COMPTE/db.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

function isPostRequest()
{
    return $_SERVER["REQUEST_METHOD"] === "POST";
}

if (isPostRequest() && isset($_POST['types'])) {
    $types = $_POST["types"];
    $id_utilisateur = $_SESSION ["id_utilisateur"];
    $tailles_cordes = isset($_POST["tailles_cordes"]) ? $_POST["tailles_cordes"] : null;
    $tailles_chaussons = isset($_POST["tailles_chaussons"]) ? $_POST["tailles_chaussons"] : null;

    $sql = "INSERT INTO equipements (types, tailles_cordes, tailles_chaussons, id_utilisateur) 
            VALUES (?, ?, ?, ?)";

    $stmt = $connexion->prepare($sql);
    echo var_dump($tailles_chaussons) ;

    if ($stmt) {
        $stmt->bind_param("ssss", $types, $tailles_cordes, $tailles_chaussons, $id_utilisateur);

        if ($stmt->execute()) {
            echo "<div class='retour'>equipement ajouté avec succès !</div>";

            
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
