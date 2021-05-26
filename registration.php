<?php

require 'Views/Components/header.php';

require 'Models/Registration.php';

if(isset($_POST["submit"])){
    if(isset($_POST["surname"]) && isset($_POST["name"]) && isset($_POST["phone_number"]) && isset($_POST["country_code"]) && isset($_POST["email"]) && isset($_POST["password"])){
    $user=addUser($_POST["surname"], $_POST["name"], $_POST["phone_number"], $_POST["country_code"], $_POST["email"], $_POST["password"]);
    
    if($user) {
        header('Location: index.php');
    }
        
    }
}

require 'Views/registrationView.php';

require 'Views/Components/footer.php';


?>