<?php
if (isset($_SESSION['connected'])) { //On check si la personne est connecté

    if ($_SESSION['corporate_name_landlord'] != NULL) { //Check si le nom de société n'est pas vide
        echo ("<div class=\"container\"><div class=\"row justify-content-end\"><div class=\"col-auto\">Bonjour à vous " . $_SESSION['corporate_name_landlord'] . "!");
?>

        <a class="btn btn-info " href="logout.php">Déconnexion</a>
        <a class="btn btn-outline-secondary" href="profileLandlord.php">Modifier votre profil</a>
        </div>
        </div>
    <?php
    } else { //Sinon on dit bonjour au prénom
        echo ("<div class=\"container\"Bonjour à toi " . $_SESSION['surname_landlord'] . " !");
    ?>
        <div class="container">
            <a href="logout.php">Déconnexion</a>

            <a href="profileLandlord.php">Modifier votre profil</a>

        <?php
    }
} else {
        ?>
        <a href="loginTenant.php">Connection locataires</a>
        <a href="loginLandlord.php">Connection propriétaires</a>
    <?php
}
    ?>
    <div class="row my-3 justify-content-center">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h5>Mes pièces d'identités</h5>
                    <form action="indexLandlord.php" method="post"><input  type="submit" name="delete_all_id_pieces" value="Supprimer toutes mes pièces d'identités" class="btn btn-danger text-end"></form>
                </div>
                <div class="card-body">
                    <?php foreach ($listIdentityPiecesLandlords->fetchAll() as $listIdentityPiecesLandlord) {

                        echo ("<div class=\"row\"><embed name=\"idPieceLandlord\" src=\"" . $listIdentityPiecesLandlord['file_dir_landlord'] . "\" type=\"application/pdf\" width=\"400\" height=\"400\"><form action=\"del_id_piece_landlord\" method=\"post\"><input type=\"submit\" class=\"btn btn-dark\" name=\"delete_id_piece\" value=\"Supprimer cette pièce\"></form></div>");
                    } ?>
                </div>
                <!-- <form action=\"indexLandlord.php\" method=\"post\">... <input type=\"submit\" value=\"Supprimer\" name=\"delete_id_piece\"></form>-->
                <div class="card-footer">
                    <form action="indexLandlord.php" method="post" enctype="multipart/form-data">
                        <input type="file" accept="application/pdf" class="form-control" name="file_landlord"> <!-- input case du fichier à charger -->
                        <input type="submit" class="btn btn-primary form-control" value="Ajouter une pièce d'identité (Format PDF obligatoire)" name="submit_file"> <!-- Bouton ok -->
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="row mb-3 justify-content-center">
        <div class="col-auto">
            <div class="card">
                <h5 class="card-header">Mes baux | Mes mandats</h5>
                <div class="card-body">
                    <?php foreach ($listLeasesLandlords->fetchAll() as $listLeasesLandlord) {

                        $getPathLease = substr($listLeasesLandlord['file_dir_common'], 3); //Removing the ../ because I uploaded it from /Admin

                        echo ("<embed src=\"" . $getPathLease . "\" type=\"application/pdf\" width=\"400\" height=\"400\">");
                    } ?>

                </div>
                <div class="card-footer">
                    <p class="mt-2">&#9888;
                        <!-- signe danger --> Si votre bail ne s'affiche pas, contactez <a href="mailto:contact@iligi.fr?subject=Bail non reçu&body=Bonjour,">Iligi par mail</a> ou au 0606060606
                    </p>
                </div>
            </div>
        </div>
    </div>
    </form>


        </div>