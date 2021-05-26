<?php 
require "Views/Components/header.php";
require "Models/LoginBeneficiaries.php";

if(isset($_POST['submit'])){

    if(isset($_POST['email']) && isset($_POST['password'])){

        $connectBeneficiaries = checkBeneficiaries($_POST['email'], $_POST['password']);
    }
};

require "Views/loginBeneficiariesView.php";

require "Views/Components/footer.php";

?>