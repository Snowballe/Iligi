<?php 

function getAllUsers() {
    
    $db = dbConnect();

    $users = $db->query('SELECT * FROM landlord');
    return $users;

}

function uploadFileLandlord($name_file_landlord,$file_dir_landlord,$file_extension ){
    $db=dbConnect();


    $upload=$db->prepare('INSERT INTO files_landlord(name_file_landlord, file_dir_landlord, file_extension, bin_files_landlord,created_at) VALUES (:name_file_landlord, :file_dir_landlord, :file_extension, :bin_files_landlord, :created_at)');
    
    date_default_timezone_set('Europe/Paris');
    
    $upload->execute([
        'name_file_landlord'=>$name_file_landlord,
        'file_dir_landlord'=>$file_dir_landlord,
        'file_extension'=>$file_extension,
        'created_at' => date('Y-m-d H:i:s')
    ]) or die(print_r($users->errorInfo()));



}

?>