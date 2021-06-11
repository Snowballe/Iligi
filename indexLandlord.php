<?php
require 'Views/Components/header.php';

require 'Models/IndexLandlord.php';

if (isset($_SESSION['connected'])) {//Display leases & id pieces 
    $listLeasesLandlords = getLeaseLandlord($_SESSION['id_landlord']);
    $listIdentityPiecesLandlords= getIdPiecesLandlord($_SESSION['id_landlord']);
}

/*if(isset($_POST['delete_id_piece'])){
    unlink($_POST['idPieceLandlord']);
}*/

if (htmlspecialchars(isset($_POST['submit_file']))) {
    $fileExistsFlag = false;

    //Check if it is PDF indeed
    if(substr($_FILES['file_landlord']['name'],-3)!="pdf"){
        echo("<script>alert(\"Fichier non enregistré car le format ne correspond pas\")</script>");
        header('Location: index.php');
    }

    $fileNameAndPath = "Assets/files/landlord/" . $_FILES['file_landlord']['name'];
    $fileName = $_FILES['file_landlord']['name'];
    /* 
    *    Checking whether the file already exists in the destination folder 
    */

    $checkFileNameLandlords = checkFileNameLandlord($fileNameAndPath, $_SESSION['id_landlord']);
 
    foreach ($checkFileNameLandlords->fetchAll() as $checkFileNameLandlord) {

        if ($checkFileNameLandlord['file_dir_landlord'] && $checkFileNameLandlord['id_uploading_landlord'] == $fileNameAndPath && $_SESSION['id_landlord']) {
            $fileExistsFlag = true;
        }
    }
    /*
    *     If file is not present in the destination folder
    */
    if ($fileExistsFlag == false) {
        $target = "Assets/files/landlord/";
        $fileTarget = $target . $fileName;
        $tempFileName = $_FILES['file_landlord']['tmp_name'];
        if ($_FILES['file_landlord']['size'] <= 2000000) {
            $result = move_uploaded_file($tempFileName, $fileTarget);
            /*
            *    If file was successfully uploaded in the destination folder
            */
            if ($result) {
                echo "<script>alert(\"Le fichier s'est correctement enregistré.\")</script>";

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


require 'Views/indexViewLandlord.php';
require 'Views/Components/footer.php';
