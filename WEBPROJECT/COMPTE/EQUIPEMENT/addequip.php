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
                        <li><a href="/WEBPROJECT/HOME/home.php"><h1 style="text-align: center;">Pic Passion</hi></a></li><br>                      
                        <li><form action="../EQUIPEMENT/equipement.php">
                        <input class="retour" type="submit" value="Retour"></form></li>
                    </ul>
                </div>
                <div class="content">
                    <section>
                        <h2>Ajouter Des Equipements</h2>
                        <form action="formequip.php" method="POST">
                            <label for="types">Types :</label>
                            <select name="types" id="types" onchange="afficherOptionSupplementairechaussons()">
                                <option value="">Selectionner</option>
                                <option value="cordes">Cordes</option>
                                <option value="casques">Casques</option>
                                <option value="chaussons">Chaussons</option>
                                <option value="baudrier">Baudrier</option>
                            </select>
                            
                            <label for="tailles_chaussons" id="OptionChossonsSupp" style="display: none;">Taille :</label>
                            <select name="tailles_chaussons" id="tailles_chaussons" style="display: none;">
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                            </select>

                            <label for="tailles_cordes" id="OptionCordesSupp" style="display: none;">Taille :</label>
                            <select name="tailles_cordes" id="tailles_cordes" style="display: none;">
                                <input type="number" id="cordes" name="cordes"require>
                            </select>
                            
                            <!--<br>
                            <label for="marques">Marques :</label>
                            <input type="text" id="marques" name="marques" required>
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
                            <button type="submit">Ajouter</button>-->
                        </form>

                        <script>
                        function afficherOptionSupplementairechaussons() {
                            var selectBox = document.getElementById("types");
                            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
                            var taillesChaussons = document.getElementById("tailles_chaussons");
                            var OptionChossonsSupp = document.getElementById("OptionChossonsSupp");

                            if (selectedValue === "chaussons") {
                                taillesChaussons.style.display = "block";
                                OptionChossonsSupp.style.display = "block";
                            } else {
                                taillesChaussons.style.display = "none";
                                OptionChossonsSupp.style.display = "none";
                            }
                        }
                        </script>


                        </section>
                    <section>
                        
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
