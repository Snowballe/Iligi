<?php
/* 
=======================================================






TODO : faire différents modifications de profil








=======================================================
*/
function changePassword($password, $passwordConfirm) {

    $db = dbConnect();

    if($password === $passwordConfirm) {

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        date_default_timezone_set('Europe/Paris');

        $changePassword = $db->prepare('UPDATE users SET password = :password, updated_at = :updated_at WHERE id = :id');

        $changePassword->execute([
            'password' => $passwordHash,
            'updated_at' => date('Y-m-d H:i:s'),
            'id' => $_SESSION['id'],
        ]) or die(print_r($changePassword->errorInfo()));

        header('Location: index.php');

    } else {
        header('location: profile.php?wrongPassword');
    };

};


function changeName($name) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changeName = $db->prepare('UPDATE users SET name = :name, updated_at = :updated_at WHERE id = :id');

    $changeName->execute([
        'name' => $name,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($changeName->errorInfo()));

    header('Location: index.php');

};

function changeSurname($surname) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changeSurname = $db->prepare('UPDATE users SET surname = :surname, updated_at = :updated_at WHERE id = :id');

    $changeSurname->execute([
        'surname' => $surname,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($changeSurname->errorInfo()));

    $_SESSION['surname'] = $surname;

    header('Location: index.php');

};


function changePhoneNumber($phone_number) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changePhoneNumber = $db->prepare('UPDATE users SET phone_number = :phone_number, updated_at = :updated_at WHERE id = :id');

    $changePhoneNumber->execute([
        'phone_number' => $phone_number,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($changePhoneNumber->errorInfo()));

    header('Location: index.php');

};

function changeEmail($email) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changeEmail = $db->prepare('UPDATE users SET email = :email, updated_at = :updated_at WHERE id = :id');

    $changeEmail->execute([
        'email' => $email,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($changeEmail->errorInfo()));

    $_SESSION['email'] = $email;

    header('Location: index.php');

};



?>