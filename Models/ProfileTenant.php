<?php

function changePassword($password, $passwordConfirm) {

    $db = dbConnect();

    if($password === $passwordConfirm) {

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        date_default_timezone_set('Europe/Paris');

        $changepassword_tenant = $db->prepare('UPDATE tenant SET password_tenant = :password_tenant, updated_at = :updated_at WHERE id = :id');

        $changepassword_tenant->execute([
            'password_tenant' => $passwordHash,
            'updated_at' => date('Y-m-d H:i:s'),
            'id' => $_SESSION['id'],
        ]) or die(print_r($changepassword_tenant->errorInfo()));

        header('Location: profileTenant.php?passwordUpdate');

    } else {
        header('location: profileTenant.php?wrongPassword');
    };

};


// function changeName($name) {

//     $db = dbConnect();
//     date_default_timezone_set('Europe/Paris');
    
//     $nameToChange = $db->prepare('UPDATE tenant SET name_tenant = :name_tenant, updated_at = :updated_at WHERE id=:id');

//     $nameToChange->execute([
//          'name' => $name,
//          'updated_at' => date('Y-m-d H:i:s'),
//          'id' => $_SESSION['id'],
//      ]) or die(print_r($nameToChange->errorInfo()));

//     $_SESSION['name_tenant']=$name;                                       //Encore une fois je ne sais pas pourquoi cette fonction ne marhce pas, 
//                                                                             //pas une histoire de return en plus car il n'y en a pas
                                                                      
//      header('Location: indexTenant.php');

// };

function changeName($name) {

    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    
    $changeSurname = $db->prepare('UPDATE tenant SET name_tenant = :name_tenant, updated_at = :updated_at WHERE id = :id');

    $changeSurname->execute([
        'name_tenant' => $name,
        'updated_at' => date('Y-m-d H:i:s'),
        'id' => $_SESSION['id'],
    ]) or die(print_r($changeSurname->errorInfo()));

    

    header('Location: profileTenant.php?updateSuccess');

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

    header('Location: profileTenant.php?updateSuccess');

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

    header('Location: profileTenant.php?updateSuccess');

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

    header('Location: profileTenant.php?updateSuccess');

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
    header('Location: profileTenant.php?updateSuccess');

}

?>