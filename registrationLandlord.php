<?php

require 'Views/Components/header.php';

require 'Models/RegistrationLandlord.php';

if(isset($_POST["submit"])){
    if(isset($_POST["surname_landlord"]) && isset($_POST["name_landlord"]) && isset($_POST["corporate_name_landlord"]) && isset($_POST["email_landlord"]) && isset($_POST["password_landlord"]) && isset($_POST["tel_landlord"])){
        //Safety measures / character bans
        $surnameLandlord=str_replace(['UNION','WHERE','+','>','<','?','*','/','(',')','\"','%','--',';'],'', $_POST["surname_landlord"]);
        $nameLandlord=str_replace(['UNION','WHERE','+','>','<','?','*','/','(',')','\"','%','--',';'],'',$_POST["name_landlord"]);
        $nameCorporateLandlord=str_replace(['UNION','WHERE','+','>','<','?','*','/','(',')','\"','%','--',';'],'',$_POST["corporate_name_landlord"]);
        $emailLandlord=str_replace(['UNION','WHERE','+','>','<','?','*','/','(',')','\"','%','--',';'],'',$_POST["email_landlord"]);
        $passwordLandlord=str_replace(['UNION','WHERE','+','>','<','?','*','/','(',')','\"','%','--',';'],'',$_POST["password_landlord"]);
    
        $user=addlandlord($surnameLandlord, $nameLandlord,$nameCorporateLandlord, $emailLandlord, $passwordLandlord, $_POST["tel_landlord"]);

        if($user) {
            header('Location: indexLandlord.php');
            $_SESSION['connected'] = true;
        }
        
    } 
}

require 'Views/registrationLandlordView.php';

require 'Views/Components/footer.php';
