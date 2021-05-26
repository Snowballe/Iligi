<?php 

require 'Views/Components/header.php';

require 'Models/Login.php';

if(isset($_POST['submit'])){

    if(isset($_POST['email']) && isset($_POST['password'])){

        $connectUser = checkUser($_POST['email'], $_POST['password']);
    }
};

require 'Views/loginView.php';

require 'Views/Components/footer.php';

?>