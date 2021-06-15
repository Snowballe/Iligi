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
        <a class="btn btn-outline-primary" href="loginTenant.php">Connection locataires</a>
        <a class="btn btn-outline-info" href="loginLandlord.php">Connection propriétaires</a>
    <?php
}
//Success -----------------------------------
if (isset($_GET['fullDelSuccess'])) {
    ?>
        <p style="color: green;">Vos pièces d'identités ont bien été supprimés.</p>
    <?php
}

if (isset($_GET['singleDelIdSuccess'])) {
    ?>
        <p style="color: green;">Votre pièce d'identité a bien été supprimé.</p>
    <?php
}

if (isset($_GET['fileSaved'])) {
    ?>
        <p style="color: green;">Le fichier s'est correctement enregistré.</p>
    <?php

}

//------------------------------------------


//Errors -----------------------------------
if (isset($_GET['wrongFormat'])) {
    ?>
        <p style="color: red;">Fichier non enregistré car le format ne correspond pas (format PDF obligatoire)</p>
    <?php

}

if (isset($_GET['fileOverflow'])) {
    ?>
        <p style="color: red;">Vous avez atteint la limite de mises en ligne maximum.</p>
    <?php

}

if (isset($_GET['ErrorUpload'])) {
    ?>
        <p style="color: red;">Une erreur est survenue lors de la mise en ligne du fichier.</p>
    <?php

}

if (isset($_GET['fileTooLarge'])) {
    ?>
        <p style="color: red;">Le fichier chargé est trop lourd (2Mo max) ! Tentez de le compresser.</p>
    <?php

}

if (isset($_GET['fileAlreadyExisting'])) {
    ?>
        <p style="color: red;">Le fichier existe déjà.</p>
    <?php

}
//--------------------------------------------
    ?>

    <div class="row my-3 justify-content-center">
        <div class="col-12">

            <div class="card">
                <div class="card-header justify-content-between">
                    <h5>Mes pièces d'identités</h5>
                    <form action="indexLandlord.php" method="post"><input type="submit" name="delete_all_id_pieces" value="Supprimer toutes mes pièces d'identités" class="btn btn-danger"></form>
                </div>
                <div class="card-body">
                    <?php foreach ($listIdentityPiecesLandlords->fetchAll() as $listIdentityPiecesLandlord) {

                        echo ("<form action=\"indexLandlord.php\" method=\"post\"><div class=\"row\"><embed name=\"idPieceLandlord\" src=\"" . $listIdentityPiecesLandlord['file_dir_landlord'] . "\" type=\"application/pdf\" width=\"400\" height=\"400\"><div class=\" d-grid gap-2\"><input type=\"hidden\" value=\"". $listIdentityPiecesLandlord['id_files_landlords']."\" name=\"id_nb_file_landlord\"><input type=\"submit\" class=\"btn btn-dark\" name=\"delete_id_piece\" value=\"Supprimer cette pièce\"></form></div></div>");
                    } ?>
                </div>
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
                        <!-- signe danger --> Si votre bail ne s'affiche pas, contactez <a href="mailto:contact@iligi.fr?subject=Bail non reçu">Iligi par mail</a> ou au 0606060606
                    </p>
                </div>
            </div>
        </div>
    </div>
    </form>


        </div>