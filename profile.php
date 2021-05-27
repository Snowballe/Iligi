<?php 

require 'Views/Components/header.php';
    
if(isset($_SESSION['connected'])) {
    require 'Models/Profile.php';

    if(isset($_POST['submit-password'])) {

        if(isset($_POST['password']) && isset($_POST['passwordConfirm'])){

            $changePassword = changePassword($_POST['password'], $_POST['passwordConfirm']);        

        };

    };

    if(isset($_POST['submit'])) {

        if(isset($_POST['name'])){

            if(!$_POST['name'] == "") {
                $changeName = changeName($_POST['name']);   
            };

        };

        if(isset($_POST['surname'])) {
            
            if(!$_POST['surname'] == "") {
                $changeSurname = changeSurname($_POST['surname']);
            };

        };

        if(isset($_POST['country_code'])) {

            if(!$_POST['country_code'] == "") {
                $changeCountryCode = changeCountryCode($_POST['country_code']);
            };

        };

        if(isset($_POST['phone_number'])) {

            if(!$_POST['phone_number'] == "") {
                $changePhoneNumber = changePhoneNumber($_POST['phone_number']);
            };

        };

        if(isset($_POST['email'])) {

            if(!$_POST['email'] == "") {
                $changeEmail = changeEmail($_POST['email']);
            };

        };

    };


    require 'Views/profileView.php';

    require 'Views/Components/footer.php';

} else {
    header('Location: login.php');
};
?>