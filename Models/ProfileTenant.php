<?php

function changePassword($password, $passwordConfirm) {

    $db = dbConnect();

    if($password === $passwordConfirm) {

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        date_default_timezone_set('Europe/Paris');

        $changePassword = $db->prepare('UPDATE tenant SET password_tenant = :password_tenant, updated_at = :updated_at WHERE id = :id');

        $changepassword_tenant->execute([
            'password_tenant' => $passwordHash,
            'updated_at' => date('Y-m-d H:i:s'),
            'id' => $_SESSION['id'],
        ]) or die(print_r($changePassword->errorInfo()));

        header('Location: indexTenant.php');

    } else {
        header('location: profileTenant.php?wrongPassword');
    };

};


function changeName($name) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changeName = $db->prepare('UPDATE tenant SET name_tenant = :name_tenant, updated_at = :updated_at WHERE id = :id');

    $changeName->execute([
        'name' => $name,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($changeName->errorInfo()));

    header('Location: indexTenant.php');

};

function changeSurname($surname) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changeSurname = $db->prepare('UPDATE tenant SET surname_tenant = :surname_tenant, updated_at = :updated_at WHERE id = :id');

    $changeSurname->execute([
        'surname_tenant' => $surname,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($changeSurname->errorInfo()));

    $_SESSION['surname_tenant'] = $surname;

    header('Location: indexTenant.php');

};


function changePhoneNumber($phone_number) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changePhoneNumber = $db->prepare('UPDATE tenant SET tel_tenant = :tel_tenant, updated_at = :updated_at WHERE id = :id');

    $changePhoneNumber->execute([
        'phone_number' => $phone_number,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($changePhoneNumber->errorInfo()));

    header('Location: indexTenant.php');

};

function changeEmail($email) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changeEmail = $db->prepare('UPDATE tenant SET email = :email, updated_at = :updated_at WHERE id = :id');

    $changeEmail->execute([
        'email' => $email,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($changeEmail->errorInfo()));

    $_SESSION['email'] = $email;

    header('Location: indexTenant.php');

};

function changeRoommate($nb_roommates){
    
    $db=dbConnect();
    
    date_default_timezone_set('Europe/Paris');
    
    $changeRoommate=$db->prepare('UPDATE tenant SET nb_roommates_tenant = :nb_roommates_tenant, updated_at=:updated_at WHERE id=:id');
    
    $changeRoommate->execute([
        'nb_roommates_tenant'=>$nb_roommates,
        'updated_at'=>date('Y-m-d H:i:s'),
        'id'=>$_SESSION['id'],
    ]) or die(print_r($changeRoommate->errorInfo()));
    header('Location: indexTenant.php');

}

?>