

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
<?php foreach ($listLeasesTenants->fetchAll() as $listLeasesTenant) { ?>
            <?php
  
            $getPathLease = substr($listLeasesTenant['file_dir_common'], 3); //Removing the ../ because I uploaded it from /Admin

            echo("<embed src=\"".$getPathLease."#notoolbar\" type=\"application/pdf\" width=\"400\" height=\"400\">");

          }
        ?>
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





