<?php 

require 'Views/Components/header.php';
    
if(isset($_SESSION['connected'])) {
    require 'Models/ProfileLandlord.php';

    if(isset($_POST['submit-password_landlord'])) {

        if(isset($_POST['password']) && isset($_POST['passwordConfirm'])){

            $changePassword = changePassword($_POST['password'], $_POST['passwordConfirm']);        

        };

    };

    if(isset($_POST['submit'])) {

        if(isset($_POST['name_landlord'])){

            if(!$_POST['name_landlord'] == "") {
                $changeName = changeName($_POST['name_landlord']);   
                
            };

        };

        if(isset($_POST['surname_landlord'])) {
            
            if(!$_POST['surname_landlord'] == "") {
                $changeSurname = changeSurname($_POST['surname_landlord']);
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


    require 'Views/profileViewLandlord.php';

    require 'Views/Components/footer.php';

} else {
    header('Location: index.php');
};
?>