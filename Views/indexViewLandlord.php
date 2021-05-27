

<?php 

if(isset($_SESSION['connected'])) {
    echo("Bonjour à toi ". $_SESSION['surname_landlord'] ." !");
    ?>
    <a href="logout.php">Déconnexion</a>

    <a href="profile.php">Modifier votre profil</a>

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
<h3>Ceci est la page des propriétaires</h3>
<!-- truc pour faire dl un fichier

TODO : le link à la db pour le stocker 

-->
<form action="/action_page.php">
  <input type="file" id="myFile" name="filename">
  <input type="submit">
</form>


<?php
foreach($listUsers->fetchAll() as $listUser) {
?> 

    <p>prénom : <?php echo $listUser['surname_landlord']; ?></p>
    
    <p>Nom : <?php echo $listUser['name_landlord'];?></p>
    <br><br>

<?php } ?>




