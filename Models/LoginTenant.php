<?php


function checkUser($email, $password) {

    $db = dbConnect();

    $user = $db->prepare('SELECT * FROM tenant WHERE email_tenant = :email_tenant');

    $user->execute([
        'email_tenant' => $email,
    ]) or die(print_r($users->errorInfo()));

    $checkUsers = $user->fetch();

    if($checkUsers){

        $passwordDatabase = $db->prepare('SELECT password_tenant FROM tenant WHERE email_tenant = :email_tenant');

        $passwordDatabase->execute([
            'email_tenant' => $email,
        ]) or die(print_r($passwordDatabase->errorInfo()));

        $passwordCheck = $passwordDatabase->fetch();

        $isPasswordCorrect = password_verify($password, $passwordCheck['password_tenant']);

        if($isPasswordCorrect) {

            $_SESSION['id'] = $checkUsers['id'];
            $_SESSION['email_tenant'] = $email;
            $_SESSION['surname_tenant'] = $checkUsers['surname_tenant'];
            $_SESSION['connected'] = true;
            
            header('location: indexTenant.php');
        } else {
            header('location: login.php?wrongPassword');
        };
    } else {
        header('location: login.php?wrongEmail');
    };



};

?>