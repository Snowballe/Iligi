<?php

require 'Views/Components/header.php';

require 'Models/RegistrationTenant.php';

if(isset($_POST["submit"])){
    if(isset($_POST["surname_tenant"]) && isset($_POST["name_tenant"]) && isset($_POST["email_tenant"]) && isset($_POST["password_tenant"]) && isset($_POST["tel_tenant"]) && isset($_POST["nb_roommates_tenant"])){
    //Safety measures / character bans
    $surnameTenant=str_replace(['UNION','WHERE','+','>','<','?','*','/','(',')','\"','%','--',';'],'', $_POST["surname_tenant"]);
    $nameTenant=str_replace(['UNION','WHERE','+','>','<','?','*','/','(',')','\"','%','--',';'],'',$_POST["name_tenant"]);
    $emailTenant=str_replace(['UNION','WHERE','+','>','<','?','*','/','(',')','\"','%','--',';'],'',$_POST["email_tenant"]);
    $passwordTenant=str_replace(['UNION','WHERE','+','>','<','?','*','/','(',')','\"','%','--',';'],'',$_POST["password_tenant"]);
    
        
    $user=addTenant($surnameTenant, $nameTenant, $emailTenant, $passwordTenant, $_POST["tel_tenant"],$_POST["nb_roommates_tenant"]);

        if($user) {
            header('Location: indexTenant.php');
        }
        
    }
}

require 'Views/registrationTenantView.php';

require 'Views/Components/footer.php';


?>