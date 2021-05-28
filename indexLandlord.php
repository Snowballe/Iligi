<?php
require 'Views/Components/header.php';

require 'Models/IndexLandlord.php';

if(isset($_POST["submit"])&& isset($_FILES["files_landlord"])){
 echo "<pre>";
 print_r($_FILES["files_landlord"]);
 echo"</pre>";
 
    $file_name=$_FILES["files_landlord"]['name'];
    $file_size=$_FILES["files_landlord"]['size'];
    $file_tmpname=$_FILES["files_landlord"]['tmp_name'];
    $error=$_FILES["files_landlord"]['error'];

    if($error==0){
        if($file_size>999999){
            $em="Fichier trop volumineux, veuillez réessayer.";
            header("Location: indexLandlord.php?error=$em");
        }

    } else{
        echo"Fichier envoyé !";
    }
    
}

 
require 'Views/indexViewLandlord.php';
require 'Views/Components/footer.php';
?>