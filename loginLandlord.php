<?php 
require 'Views/Components/header.php';
require 'Models/LoginLandlord.php';

if(isset($_POST['submit'])){

    if(isset($_POST['email_landlord']) && isset($_POST['password_landlord'])){

        $connectLandlord = checklandlord($_POST['email_landlord'], $_POST['password_landlord']);
    }
};

require "Views/loginLandlordView.php";

require "Views/Components/footer.php";

?>