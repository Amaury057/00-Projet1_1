<!DOCTYPE html>
<html>

<head>
    <!-- Metas et liens vers les feuilles de style CSS -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Inventaire - Fregg</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="../CSS/addequip.css">

    <style>
        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .page-title {
            margin-left: 275px;
        }
    </style>
</head>

<body>
    <div class="hero_area_1">
        <!-- Barre de navigation -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand mr-5" href="../index.html">
                        <!--<img src="images/logo.png" alt="">-->
                        <span>
                            Pic Passion
                        </span>
                    </a>
                    <a class="navbar-brand mr-5">
                        <span class="page-title">
                            MES EQUIPEMENTS
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item">
                                    <a id="ajoutEquipement" class="nav-link" href="#">Ajouter un équipement</a>
                                </li>
                                <!-- Les autres liens de la barre de navigation -->
                            </ul>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Contenu de la page d'inventaire -->
        <section class="inventaire_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="custom-table">
                        <!-- Code PHP pour récupérer et afficher les équipements -->
                        <?php include 'table.php'; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal pour la modification d'équipement -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Modifier l'équipement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    <!-- Contenu du formulaire de modification chargé dynamiquement -->
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts JavaScript -->
    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/form.js"></script>
    <script type="text/javascript" src="../js/table.js"></script>

</body>

</html>
