

<?php 

if(isset($_SESSION['connected'])) {
    echo("Bonjour à toi ". $_SESSION['surname_tenant'] ." !");
    ?>
    <a href="logout.php">Déconnexion</a>

    <a href="profileTenant.php">Modifier votre profil</a>

    <?php
} else {
    ?>
    <a href="loginTenant.php">Connection locataires</a>
    <br>
    <br>
    <a href="loginLandlord.php">Connection propriétaires</a>
    <?php
}
?>
<h3>Ceci est la page des locataires</h3>
<br>
<form action="indexTenant.php" method="post" enctype="multipart/form-data">
 <label for="files_tenant">Ajouter une pièce d'identité :</label>
  <input type="file"  name="file_tenant"> <!-- input case du fichier à charger -->
  <input type="submit" name="submit_file"> <!-- Bouton ok -->
</form>
<br>
<form action="indexTenant.php" method="post" enctype="multipart/form-data">
 <label for="files_tenant">Ajouter votre état des lieux :</label>
  <input type="file"  name="file_tenant"> <!-- input case du fichier à charger -->
  <input type="submit" name="submit_file"> <!-- Bouton ok -->
</form>
<br>





