<?php 

function getAllUsers() {
    
    $db = dbConnect();

    $users = $db->query('SELECT * FROM landlord');
    return $users;

}



?>