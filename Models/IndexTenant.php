<?php 

function getAllUsers() {
    
    $db = dbConnect();

    $users = $db->query('SELECT * FROM tenant');
    print"Ceci est l'écran d'acceuil des locataires";
    return $users;

}



?>