<?php
if (isset($_SESSION['connected'])) { //On check si la personne est connecté

    if ($_SESSION['corporate_name_landlord'] != NULL) { //Check si le nom de société n'est pas vide
        echo ("Bonjour à vous " . $_SESSION['corporate_name_landlord'] . " !");
?>
        <a href="logout.php">Déconnexion</a>
        <a href="profileLandlord.php">Modifier votre profil</a>
    <?php
    } else { //Sinon on dit bonjour au prénom
        echo ("Bonjour à toi " . $_SESSION['surname_landlord'] . " !");
    ?>
        <a href="logout.php">Déconnexion</a>

        <a href="profileLandlord.php">Modifier votre profil</a>

    <?php
    }
} else {
    ?>
    <a href="loginTenant.php">Connection locataires</a>
    <br>
    <br>
    <a href="loginLandlord.php">Connection propriétaires</a>
<?php
}
?>
<h3>Ceci est la page des propriétaires</h3>

<br>
<form action="indexLandlord.php" method="post" enctype="multipart/form-data">
    <label for="files_landlord">Ajouter une pièce d'identité :</label>
    <input type="file" name="file_landlord"> <!-- input case du fichier à charger -->
    <input type="submit" name="submit_file"> <!-- Bouton ok -->
</form>
<br>