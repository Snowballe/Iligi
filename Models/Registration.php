<?php 
function addUser($surname, $name, $phone_number, $country_code, $email, $password){
    $db=dbConnect();
    
    $users = $db->prepare('INSERT INTO users(surname, name, phone_number, country_code, email, password, created_at) VALUES(:surname, :name, :phone_number, :country_code, :email, :password, :created_at)');

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    date_default_timezone_set('Europe/Paris');

    $users->execute([
        'surname' => $surname,
        'name' => $name,
        'phone_number' => $phone_number,
        'country_code' => $country_code,
        'email' => $email,
        'password' => $passwordHash,
        'created_at' => date('Y-m-d H:i:s'),
    ]) or die(print_r($users->errorInfo()));

    return $users;
}
