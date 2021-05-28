

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
<h3>Ceci est la page des propriétaires</h3>
<!-- truc pour faire dl un fichier

TODO : le link à la db pour le stocker 
-->
<br>
<form action="indexLandlord.php" method="post" enctype="multipart/form-data">
 <label for="files_landlord">Ajouter une pièce d'identité :</label>
  <input type="file"  name="files_landlord"> <!-- input case du fichier à charger -->
  <input type="submit" name="submit"> <!-- Bouton ok -->
</form>
<br>



