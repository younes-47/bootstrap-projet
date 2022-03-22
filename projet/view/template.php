<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $titre ?></title>
</head>
<body>
        <!-- hna ghaykon code dyal header fixe -->
        <header class="header">
            <section class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <a href="../index.php">
                                <div class="main-logo">
                                    <img src="img/main-logo.png" alt="">
                                    <h2>Association</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="menu">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">acceuil</a></li>
                                    <li><a href="viewAboutUs.php">à propos de nous</a></li>
                                    <li><a href="viewCauses.php">causes</a></li>
                                    <li><a href="viewDonations.php">donations</a></li>
                                    <li><a href="viewContact.php">contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>

        <!-- hna ghaykon contenue li ghayb9a ytbadal ela hsab kola page -->
        <div id="contenu">
            <?= $contenu ?> 
        </div>



        <footer class="footer">
            <div class="footer_bottom">
                <p>KHOUBAZ & ASKLOU @ 2022 | Tous droits réservés </p>
            </div>
        </footer>

        
    
</body>
</html>