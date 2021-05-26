

<?php 

if(isset($_SESSION['connected'])) {
    echo("Bonjour à toi ". $_SESSION['name'] ." !");
    ?>
    <a href="logout.php">Déconnexion</a>

    <a href="profile.php">Modifier votre profil</a>

    <?php
} else {
    ?>
    <a href="login.php">Connection locataires</a>
    <br>
    <br>
    <a href="loginLandlord.php">Connection propriétaires</a>
    <?php
}
?>

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

    <p>prénom : <?php echo $listUser['surname_tenant']; ?></p>
    
    <p>Nom : <?php echo $listUser['name_tenant'];?></p>
    <br><br>

<?php } ?>




