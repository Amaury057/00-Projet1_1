<?php
session_start();
require_once("../COMPTE/db.php");

// Vérification de la session utilisateur
if (!isset($_SESSION["id_utilisateur"])) {
    header("Location: ../COMPTE/login.php");
    exit();
}

// Traitement du formulaire de modification
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_equipement = $_POST["id"];
    $type_equipement = $_POST["type"];
    $marque = isset($_POST["marque"]) ? $_POST["marque"] : null;
    $taille = isset($_POST["taille"]) ? $_POST["taille"] : null;
    $prix = isset($_POST["prix"]) ? $_POST["prix"] : null;
    $diametre = isset($_POST["diametre"]) ? $_POST["diametre"] : null;

    // Préparation de la requête SQL en fonction du type d'équipement
    if ($type_equipement == 'cordes') {
        $sql_update = "UPDATE cordes SET marque = ?, tailles_cordes = ?, diametre_cordes = ?, prix = ? WHERE id = ? AND id_utilisateur = ?";
        $stmt_update = $connexion->prepare($sql_update);
        $stmt_update->bind_param("sssiii", $marque, $taille, $diametre, $prix, $id_equipement, $_SESSION["id_utilisateur"]);
    } else {
        $sql_update = "UPDATE chaussons SET marque = ?, pointure = ?, prix = ? WHERE id = ? AND id_utilisateur = ?";
        $stmt_update = $connexion->prepare($sql_update);
        $stmt_update->bind_param("ssdii", $marque, $taille, $prix, $id_equipement, $_SESSION["id_utilisateur"]);
    }

    // Exécution de la requête de mise à jour
    if ($stmt_update->execute()) {
        echo "Équipement modifié avec succès.";
    } else {
        echo "Erreur lors de la modification.";
    }
    exit();
}

// Vérification des paramètres GET pour récupérer l'équipement à modifier
if ($_SERVER["REQUEST_METHOD"])
if (!isset($_GET["id"]) || empty($_GET["id"]) || !isset($_GET["type"]) || empty($_GET["type"])) {
    header("Location: table.php"); // Redirection en cas de paramètres manquants
    exit();
}

$id_equipement = $_GET["id"];
$type_equipement = $_GET["type"];

// Préparation de la requête SQL pour récupérer les détails de l'équipement à modifier
if ($type_equipement == 'cordes') {
    $sql = "SELECT * FROM cordes WHERE id = ? AND id_utilisateur = ?";
} else {
    $sql = "SELECT * FROM chaussons WHERE id = ? AND id_utilisateur = ?";
}

$stmt = $connexion->prepare($sql);
$stmt->bind_param("ii", $id_equipement, $_SESSION["id_utilisateur"]);
$stmt->execute();
$resultat = $stmt->get_result();

// Vérification de l'existence de l'équipement à modifier
if ($resultat->num_rows == 1) {
    $equipement = $resultat->fetch_assoc();
    ?>
    <form id="modifForm" method="POST">
        <input type="hidden" name="id" value="<?php echo $id_equipement; ?>">
        <input type="hidden" name="type" value="<?php echo $type_equipement; ?>">
        <label for="marque">Marque :</label><br>
        <input type="text" id="marque" name="marque" value="<?php echo htmlspecialchars($equipement["marque"]); ?>"><br>
        <label for="taille">Taille :</label><br>
        <input type="text" id="taille" name="taille" value="<?php echo htmlspecialchars($type_equipement == 'cordes' ? $equipement["tailles_cordes"] : $equipement["pointure"]); ?>"><br>
        <?php if ($type_equipement == "cordes"): ?>
            <label for="diametre">Diamètre :</label><br>
            <input type="text" id="diametre" name="diametre" value="<?php echo htmlspecialchars($equipement["diametre_cordes"]); ?>"><br>
        <?php endif; ?>
        <label for="prix">Prix :</label><br>
        <input type="text" id="prix" name="prix" value="<?php echo htmlspecialchars($equipement["prix"]); ?>"><br><br>
        <input type="submit" value="Modifier">
    </form>
    <?php
} else {
    echo "Équipement non trouvé.";
}

$connexion->close();
?>
