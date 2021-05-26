<?php

require 'Views/Components/header.php';

require 'Models/RegistrationTenant.php';

if(isset($_POST["submit"])){
    if(isset($_POST["surname_tenant"]) && isset($_POST["name_tenant"]) && isset($_POST["email_tenant"]) && isset($_POST["password_tenant"]) && isset($_POST["tel_tenant"]) && isset($_POST["professional_situation_tenant"]) && isset($_POST["nb_roommates_tenant"])){
    
        $user=addTenant($_POST["surname_tenant"], $_POST["name_tenant"], $_POST["email_tenant"], $_POST["password_tenant"], $_POST["tel_tenant"], $_POST["professional_situation_tenant"],$_POST["nb_roommates_tenant"]);

        if($user) {
            header('Location: indexTentant.php');
        }
        
    }
}

require 'Views/registrationTenantView.php';

require 'Views/Components/footer.php';


?>