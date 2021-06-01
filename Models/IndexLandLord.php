<?php 

function getAllLandlords() {
    
    $db = dbConnect();

    $users = $db->query('SELECT * FROM landlord');
    return $users;

};

function uploadFileLandlord($file_dir_landlord, $id_landlord){
    
    $db=dbConnect();
    

    $upload=$db->prepare('INSERT INTO files_landlord(file_dir_landlord, created_at,id_uploading_landlord ) VALUES (:file_dir_landlord, :created_at, :id_uploading_landlord)');
    
    date_default_timezone_set('Europe/Paris');
    
    $upload->execute([
        'file_dir_landlord'=>$file_dir_landlord,
        'id_uploading_landlord'=>$_SESSION['id_landlord'],
        'created_at' => date('Y-m-d H:i:s'),
    ]) or die(print_r($upload->errorInfo()));

    return $upload;
};

/*function checkFileNameLandlord($fileName){
    $db=dbConnect();
    
    //Cette fonction me donne un pb de pdo, je comprends pas pourquoi... Elle est identique à celle en dessous.
    
    $checkNameFile=$db->prepare('SELECT file_dir_landlord FROM files_landlord WHERE file_dir_landlord=:file_dir_landlord');
    
    
    $checkNameFile->execute([
        'file_dir_landlord'->$fileName,
    ]) or die(print_r($checkNameFile->errorInfo()));
    
    
    return $fileName;
};*/

function checkFileNameLandlord($pictureName) {

    $db = dbConnect();

    $checkExistingPicturesName = $db->prepare('SELECT file_dir_landlord FROM files_landlord WHERE file_dir_landlord=:file_dir_landlord');

    $checkExistingPicturesName->execute([
        'file_dir_landlord' => $pictureName,
    ]) or die(print_r($checkExistingPicturesName->errorInfo()));

    return $checkExistingPicturesName;
};

/*function selectFileLandlord(){
    $db=dbConnect();
};
*/
?>