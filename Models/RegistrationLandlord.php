<?php 
function addLandlord($surname_landlord, $name_landlord, $email_landlord, $password_landlord, $tel_landlord){
    $db=dbConnect();
    
    $users = $db->prepare('INSERT INTO landlord(surname_landlord, name_landlord, email_landlord, password_landlord, tel_landlord, created_at) VALUES (:surname_landlord, :name_landlord, :email_landlord, :password_landlord, :tel_landlord, :created_at)');

    $passwordHash = password_hash($password_landlord, PASSWORD_DEFAULT);

    date_default_timezone_set('Europe/Paris');

    $users->execute([
        'surname_landlord' => $surname_landlord,
        'name_landlord' => $name_landlord,
        'email_landlord' => $email_landlord,
        'password_landlord' => $passwordHash,
        'tel_landlord'=>$tel_landlord,
        'created_at' => date('Y-m-d H:i:s'),
    ]) or die(print_r($users->errorInfo()));

    return $users;
}
