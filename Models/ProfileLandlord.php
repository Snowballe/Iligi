<?php
function changePassword($password, $passwordConfirm) {

    $db = dbConnect();

    if($password === $passwordConfirm) {

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        date_default_timezone_set('Europe/Paris');

        $changePassword = $db->prepare('UPDATE landlord SET password_landlord = :password_landlord, updated_at = :updated_at WHERE id_landlord = :id_landlord');

        $changePassword->execute([
            'password_landlord' => $passwordHash,
            'updated_at' => date('Y-m-d H:i:s'),
            'id_landlord' => $_SESSION['id_landlord'],
        ]) or die(print_r($changePassword->errorInfo()));

        header('Location: profileLandlord.php?passwordUpdate');

    } else {
        header('location: profileLandlord.php?wrongPassword');
    };

};


function changeName($name) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changeName = $db->prepare('UPDATE landlord SET name_landlord = :name_landlord, updated_at = :updated_at WHERE id_landlord = :id_landlord');

    $changeName->execute([
        'name_landlord' => $name,
        'updated_at' => date('Y-m-d H:i:s'),
        'id_landlord' => $_SESSION['id_landlord'],
    ]) or die(print_r($changeName->errorInfo()));

    header('Location: profileLandlord.php?updateSuccess');

};

function changeSurname($surname) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changeSurname = $db->prepare('UPDATE landlord SET surname_landlord = :surname_landlord, updated_at = :updated_at WHERE id_landlord = :id_landlord');

    $changeSurname->execute([
        'surname_landlord' => $surname,
        'updated_at' => date('Y-m-d H:i:s'),
        'id_landlord' => $_SESSION['id_landlord'],
    ]) or die(print_r($changeSurname->errorInfo()));

    $_SESSION['surname_landlord'] = $surname;

    header('Location: profileLandlord.php?updateSuccess');

};


function changePhoneNumber($phone_number) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changePhoneNumber = $db->prepare('UPDATE landlord SET tel_landlord = :tel_landlord, updated_at = :updated_at WHERE id_landlord = :id_landlord');

    $changePhoneNumber->execute([
        'tel_landlord' => $phone_number,
        'updated_at' => date('Y-m-d H:i:s'),
        'id_landlord' => $_SESSION['id_landlord'],
    ]) or die(print_r($changePhoneNumber->errorInfo()));

    header('Location: profileLandlord.php?updateSuccess');

};

function changeEmail($email) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changeEmail = $db->prepare('UPDATE landlord SET email_landlord = :email_landlord, updated_at = :updated_at WHERE id_landlord = :id_landlord');

    $changeEmail->execute([
        'email_landlord' => $email,
        'updated_at' => date('Y-m-d H:i:s'),
        'id_landlord' => $_SESSION['id_landlord'],
    ]) or die(print_r($changeEmail->errorInfo()));

    $_SESSION['email_landlord'] = $email;

    header('Location: profileLandlord.php?updateSuccess');

};


?>