
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php 
if(isset($_SESSION['connected'])){//On check si la personne est connecté
    
    if($_SESSION['corporate_name_landlord']!=NULL){//Check si le nom de société est vide
        echo("Connecté en tant que ". $_SESSION['corporate_name_landlord'] ." ! (Société)");
        ?>


        <a class="text-decoration-none" href="profileLandlord.php">Modifier votre profil</a>
        <a class="text-decoration-none" href="logout.php">Déconnexion</a>
        <a class="text-decoration-none" href="profile.php">Modifier votre profil</a>
        
        
        <?php
    } else { //Sinon on dit bonjour au prénom
        echo("Connecté en tant que ". $_SESSION['surname_landlord'] ." !");//TODO : A faire pour le locataire aussi, éwé
    ?>
    
    
    <a class="text-decoration-none" href="logout.php">Déconnexion</a>

    

    <?php
   

}}else {
    ?>
    
    <a class="text-decoration-none" href="loginTenant.php">Connection locataires</a>
    <a class="text-decoration-none" href="loginLandlord.php">Connection propriétaires</a>

<?php } ?>
        
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h2 class="display-4">Bienvenue sur Iligi !</h2>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil quis impedit velit a explicabo, iste quisquam, at, voluptates adipisci vel neque nesciunt qui expedita! Perferendis voluptatum eligendi similique consequatur voluptatibus!</p>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <p class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex magnam ea asperiores ipsum totam, aliquam atque facilis, libero</p>
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="card">
            <div class="card-body">
                <img src="Assets/img/2b8b4313995737e29f938e99cc5eb9ff.jpg" alt="Mec meilleur" class="card-img-top">
                    <div class="card-title"><h5>Devenez meilleur</h5>
                    </div>
                    <div class="card-texte">
                        <p class="text-xl-right">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque quia perferendis omnis hic maxime quisquam ullam consectetur tempora voluptate minus? Obcaecati qui ipsum tempore numquam possimus hic velit repudiandae vitae.
                        </p>
                </div>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="Assets/img/1209_view.jpg" alt="truc moche" class="card-img-top">
                    <div class="card-title"><h5>Vous allez être trobo</h5></div>
                    <div class="card-text"><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A deserunt id accusamus corrupti vitae? Pariatur illum quod exercitationem nulla perferendis id, tempore, aperiam libero accusamus recusandae sit molestiae aliquid debitis!</p></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card">
            <div class="card-body">
            <img src="Assets/img/maison-de-ville-avec-piscine-a-bordeaux.jpg" alt="truc moche" class="card-img-top">
                    <div class="card-title"><h5>Mais genre vraiment</h5></div>
                    <div class="card-text"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, excepturi, reiciendis voluptatem id doloribus tenetur corrupti nulla molestiae voluptates et labore ea. Veritatis alias, aliquam dolore quia quae dolorem cupiditate?</p></div>
                </div>
            </div>
        </div>   
        
</div>
</div>
<br>


