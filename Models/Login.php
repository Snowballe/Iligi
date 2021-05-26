<?php


function checkUser($email, $password) {

    $db = dbConnect();

    $user = $db->prepare('SELECT * FROM tenants WHERE email = :email_tenants');

    $user->execute([
        'email' => $email,
    ]) or die(print_r($users->errorInfo()));

    $checkUsers = $user->fetch();

    if($checkUsers){

        $passwordDatabase = $db->prepare('SELECT password FROM users WHERE email = :email');

        $passwordDatabase->execute([
            'email' => $email,
        ]) or die(print_r($passwordDatabase->errorInfo()));

        $passwordCheck = $passwordDatabase->fetch();

        $isPasswordCorrect = password_verify($password, $passwordCheck['password']);

        if($isPasswordCorrect) {

            $_SESSION['id'] = $checkUsers['id'];
            $_SESSION['email'] = $email;
            $_SESSION['surname'] = $checkUsers['surname'];
            $_SESSION['connected'] = true;
            
            header('location: index.php');
        } else {
            header('location: login.php?wrongPassword');
        };
    } else {
        header('location: login.php?wrongEmail');
    };



};

?>