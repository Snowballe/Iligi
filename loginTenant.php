<?php 
require 'Views/Components/header.php';
require 'Models/LoginTenant.php';

if(isset($_POST['submit'])){

    if(isset($_POST['email_tenant']) && isset($_POST['password_tenant'])){

        $connectUser = checkUser($_POST['email_tenant'], $_POST['password_tenant']);
    }
};

require 'Views/loginTenantView.php';

require 'Views/Components/footer.php';

?>