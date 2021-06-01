<?php
require 'Views/Components/header.php';

require 'Models/IndexLandlord.php';


if (htmlspecialchars(isset($_POST['submit_file']))) {
    $fileExistsFlag = 0; 
    $fileNameAndPath = "Assets/files/landlord/".$_FILES['file_landlord']['name'];
    $fileName = $_FILES['file_landlord']['name'];
    /* 
    *    Checking whether the file already exists in the destination folder 
    */
   
    $checkFileNameLandlord = checkFileNameLandlord($fileNameAndPath);
    foreach($checkFileNameLandlord as $checkFileNameLandlord) {
        if($checkFileNameLandlord['file_dir_landlord'] == $fileNameAndPath) {
            $fileExistsFlag = true;
        }      
    }
    /*
    *     If file is not present in the destination folder
    */
    if($fileExistsFlag == false) { 
        $target = "Assets/files/landlord/";       
        $fileTarget = $target.$fileName;    
        $tempFileName = $_FILES['file_landlord']['tmp_name'];
        if($_FILES['file_landlord']['size'] <= 2000000) {
            $result = move_uploaded_file($tempFileName,$fileTarget);
            /*
            *    If file was successfully uploaded in the destination folder
            */
            if($result) { 
                echo "<script>alert(\"Le fichier s'est correctement enregistré.\")</script>";        

                $_POST['fileNameAndPath'] = $fileNameAndPath;
                $addPictureToGalery = uploadFileLandlord(($_POST['fileNameAndPath']),($_SESSION['id_landlord']));           
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
 

require 'Views/indexViewLandlord.php';
require 'Views/Components/footer.php';
?>