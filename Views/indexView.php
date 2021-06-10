<div style="background-image: url(Assets/img/logscreenchill2.jpg); background:cover;">
    <div class="container" >
        <div class="row justify-content-end my-3 mx-5">
            <div class="col-auto">
                <?php
                /*==========================================================================
            ===
            ===         TODO: Faire un msg de bienvenue pour les propriétaires sur la page d'accueil de BASE, je saisa pas comment faire pour l'instant
            ===
            ============================================================================
        
            
            if (isset($_SESSION['connected'])) { //On check si la personne est connecté

                //if (isset($_POST['surname_landlord'])) { // Check if it is a landlord or a tenant

                    if ($_SESSION['corporate_name_landlord'] != NULL) { //Check si le nom de société est vide
                        
                        echo ("<div class=\"p-3 border bg-light\">Connecté en tant que " . $_SESSION['corporate_name_landlord'] . " ! (Société)</div>");
                        ?><a class="text-decoration-none btn " style="background-color:#DECBB7;" href="profileLandlord.php">Modifier votre profil</a>
                        <a class="text-decoration-none btn btn-dark" style="background-color: #433633;float:right;" href="logout.php">Déconnexion</a><?php

                    } 
                    
                    else { //Sinon on dit bonjour au prénom
                        
                        echo ("<input class=\"form-control\" type=\"text\" placeholder=\"Connecté en tant que " . $_SESSION['surname_landlord'] . " ! \"aria-label=\"readonly input example\" readonly>");
                        ?><a class="text-decoration-none btn " style="background-color:#DECBB7;" href="profileLandlord.php">Modifier votre profil</a>
                        <a class="text-decoration-none btn btn-dark" style="background-color: #433633;float:right;" href="logout.php">Déconnexion</a> </div><?php
                        
                    }
                //}

                if (isset($_POST['surname_tenant'])) {
                    
                    echo ("<input class=\"form-control\" type=\"text\" placeholder=\"Connecté en tant que " . $_SESSION['surname_tenant'] . " !\" aria-label=\"readonly input example\" readonly>");
                    ?>
                    <a class="text-decoration-none btn" style="background-color: #DECBB7;" href="profileTenant.php">Modifier votre profil</a>
                    <a class="text-decoration-none btn btn-dark" style="background-color: #433633;" href="logout.php">Déconnexion</a>
                <?php*/


                //}
                //}
                if (isset($_SESSION['connected'])) { //On check si la personne est connecté
                } else {
                ?>

                    <a class="text-decoration-none btn btn-primary" href="loginTenant.php">Connection locataires</a>
                    <a class="text-decoration-none btn btn-primary" href="loginLandlord.php">Connection propriétaires</a>

                <?php } ?>

            </div>
        </div>
    </div>




    <div class="container">
        <div class="row">
            <div class="col">
                <!-- <div class="alert alert-info alert-dismissible fade show" role="alert"> 

                <h5 class="alert-heading">Prérequis :</h5>
                <p>Bases en CSS. Si vous ne les maîtrisez pas, suivez ce cours : <a class="alert-link" href="#">Apprenez à créer votre site web avec HTML5 et CSS3</a></p>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>

            </div>
             TODO : Carousel donné dans la doc ne marche pas, celui-ci marche mais n'est pas très bô -->


                <div id="carouselControls" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Assets/img/apprenant.jpg" class="d-block w-100" alt="apprenant">
                        </div>
                        <div class="carousel-item">
                            <img src="Assets/img/apprenant2.jpg" class="d-block w-100" alt="Apprenant">
                        </div>
                    </div>
                    <a class="carousel-control-prev btn-primary text-decoration-none" href="#carouselControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précédent</span>
                    </a>
                    <a class="carousel-control-next btn-primary text-decoration-none" href="#carouselControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only ">Suivant</span>
                    </a>
                </div>
            </div>

            <p class="fst-italic align-text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex magnam ea asperiores ipsum totam, aliquam atque facilis, libero</p>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <img src="Assets/img/2b8b4313995737e29f938e99cc5eb9ff.jpg" alt="Mec meilleur" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Devenez meilleur</h5>
                        </div>
                        <div class="card-texte">
                            <p class="text-xl-right">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque quia perferendis omnis hic maxime quisquam ullam consectetur tempora voluptate minus? Obcaecati qui ipsum tempore numquam possimus hic velit repudiandae vitae.
                            </p>
                            <a class="btn btn-primary stretched-link" href="#" role="button">Owi</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-6">
                <div class="card">
                    <img src="Assets/img/maison-de-ville-avec-piscine-a-bordeaux.jpg" alt="truc moche" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Mais genre vraiment</h5>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, excepturi, reiciendis voluptatem id doloribus tenetur corrupti nulla molestiae voluptates et labore ea. Veritatis alias, aliquam dolore quia quae dolorem cupiditate?</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>