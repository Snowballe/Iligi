<?php 

function getAllUsers() {
    
    $db = dbConnect();

    $users = $db->query('SELECT * FROM tenant');
    return $users;

}

function uploadFileTenant($file_dir_tenant, $id_tenant){
    
    $db=dbConnect();
    

    $upload=$db->prepare('INSERT INTO files_tenant(file_dir, created_at,id_uploading_tenant ) VALUES (:file_dir, :created_at, :id_uploading_tenant)');
    
    date_default_timezone_set('Europe/Paris');
    
    $upload->execute([
        'file_dir'=>$file_dir_tenant,
        'id_uploading_tenant'=>$_SESSION['id'],
        'created_at' => date('Y-m-d H:i:s'),
    ]) or die(print_r($upload->errorInfo()));

    return $upload;
};

function checkFileNameTenant($pictureName) {

    $db = dbConnect();

    $checkExistingPicturesName = $db->prepare('SELECT file_dir FROM files_tenant WHERE file_dir=:file_dir');

    $checkExistingPicturesName->execute([
        'file_dir' => $pictureName,
    ]) or die(print_r($checkExistingPicturesName->errorInfo()));

    return $checkExistingPicturesName;
};

?>