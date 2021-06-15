<?php

function getAllLandlords()
{

    $db = dbConnect();

    $users = $db->query('SELECT * FROM landlord');
    return $users;
};

function getIdPiecesLandlord($id_landlord)
{
    $db = dbConnect();

    $getIds = $db->prepare('SELECT file_dir_landlord, id_files_landlords FROM files_landlord WHERE id_uploading_landlord=:id_uploading_landlord');
    $getIds->execute([
        'id_uploading_landlord' => $id_landlord,
    ]) or die(print_r($getIds->errorInfo()));

    return $getIds;
}

function getLeaseLandlord($id_landlord)
{
    $db = dbConnect();

    $getLeases = $db->prepare('SELECT file_dir_common FROM common WHERE id_landlord_concerned=:id_landlord_concerned');
    $getLeases->execute([
        'id_landlord_concerned' => $id_landlord,
    ]) or die(print_r($getLeases->errorInfo()));

    return $getLeases;
}

function uploadFileLandlord($file_dir_landlord, $id_landlord)
{

    $db = dbConnect();


    $upload = $db->prepare('INSERT INTO files_landlord(file_dir_landlord, created_at,id_uploading_landlord ) VALUES (:file_dir_landlord, :created_at, :id_uploading_landlord)');

    date_default_timezone_set('Europe/Paris');

    $upload->execute([
        'file_dir_landlord' => $file_dir_landlord,
        'id_uploading_landlord' => $_SESSION['id_landlord'],
        'created_at' => date('Y-m-d H:i:s'),
    ]) or die(print_r($upload->errorInfo()));

    return $upload;
};

function checkBeforeIncrement($idLandlord)
{

    $db = dbConnect();

    $selectNbToCheck = $db->prepare('SELECT nb_files_uploaded_landlord FROM landlord WHERE id_landlord=:id_landlord');

    $selectNbToCheck->execute([
        'id_landlord' => $idLandlord,
    ]) or die(print_r($selectNbToCheck->errorInfo()));


    return $selectNbToCheck;
}

function incrementFileUploadNbLandlord($idLandlord)
{
    $db = dbConnect();

    $incrementNb = $db->prepare('UPDATE landlord SET nb_files_uploaded_landlord=nb_files_uploaded_landlord+1 WHERE id_landlord=:id_landlord');

    $incrementNb->execute([
        'id_landlord' => $idLandlord,
    ]) or die(print_r($incrementNb->errorInfo()));


    return $incrementNb;
}

function decrementFileCounter()
{
    $db = dbConnect();

    $decrementNb = $db->prepare('UPDATE landlord SET nb_files_uploaded_landlord=nb_files_uploaded_landlord-1 WHERE id_landlord=:id_landlord');

    $decrementNb->execute([
        'id_landlord' => $_SESSION['id_landlord'],
    ]) or die(print_r($decrementNb->errorInfo()));


    return $decrementNb;
}

function getPathToUnlink($id_landlord)
{
    $db = dbConnect();

    $getPath = $db->prepare('SELECT file_dir_landlord FROM files_landlord WHERE id_uploading_landlord=:id_uploading_landlord');

    $getPath->execute([
        'id_uploading_landlord' => $id_landlord,
    ]) or die(print_r($getPath->errorInfo()));

    return $getPath;
}

function resetFileCounter($id_landlord)
{
    $db = dbConnect();

    $resetNb = $db->prepare('UPDATE landlord SET nb_files_uploaded_landlord=1 WHERE id_landlord=:id_landlord');

    $resetNb->execute([
        'id_landlord' => $id_landlord,
    ]) or die(print_r($resetNb->errorInfo()));

    return $resetNb;
}

function deleteAllIdPieces($id_landlord)
{
    $db = dbConnect();

    $deleteIdPieces = $db->prepare('DELETE FROM files_landlord WHERE id_uploading_landlord=:id_uploading_landlord');

    $deleteIdPieces->execute([
        'id_uploading_landlord' => $id_landlord,
    ]) or die(print_r($deleteIdPieces->errorInfo()));

    return $deleteIdPieces;
}

function deleteIdPiece($id_file_landlord){
    $db=dbConnect();

    $deleteSpecifiedFile=$db->prepare('DELETE FROM files_landlord WHERE id_uploading_landlord=:id_uploading_landlord AND id_files_landlords=:id_files_landlords');

    $deleteSpecifiedFile->execute([
        'id_uploading_landlord'=>$_SESSION['id_landlord'],
        'id_files_landlords'=>$id_file_landlord,
    ])or die(print_r($deleteSpecifiedFile->errorInfo()));

    return $deleteSpecifiedFile;

}

function checkFileNameLandlord($pictureName, $id_uploading_landlord)
{

    $db = dbConnect();

    $checkExistingPicturesName = $db->prepare('SELECT file_dir_landlord, id_uploading_landlord FROM files_landlord WHERE file_dir_landlord=:file_dir_landlord AND id_uploading_landlord=:id_uploading_landlord');

    $checkExistingPicturesName->execute([
        'file_dir_landlord' => $pictureName,
        'id_uploading_landlord' => $id_uploading_landlord,
    ]) or die(print_r($checkExistingPicturesName->errorInfo()));

    return $checkExistingPicturesName;
};
