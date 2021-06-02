<?php
require 'Views/Components/header.php';

require 'Models/IndexTenant.php';

if (htmlspecialchars(isset($_POST['submit_file']))) {
    $fileExistsFlag = 0; 
    $fileNameAndPath = "Assets/files/tenant/".$_FILES['file_tenant']['name'];
    $fileName = $_FILES['file_tenant']['name'];
    /* 
    *    Checking whether the file already exists in the destination folder 
    */
   
    $checkFileNameTenant = checkFileNameTenant($fileNameAndPath);
    foreach($checkFileNameTenant as $checkFileNameTenant) {
        if($checkFileNameTenant['file_dir'] == $fileNameAndPath) {
            $fileExistsFlag = true;
        }      
    }
    /*
    *     If file is not present in the destination folder
    */
    if($fileExistsFlag == false) { 
        $target = "Assets/files/tenant/";       
        $fileTarget = $target.$fileName;    
        $tempFileName = $_FILES['file_tenant']['tmp_name'];
        if($_FILES['file_tenant']['size'] <= 2000000) {
            $result = move_uploaded_file($tempFileName,$fileTarget);
            /*
            *    If file was successfully uploaded in the destination folder
            */
            if($result) { 
                echo "<script>alert(\"Le fichier s'est correctement enregistré.\")</script>";        

                $_POST['fileNameAndPath'] = $fileNameAndPath;
                $addPictureToGalery = uploadFileTenant(($_POST['fileNameAndPath']),($_SESSION['id']));           
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



 
require 'Views/indexViewTenant.php';
require 'Views/Components/footer.php';
?>