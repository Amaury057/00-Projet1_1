<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Pic Passion</title>
 <!-- slider stylesheet -->
 <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" /></head>

<body>
    <div class="container">
        
        <a><h1 style="text-align: center;">Pic Passion</hi></a>                
            
    <section class="contact_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Let's Get In Touch!
                </h2>
            </div>
        </div>
      <div class="container contact_bg layout_padding2-top" style="padding-left: 25%; padding-right:25%; width:50%">
        <div class="row">
          <div class="col-md-6">
            <div class="contact_form">
              <form action="FormCon.php" method="POST">
                <h1>Connexion</h1>
                <input type="email" id="mail" name="mail" required placeholder="Mail ">
                <input type="password" id="mdp" name="mdp" required placeholder="Mot de Passe ">
                <button type="submit">Connexion</button>
              </form>        
            </div>    
            <div class="contact_form">
              <form action="FormInsc.php" method="POST"> 
                <h1>Inscription</h1>
                <input type="text" id="nom" name="nom" required placeholder="Nom ">
                <input type="text" id="prenom" name="prenom" required placeholder="Prénom">
                <input type="email" id="mail" name="mail" required placeholder="mail ">
                <input type="password" id="mdp" name="mdp" required placeholder="Mot de Passe ">
                <input type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" required placeholder="Confirmer Votre Mot de Passe ">
                <button type="submit">S'inscrire</button> 
              </form>
            </div>
          </div>
        <div class="col-md-6">
            <div class="img-box">
              <img src="images/contact-img.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
        

    </div>
    <footer>
        <p>&copy; 2024 Pic Passion. Tous droits réservés.</p>
    </footer>
</body>

</html>