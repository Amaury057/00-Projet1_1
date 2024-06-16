<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pic Passion</title>
    <link rel="stylesheet" href="../CSS/addequip.css">
    <script src="../js/form.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <div class="content">
                <section>
                    <h2>Ajouter Des Equipements</h2>
                    <br>
                    <form action="formequip.php" method="POST">
                        <label for="marques">Marques :</label>
                        <input type="text" id="marques" name="marques" required>
                        <br><br>
                        <label for="types">Types :</label>
                        <select name="types" id="types" onchange="SuppChaussons(),SuppCordes(),SupppCordes(),SuppPrix()">
                            <option value="">Selectionner</option>
                            <option value="cordes">Cordes</option>
                            <option value="chaussons">Chaussons</option>
                        </select>
                        <br><br>
                        <label for="tailles_chaussons" id="OptionChaussonsSupp" style="display: none;">Pointure :</label>
                        <input type="text" name="pointure" id="tailles_chaussons" style="display: none;">
                        <label for="tailles_cordes" id="OptionCordesSupp" style="display: none;">Longueur :</label>
                        <input type="text" name="tailles_cordes" id="tailles_cordes" placeholder="m" style="display: none;">
                        <label for="diametre_cordes" id="OptionCordesSuppp" style="display: none;">Diametre :</label>
                        <input type="text" name="diametre_cordes" id="diametre_cordes" placeholder="cm" style="display: none;">
                        <label for="prix" id="OptionPrixSupp" style="display: none;">Prix :</label>
                        <input type="text" name="prix" id="prix" placeholder="€" style="display: none;">
                        <br>
                        <button type="submit" class="btn retour-btn">Ajouter</button> 
                        <a href="equipement.php" class="btn retour-btn">Retour</a>
                    </form>
                </section>
            </div>
        </nav>
    </header>
</body>
</html>
