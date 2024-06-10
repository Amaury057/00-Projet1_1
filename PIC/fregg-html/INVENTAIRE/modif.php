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
    $marque = $_POST["marque"];
    $taille = $_POST["taille"];
    $prix = $_POST["prix"];
    $diametre = isset($_POST["diametre"]) ? $_POST["diametre"] : null;

    if ($type_equipement == 'cordes') {
        $sql_update = "UPDATE cordes SET marque = ?, tailles_cordes = ?, diametre_cordes = ?, prix = ? WHERE id = ? AND id_utilisateur = ?";
        $stmt_update = $connexion->prepare($sql_update);
        $stmt_update->bind_param("sssiii", $marque, $taille, $diametre, $prix, $id_equipement, $_SESSION["id_utilisateur"]);
    } else {
        $sql_update = "UPDATE chaussons SET marque = ?, pointure = ?, prix = ? WHERE id = ? AND id_utilisateur = ?";
        $stmt_update->bind_param("ssdii", $marque, $taille, $prix, $id_equipement, $_SESSION["id_utilisateur"]);
    }

    if ($stmt_update->execute()) {
        echo "Équipement modifié avec succès.";
    } else {
        echo "Erreur lors de la modification.";
    }
    exit();
}

if (!isset($_GET["id"]) || empty($_GET["id"]) || !isset($_GET["type"]) || empty($_GET["type"])) {
    header("Location: table.php");
    exit();
}

$id_equipement = $_GET["id"];
$type_equipement = $_GET["type"];

if ($type_equipement == 'cordes') {
    $sql = "SELECT * FROM cordes WHERE id = ? AND id_utilisateur = ?";
} else {
    $sql = "SELECT * FROM chaussons WHERE id = ? AND id_utilisateur = ?";
}

$stmt = $connexion->prepare($sql);
$stmt->bind_param("ii", $id_equipement, $_SESSION["id_utilisateur"]);
$stmt->execute();
$resultat = $stmt->get_result();

if ($resultat->num_rows == 1) {
    $equipement = $resultat->fetch_assoc();
    ?>
    <form id="modifForm" method="POST">
        <input type="hidden" name="id" value="<?php echo $id_equipement; ?>">
        <input type="hidden" name="type" value="<?php echo $type_equipement; ?>">
        <label for="marque">Marque:</label><br>
        <input type="text" id="marque" name="marque" value="<?php echo $equipement["marque"]; ?>"><br>
        <label for="taille">Taille:</label><br>
        <input type="text" id="taille" name="taille" value="<?php echo $type_equipement == 'cordes' ? $equipement["tailles_cordes"] : $equipement["pointure"]; ?>"><br>
        <?php if ($type_equipement == "cordes"): ?>
            <label for="diametre">Diamètre:</label><br>
            <input type="text" id="diametre" name="diametre" value="<?php echo $equipement["diametre_cordes"]; ?>"><br>
        <?php endif; ?>
        <label for="prix">Prix:</label><br>
        <input type="text" id="prix" name="prix" value="<?php echo $equipement["prix"]; ?>"><br><br>
        <input type="submit" value="Modifier">
    </form>
    <?php
} else {
    echo "Équipement non trouvé.";
}

$connexion->close();
?>
