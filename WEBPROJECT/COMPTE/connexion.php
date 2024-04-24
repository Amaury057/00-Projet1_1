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
                <li><a><h1 style="text-align: center;">Pic Passion</hi></a></li><br>                
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
                <label for="mail">Email :</label>
                <input type="email" id="mail" name="mail" required>
                <br>
                <label for="mdp">Mot de passe :</label>
                <input type="password" id="mdp" name="mdp" required>
                <br>
                <label for="confirmer_mot_de_passe">Confirmer le mot de passe :</label>
                <input type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" required>
                <br>
                <button type="submit">S'inscrire</button>
            </form>

        </div>

        <div class="content">
            <h1>Inscription</h1>
            <form action="FormCon.php" method="POST">
                <label for="mail">Email :</label>
                <input type="email" id="mail" name="mail" required>
                <br>
                <label for="mdp">Mot de passe :</label>
                <input type="password" id="mdp" name="mdp" required>
                <br>
                <button type="submit">Connexion</button>
            </form>

        </div>

    </div>
    <footer>
        <p>&copy; 2024 Pic Passion. Tous droits réservés.</p>
    </footer>
</body>

</html>