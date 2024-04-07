<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Pic Passion</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="../HOME/home.php"><h1 style="text-align: center;">Pic Passion</hi></a></li><br>
                <li><a href="connexion.php">Connexion / Inscription</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Inscription</h1>
            <form action="FormInsc.php" method="POST">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
                <br>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
                <br>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="mot_de_passe">Mot de passe :</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
                <br>
                <label for="confirmer_mot_de_passe">Confirmer le mot de passe :</label>
                <input type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" required>
                <br>
                <button type="submit">S'inscrire</button>
            </form>
            
        </div>
        
    </div>
    <footer>
        <p>&copy; 2024 Pic Passion. Tous droits réservés.</p>
    </footer>
</body>
</html>
