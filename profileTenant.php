<?php 

require 'Views/Components/header.php';
    
if(isset($_SESSION['connected'])) {
    require 'Models/ProfileTenant.php';

    if(isset($_POST['submit-password'])) {

        if(isset($_POST['password']) && isset($_POST['passwordConfirm'])){

            $changePassword = changePassword($_POST['password'], $_POST['passwordConfirm']);        

        };

    };

    if(isset($_POST['submit'])) {

        if(isset($_POST['name_tenant'])){

            if(!$_POST['name_tenant'] == "") {
                $changeName = changeName($_POST['name_tenant']);   
            };

        };

        if(isset($_POST['surname_tenant'])) {
            
            if(!$_POST['surname_tenant'] == "") {
                $changeSurname = changeSurname($_POST['surname_tenant']);
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
        
        if(isset($_POST['nb_roommates'])){
            if(!$_POST['nb_roommates']==""){
                $changeRoommate=changeRoommate($_POST['nb_roommates']);
            }
        }
        
    };


    require 'Views/profileViewTenant.php';

    require 'Views/Components/footer.php';

} else {
    header('Location: login.php');
};
?>