<?php

    require 'Views/Components/headerAdmin.php';

    require 'Models/Admin.php';

    $listTenants=getTenants();
    $listLandlords=getLandLords();

if(isset($_POST['delete_lease'])){
    deleteLease($_POST['lease_select']);
}
    if(isset($_POST['chose_landlord'])){
        
    }
    
   if (htmlspecialchars(isset($_POST['submit_file_common']))) {
    $fileExistsFlag = 0; 
    $fileNameAndPath = "../Assets/files/common/".$_FILES(['file_common']['name']);
    $fileName = $_FILES(['file_common']['name']);
    /* 
    *    Checking whether the file already exists in the destination folder 
    */
   
    $checkFileNameCommon = checkFileNameCommon($fileNameAndPath);
    foreach($checkFileNameCommon as $checkFileNameCommon) {
        if($checkFileNameCommon['file_dir_common'] == $fileNameAndPath) {
            $fileExistsFlag = true;
        }      
    }
    /*
    *     If file is not present in the destination folder
    */
    if($fileExistsFlag == false) { 
        $target = "../Assets/files/common/";       
        $fileTarget = $target.$fileName;    
        $tempFileName = $_FILES['file_common']['tmp_name'];
        if($_FILES['file_common']['size'] <= 2000000) {
            $result = move_uploaded_file($tempFileName,$fileTarget);
            /*
            *    If file was successfully uploaded in the destination folder
            */
            if($result) { 
                echo "<script>alert(\"Le fichier s'est correctement enregistré.\")</script>";        

                $_POST['fileNameAndPath'] = $fileNameAndPath;
                $addPictureToGalery = uploadFileCommon($_POST['fileNameAndPath']);           
            }
            else {            
                echo "<script>alert(\"Une erreur est survenue lors de l'upload de l'image. Veuillez réessayer.\")</script>";            
            }
        } else {
            echo "<script>alert(\"L'image chargé est trop lourde (2Mo max) ! Tenter de compresser l'image.\")</script>";
        }
    }
    /*
    *     If file is already present in the destination folder
    */
    else {
        echo "<script>alert(\"Le fichier existe déjà\")</script>";
    }    

}
    require 'Views/indexViewAdmin.php';

    require 'Views/Components/footerAdmin.php';
