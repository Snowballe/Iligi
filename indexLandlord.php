<?php
require 'Views/Components/header.php';

require 'Models/IndexLandlord.php';

if (isset($_SESSION['connected'])) { //Display leases & id pieces 
    $listLeasesLandlords = getLeaseLandlord($_SESSION['id_landlord']);
    $listIdentityPiecesLandlords = getIdPiecesLandlord($_SESSION['id_landlord']);
}


if(isset($_POST['delete_all_id_pieces'])){
    
    $paths=getPathToUnlink($_SESSION['id_landlord']);
    
    foreach($paths->fetchAll() as $path){
        unlink($path['file_dir_landlord']);
    }
    
    deleteAllIdPieces($_SESSION['id_landlord']);
    resetFileCounter($_SESSION['id_landlord']);
    
   // header('Location: '.$_SERVER['REQUEST_URI']);
    
    echo("<script>alert(\"Vos pièces d'identités ont bien été supprimés.\")</script>");
}

/*if(isset($_POST['delete_id_piece'])){
    unlink($_POST['idPieceLandlord']);
}*/

if (htmlspecialchars(isset($_POST['submit_file']))) {
    $fileExistsFlag = false;

    //Check if it is PDF indeed
    if (substr($_FILES['file_landlord']['name'], -3) != "pdf") {
        echo ("<script>alert(\"Fichier non enregistré car le format ne correspond pas\")</script>");
        //header('Location: '.$_SERVER['REQUEST_URI']);
    }

    $fileNameAndPath = "Assets/files/landlord/" . $_FILES['file_landlord']['name'];
    $fileName = $_FILES['file_landlord']['name'];
    /* 
    *    Checking whether the file already exists in the destination folder 
    */

    $checkFileNameLandlords = checkFileNameLandlord($fileNameAndPath, $_SESSION['id_landlord']);

    foreach ($checkFileNameLandlords->fetchAll() as $checkFileNameLandlord) {

        if ($checkFileNameLandlord['id_uploading_landlord'] == $_SESSION['id_landlord']) {

            if ($checkFileNameLandlord['file_dir_landlord'] == $fileNameAndPath) {
                $fileExistsFlag = true;
            }
        }
    }
    /*
    *     If file is not present in the destination folder
    */
    $checkNbFilesUp = checkBeforeIncrement($_SESSION['id_landlord']);
    $currentNbOfFiles=$checkNbFilesUp->fetchAll();
    $AAAAAAAAAAAcurrentNbOfFiles=$currentNbOfFiles['nb_files_uploaded_landlord'];

    if ($AAAAAAAAAAAcurrentNbOfFiles > 7) {//Maximum cap for uploading files(6 files maximum) (initialized at 1 so it isn't null)
        echo "<script>alert(\"Vous avez atteint votre nombre de mises en ligne maximum.\")</script>";


    } else {
        if ($fileExistsFlag == false) {
            $target = "Assets/files/landlord/";
            $fileTarget = $target . $fileName;
            $tempFileName = $_FILES['file_landlord']['tmp_name'];
            if ($_FILES['file_landlord']['size'] <= 2000000) {

                $IncrementFileUp = incrementFileUploadNbLandlord($_SESSION['id_landlord']);

                $result = move_uploaded_file($tempFileName, $fileTarget);
                /*
            *    If file was successfully uploaded in the destination folder
            */
                if ($result) {
                    echo "<script>alert(\"Le fichier s'est correctement enregistré.\")</script>";
                    //header('Location: '.$_SERVER['REQUEST_URI']);//Refresh to display the new added pdf, will work for now.
                    $_POST['fileNameAndPath'] = $fileNameAndPath;
                    $addPictureToGalery = uploadFileLandlord(($_POST['fileNameAndPath']), ($_SESSION['id_landlord']));
                } else {
                    echo "<script>alert(\"Une erreur est survenue lors de l'upload de l'image. Veuillez réessayer.\")</script>";
                }
            } else {
                echo "<script>alert(\"L'image chargé est trop lourde (2Mo max) ! Tenter de compresser l'image.\")</script>";
            }
        }
        /*
    *     If file is already present in the destination folder
    */ else {
            echo "<script>alert(\"Le fichier existe déjà\")</script>";
        }
    }
}


require 'Views/indexViewLandlord.php';
require 'Views/Components/footer.php';
