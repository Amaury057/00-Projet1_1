<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pic Passion</title>
    <link rel="stylesheet" href="../CSS/addequip.css">
    <script src="../js/form.js"></script>
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="content">
                    <section>
                        <h2>Ajouter Des Equipements</h2>
                        <form action="formequip.php" method="POST">
                            <label for="marques">Marques :</label>
                            <input type="text" id="marques" name="marques" required>
                            <br>

                            <label for="types">Types :</label>

                            <select name="types" id="types" onchange="SuppChaussons(),SuppCordes(),SupppCordes()">
                                <option value="">Selectionner</option>
                                <option value="cordes">Cordes</option>
                                <option value="casques">Casques</option>
                                <option value="chaussons">Chaussons</option>
                                <option value="baudrier">Baudrier</option>
                            </select>

                            <label for="tailles_chaussons" id="OptionChaussonsSupp" style="display: none;">Pointure :</label>
                            <input type="text" name="tailles_chaussons" id="tailles_chaussons" placeholder="m" style="display: none;">

                            <label for="tailles_cordes" id="OptionCordesSupp" style="display: none;">Longueur :</label>
                            <input type="text" name="tailles_cordes" id="tailles_cordes" placeholder="m" style="display: none;">

                            <label for="diametre_cordes" id="OptionCordesSuppp" style="display: none;">Diametre :</label>
                            <input type="text" name="diametre_cordes" id="diametre_cordes" placeholder="cm" style="display: none;">


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
                            <br>-->
                            <button type="submit">Ajouter</button>
                        </form>




                    </section>
                    <section>

                    </section>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>