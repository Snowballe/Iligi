<?php 
function addTenant($surname_tenant, $name_tenant, $email_tenant, $password_tenant, $tel_tenant, $professional_situation_tenant,$nb_roommates_tenant){
    $db=dbConnect();
    
    $users = $db->prepare('INSERT INTO tenant(surname_tenant, name_tenant, email_tenant, password_tenant, tel_tenant, professional_situation_tenant, nb_roommates_tenant, created_at) VALUES (:surname_tenant, :name_tenant, :email_tenant, :password_tenant, :tel_tenant, :professional_situation_tenant, :nb_roommates_tenant, :created_at)');

    $passwordHash = password_hash($password_tenant, PASSWORD_DEFAULT);

    date_default_timezone_set('Europe/Paris');

    $users->execute([
        'surname_tenant' => $surname_tenant,
        'name_tenant' => $name_tenant,
        'email_tenant' => $email_tenant,
        'password_tenant' => $passwordHash,
        'tel_tenant'=>$tel_tenant,
        'professional_situation_tenant'=>$professional_situation_tenant,
        'nb_roommates_tenant'=>$nb_roommates_tenant,
        'created_at' => date('Y-m-d H:i:s'),
    ]) or die(print_r($users->errorInfo()));

    return $users;
}
