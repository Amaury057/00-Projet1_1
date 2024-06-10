<?php
session_start();
require_once("../COMPTE/db.php");

if (!isset($_SESSION["id_utilisateur"])) {
    header("Location: ../COMPTE/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_equipement = $_POST["id"];
    $type_equipement = $_POST["type"];

    if ($type_equipement == 'cordes') {
        $sql = "DELETE FROM cordes WHERE id = ? AND id_utilisateur = ?";
    } else {
        $sql = "DELETE FROM chaussons WHERE id = ? AND id_utilisateur = ?";
    }

    $stmt = $connexion->prepare($sql);
    $stmt->bind_param("ii", $id_equipement, $_SESSION["id_utilisateur"]);

    if ($stmt->execute()) {
        echo "Équipement supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression.";
    }
    exit();
}
?>
