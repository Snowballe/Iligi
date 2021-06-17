<?php

require 'Views/Components/headerAdmin.php';

require 'Models/Admin.php';

$listTenants = getTenants();
$listLandlords = getLandLords();
$userNotices=getNotice();
//============================================ TODO = faire apparaitre le texte de la notice DANS la case, comme ça si on veut corriger quelque chose on met pas 3 plombes.
if(isset($_POST['change_user_notice'])){//===================================================
    changeUserNotice($_POST['change_notice']);//================================================
}

//-------------------------------------------------------------------------
// ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓ ↓
//File Upload

if (htmlspecialchars(isset($_POST['submit_file_common']))) {
    
    $lanlordNameId = $_POST['landlord_chosen']; //On prend le contenu de la case du loc/proprio choisi
    $tenantNameId = $_POST['tenant_chosen'];

    $lanlordId = (int) filter_var($lanlordNameId, FILTER_SANITIZE_NUMBER_INT);//Vu je j'affiche l'ID, je le filtre pour avoir juste le nombre
    $tenantId = (int) filter_var($tenantNameId, FILTER_SANITIZE_NUMBER_INT);// et je réserve pour l'appel de fonction de upload
    
    //Pour le coup c'est le truc qui se rapproche le plus du spaghetti code, il y a surement une meilleure implémentation mais je suis pas assez bon,
    // Et j'ai pas forcément envie de passer plus de temps que ça sur l'admin panel, plus faudrait que je donne un accès aux pages aussi, on verra

    $fileExistsFlag = 0;
    $fileNameAndPath = "../Assets/files/common/" .$_FILES['file_common']['name'];
    $fileName = $_FILES['file_common']['name'];
    /* 
    *    Checking whether the file already exists in the destination folder 
    */

    $checkFileNameCommon = checkFileNameCommon($fileNameAndPath);
    foreach ($checkFileNameCommon as $checkFileNameCommon) {
        if ($checkFileNameCommon['file_dir_common'] == $fileNameAndPath) {
            $fileExistsFlag = true;
        }
    }
    /*
    *     If file is not present in the destination folder
    */
    if ($fileExistsFlag == false) {
        $target = "../Assets/files/common/";
        $fileTarget = $target . $fileName;
        $tempFileName = $_FILES['file_common']['tmp_name'];
        if ($_FILES['file_common']['size'] <= 2000000) {
            $result = move_uploaded_file($tempFileName, $fileTarget);
            /*
            *    If file was successfully uploaded in the destination folder
            */
            if ($result) {
                echo "<script>alert(\"Le fichier s'est correctement enregistré.\")</script>";

                $_POST['fileNameAndPath'] = $fileNameAndPath;
                $addPictureToGalery = uploadFileCommon($_POST['fileNameAndPath'], $tenantId, $lanlordId);
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
require 'Views/indexViewAdmin.php';

require 'Views/Components/footerAdmin.php';
