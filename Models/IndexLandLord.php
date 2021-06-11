<?php 

function getAllLandlords() {
    
    $db = dbConnect();

    $users = $db->query('SELECT * FROM landlord');
    return $users;

};

function getIdPiecesLandlord($id_landlord){
    $db=dbConnect();

    $getIds=$db->prepare('SELECT file_dir_landlord FROM files_landlord WHERE id_uploading_landlord=:id_uploading_landlord');
    $getIds->execute([
        'id_uploading_landlord'=>$id_landlord,
    ])or die(print_r($getIds->errorInfo()));

        return $getIds;

}

function getLeaseLandlord($id_landlord){
    $db=dbConnect();

    $getLeases=$db->prepare('SELECT file_dir_common FROM common WHERE id_landlord_concerned=:id_landlord_concerned');
    $getLeases->execute([
        'id_landlord_concerned'=>$id_landlord,
    ])or die(print_r($getLeases->errorInfo()));
    
    return $getLeases;
}

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
    
    
    return $fileName <-- Maël du passé tu es con, j'étais en train de return la mauvaise variable;
    //Fallait return $checkNameFile éwé
};*/

function checkFileNameLandlord($pictureName, $id_uploading_landlord) {

    $db = dbConnect();

    $checkExistingPicturesName = $db->prepare('SELECT file_dir_landlord, id_uploading_landlord FROM files_landlord WHERE file_dir_landlord=:file_dir_landlord AND id_uploading_landlord=:id_uploading_landlord');

    $checkExistingPicturesName->execute([
        'file_dir_landlord' => $pictureName,
        'id_uploading_landlord'=>$id_uploading_landlord,
    ]) or die(print_r($checkExistingPicturesName->errorInfo()));

    return $checkExistingPicturesName;
};

/*function selectFileLandlord(){
    $db=dbConnect();
};
*/
?>