<?php

require 'Views/Components/header.php';

require 'Models/RegistrationLandlord.php';

if(isset($_POST["submit"])){
    if(isset($_POST["surname_landlord"]) && isset($_POST["name_landlord"]) && isset($_POST["email_landlord"]) && isset($_POST["password_landlord"]) && isset($_POST["tel_landlord"])){
    
        $user=addlandlord($_POST["surname_landlord"], $_POST["name_landlord"], $_POST["email_landlord"], $_POST["password_landlord"], $_POST["tel_landlord"]);

        if($user) {
            header('Location: indexLandlord.php');
        }
        
    }
}

require 'Views/registrationLandlordView.php';

require 'Views/Components/footer.php';


?>