<?php
session_start();
require_once("../COMPTE/db.php");

// Vérification de l'authentification de l'utilisateur
if (!isset($_SESSION["id_utilisateur"])) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas authentifié
    header("Location: ../COMPTE/login.php");
    exit();
}

// Requête SQL pour récupérer les équipements de type "cordes" et "chaussons"
$sql = "SELECT 'cordes' AS type, id, marque, tailles_cordes AS taille, diametre_cordes AS diametre, prix FROM cordes WHERE id_utilisateur = ? 
        UNION 
        SELECT 'chaussons' AS type, id, marque, pointure AS taille, NULL AS diametre, prix FROM chaussons WHERE id_utilisateur = ?";
$stmt = $connexion->prepare($sql);
$stmt->bind_param("ii", $_SESSION["id_utilisateur"], $_SESSION["id_utilisateur"]);
$stmt->execute();
$resultat_equipements = $stmt->get_result();

// Vérification s'il y a des équipements à afficher
if ($resultat_equipements->num_rows > 0) {
    // Affichage des équipements dans un tableau HTML
    echo "<table>";
    echo "<tr><th>Type</th><th>Marque</th><th>Taille</th><th>Diamètre</th><th>Prix</th><th>Actions</th></tr>";
    while ($row = $resultat_equipements->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . ucfirst($row["type"]) . "</td>";
        echo "<td>" . $row["marque"] . "</td>";
        echo "<td>" . $row["taille"] . "</td>";
        echo "<td>" . ($row["diametre"] ?? "-") . "</td>";
        echo "<td>" . $row["prix"] . "</td>";
        echo "<td><button class='modifier-btn' data-id='" . $row["id"] . "' data-type='" . $row["type"] . "'>Modifier</button>";
        echo "<button class='supprimer-btn' data-id='" . $row["id"] . "' data-type='" . $row["type"] . "'>Supprimer</button></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucun équipement trouvé.";
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/table.js"></script>
