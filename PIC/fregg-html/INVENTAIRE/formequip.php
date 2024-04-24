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
    $id_utilisateur = $_SESSION ["id_utilisateur"];
    $tailles_cordes = isset($_POST["tailles_cordes"]) ? $_POST["tailles_cordes"] : null;
    $diametre_cordes = isset($_POST["diametre_cordes"]) ? $_POST["diametre_cordes"] : null;
    $tailles_chaussons = isset($_POST["tailles_chaussons"]) ? $_POST["tailles_chaussons"] : null;

    $sql = "INSERT INTO equipements (marque, types, tailles_cordes, tailles_chaussons, id_utilisateur, diametre_cordes) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $connexion->prepare($sql);
    echo var_dump($tailles_chaussons) ;
    echo var_dump($tailles_cordes) ;
    echo var_dump($diametre_cordes) ;

    if ($stmt) {

        $tailles_chaussons_valide = !empty($tailles_chaussons) ? $tailles_chaussons : null;

        $tailles_cordes_valide = !empty($tailles_cordes) ? $tailles_cordes : null;

        $diametre_cordes_valide = !empty($diametre_cordes) ? $diametre_cordes : null;


        $stmt->bind_param("ssssss", $marque, $types, $tailles_cordes_valide, $tailles_chaussons_valide , $id_utilisateur, $diametre_cordes_valide);

        if ($stmt->execute()) {
            echo "<div class='retour'>equipement ajouté avec succès !</div>";

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
