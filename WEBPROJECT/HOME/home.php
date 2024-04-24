<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pic Passion</title>
    <link rel="stylesheet" href="/styles.css"> <!-- Lien vers votre feuille de style CSS -->
</head>
<body>
    <header>
        <nav>
            <!-- Utilisation de la classe .sidebar pour la bande latérale -->
            <div class="container">
                <div class="sidebar">
                    <ul>
                        <li><a href="home.php"><h1 style="text-align: center;">Pic Passion</hi></a></li><br>                    
                        <li><a href="../SPOTS/spots.php">Les Spots</a></li>
                        <li><a href="../INVENTAIRE/inv.php">Inventaire</a></li>
                        <li><a href="../COMPTE/compte.php">Compte</a></li>
                        <li><a href="../CONTACTE/contacte.php">Contact </a></li>
                        <li><form action="../COMPTE/connexion.php">
                        <a href="../COMPTE/deco.php" id="deco">Déconnexion</a><br><br></form>
                        </li>
                    </ul>
                </div>
                <div class="content">
                    <section>
                        <h2>Bienvenue sur Pic Passion</h2>
                        <p>Découvrez notre site dédié à l'escalade, où vous trouverez des informations sur les cours, les spots et bien plus encore !</p>
                        <p>Que vous soyez débutant ou expérimenté, vous trouverez votre bonheur sur Pic Passion.</p>
                    </section>
                    <?php
                        session_start();
                        require_once("C:/wamp64/www/00-Projet1_1/WEBPROJECT/COMPTE/db.php");

                        echo 'Bienvenue ' . $_SESSION["prenom"];
                    ?>
                    <section>
                        <h2>Dernières actualités</h2>
                        <ul>
                            <li><a href="#">Nouveau spot d'escalade ouvert à proximité !</a></li>
                            <li><a href="#">Inscrivez-vous dès maintenant à nos cours de printemps !</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </nav>
    </header>

    <footer>
        <p>&copy; 2024 Pic Passion. Tous droits réservés.</p>
    </footer>
</body>
</html>
