

<?php 
if(isset($_SESSION['connected'])){//On check si trucmuch est connecté
    
    if($_SESSION['corporate_name_landlord']!=NULL){//Check si le nom de société est vide
        echo("Bonjour à vous ". $_SESSION['corporate_name_landlord'] ." !");
        ?>
        <a href="logout.php">Déconnexion</a>
        <a href="profile.php">Modifier votre profil</a>
        <?php
    } else { //Sinon on dit bonjour au prénom
        echo("Bonjour à toi ". $_SESSION['surname_landlord'] ." !");
    ?>
    <a href="logout.php">Déconnexion</a>

    <a href="profile.php">Modifier votre profil</a>

    <?php
    }

}else {
    ?>
    <a href="loginTenant.php">Connection locataires</a>
    <br>
    <br>
    <a href="loginLandlord.php">Connection propriétaires</a>
    <?php
}
?>
<h3>Ceci est la page d'accueil par défaut du site</h3>


<!-- Boucle for pour afficher les users (locataires)
<?php
//foreach($listUsers->fetchAll() as $listUser) {
?> 

    <p>prénom : <?php //echo $listUser['surname_tenant']; ?></p>
    
    <p>Nom : <?php //echo $listUser['name_tenant'];?></p>
    <br><br>

<?php //} ?>
-->



