<?php

require 'Views/Components/header.php';

require 'Models/RegistrationLandlord.php';

if(isset($_POST["submit"])){
    if(isset($_POST["surname_landlord"]) && isset($_POST["name_landlord"]) && isset($_POST["corporate_name_landlord"]) && isset($_POST["email_landlord"]) && isset($_POST["password_landlord"]) && isset($_POST["tel_landlord"])){
        //Safety measures
        $surnameLandlord=str_replace(['UNION','+','>','<','?','*','/','(',')','\"'],'', $_POST["surname_landlord"]);
        $nameLandlord=str_replace(['UNION','+','>','<','?','*','/','(',')','\"'],'',$_POST["name_landlord"]);
        $nameCorporateLandlord=str_replace(['UNION','+','>','<','?','*','/','(',')','\"'],'',$_POST["corporate_name_landlord"]);
    
        $user=addlandlord($surnameLandlord, $nameLandlord,$_POST["corporate_name_landlord"], $_POST["email_landlord"], $_POST["password_landlord"], $_POST["tel_landlord"]);

        if($user) {
            header('Location: indexLandlord.php');
            $_SESSION['connected'] = true;
        }
        
    } /*   truc pour ajouter le nom de société else if(isset($_POST[])) au final j'ai juste mis les noms en NULL dans la BDD, 
            c'est surement dangereux car on peut s'inscrire sans donner de nom   */
}

require 'Views/registrationLandlordView.php';

require 'Views/Components/footer.php';
?>
