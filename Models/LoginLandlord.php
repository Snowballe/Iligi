<?php 

function checkLandlord($email_landlord, $password_landlord) {

    $db = dbConnect();

    $user = $db->prepare('SELECT * FROM landlord WHERE email_landlord = :email_landlord');

    $user->execute([
        'email_landlord' => $email_landlord,
    ]) or die(print_r($user->errorInfo()));

    $checkUsers = $user->fetch();
 
    if($checkUsers){

        $passwordDatabase = $db->prepare('SELECT password_landlord FROM landlord WHERE email_landlord = :email_landlord');

        $passwordDatabase->execute([
            'email_landlord' => $email_landlord,
        ]) or die(print_r($passwordDatabase->errorInfo()));

        $passwordCheck = $passwordDatabase->fetch();

        $isPasswordCorrect = password_verify($password_landlord, $passwordCheck['password_landlord']);

        if($isPasswordCorrect) {

            $_SESSION['id_landlord'] = $checkUsers['id_landlord'];
            $_SESSION['email_landlord'] = $email_landlord;
            $_SESSION['surname_landlord'] = $checkUsers['surname_landlord'];
            $_SESSION['corporate_name_landlord']=$checkUsers['corporate_name_landlord'];
            $_SESSION['connected'] = true;
            
            header('location: indexLandlord.php');
        } else {
            header('location: loginLandlord.php?wrongPassword');
        };
    } else {
        header('location: loginLandlord.php?wrongEmail');
    };



};

?>