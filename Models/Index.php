<?php 

function getAllUsers() {
    
    $db = dbConnect();

    $users = $db->query('SELECT * FROM tenant AND landlord');
    
    return $users;

}



?>