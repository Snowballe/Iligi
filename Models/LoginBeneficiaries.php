<?php 

function checkBeneficiaries($email_beneficiaries, $password_beneficiaries) {

    $db = dbConnect();

    $user = $db->prepare('SELECT * FROM beneficiaries WHERE email_beneficiaries = :email_beneficiaries');

    $user->execute([
        'email_beneficiaries' => $email_beneficiaries,
    ]) or die(print_r($user->errorInfo()));

    $checkUsers = $user->fetch();
 
    if($checkUsers){

        $passwordDatabase = $db->prepare('SELECT password_beneficiaries FROM beneficiaries WHERE email_beneficiaries = :email_beneficiaries');

        $passwordDatabase->execute([
            'email_beneficiaries' => $email_beneficiaries,
        ]) or die(print_r($passwordDatabase->errorInfo()));

        $passwordCheck = $passwordDatabase->fetch();

        $isPasswordCorrect = password_verify($password_beneficiaries, $passwordCheck['password_beneficiaries']);

        if($isPasswordCorrect) {

            $_SESSION['id_beneficiaries'] = $checkUsers['id_beneficiaries'];
            $_SESSION['email_beneficiaries'] = $email_beneficiaries;
            $_SESSION['surname'] = $checkUsers['firstname_beneficiaries'];
            $_SESSION['connected'] = true;
            
            header('location: index.php');
        } else {
            header('location: loginBeneficiaries.php?wrongPassword');
        };
    } else {
        header('location: loginBeneficiaries.php?wrongEmail');
    };



};

?>