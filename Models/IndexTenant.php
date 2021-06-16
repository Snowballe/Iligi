<?php



function getIdPiecesTenant($id)
{
    $db = dbConnect();

    $getIds = $db->prepare('SELECT file_dir, id_files_tenant FROM files_tenant WHERE id_uploading_tenant=:id_uploading_tenant');
    $getIds->execute([
        'id_uploading_tenant' => $id,
    ]) or die(print_r($getIds->errorInfo()));

    return $getIds;
}

function getLeaseTenant($id)
{
    $db = dbConnect();

    $getLeases = $db->prepare('SELECT file_dir_common FROM common WHERE id_tenant_concerned=:id_tenant_concerned');
    $getLeases->execute([
        'id_tenant_concerned' => $id,
    ]) or die(print_r($getLeases->errorInfo()));

    return $getLeases;
}

function uploadFileTenant($file_dir, $id)
{

    $db = dbConnect();


    $upload = $db->prepare('INSERT INTO files_tenant(file_dir, created_at,id_uploading_tenant ) VALUES (:file_dir, :created_at, :id_uploading_tenant)');

    date_default_timezone_set('Europe/Paris');

    $upload->execute([
        'file_dir' => $file_dir,
        'id_uploading_tenant' => $_SESSION['id'],
        'created_at' => date('Y-m-d H:i:s'),
    ]) or die(print_r($upload->errorInfo()));

    return $upload;
};

function checkBeforeIncrement($idTenant)
{

    $db = dbConnect();

    $selectNbToCheck = $db->prepare('SELECT nb_files_uploaded_tenant FROM tenant WHERE id=:id');

    $selectNbToCheck->execute([
        'id' => $idTenant,
    ]) or die(print_r($selectNbToCheck->errorInfo()));


    return $selectNbToCheck;
}

function incrementFileUploadNbTenant($idTenant)
{
    $db = dbConnect();

    $incrementNb = $db->prepare('UPDATE tenant SET nb_files_uploaded_tenant=nb_files_uploaded_tenant+1 WHERE id=:id');

    $incrementNb->execute([
        'id' => $idTenant,
    ]) or die(print_r($incrementNb->errorInfo()));


    return $incrementNb;
}

function decrementFileCounter()
{
    $db = dbConnect();

    $decrementNb = $db->prepare('UPDATE tenant SET nb_files_uploaded_tenant=nb_files_uploaded_tenant-1 WHERE id=:id');

    $decrementNb->execute([
        'id' => $_SESSION['id'],
    ]) or die(print_r($decrementNb->errorInfo()));


    return $decrementNb;
}

function getPathToUnlink($id)
{
    $db = dbConnect();

    $getPath = $db->prepare('SELECT file_dir FROM files_tenant WHERE id_uploading_tenant=:id_uploading_tenant');

    $getPath->execute([
        'id_uploading_tenant' => $id,
    ]) or die(print_r($getPath->errorInfo()));

    return $getPath;
}

function resetFileCounter($id)
{
    $db = dbConnect();

    $resetNb = $db->prepare('UPDATE tenant SET nb_files_uploaded_tenant=1 WHERE id=:id');

    $resetNb->execute([
        'id' => $id,
    ]) or die(print_r($resetNb->errorInfo()));

    return $resetNb;
}

function deleteAllIdPieces($id)
{
    $db = dbConnect();

    $deleteIdPieces = $db->prepare('DELETE FROM files_tenant WHERE id_uploading_tenant=:id_uploading_tenant');

    $deleteIdPieces->execute([
        'id_uploading_tenant' => $id,
    ]) or die(print_r($deleteIdPieces->errorInfo()));

    return $deleteIdPieces;
}

function deleteIdPiece($id_file_tenant){
    $db=dbConnect();

    $deleteSpecifiedFile=$db->prepare('DELETE FROM files_tenant WHERE id_uploading_tenant=:id_uploading_tenant AND id_files_tenants=:id_files_tenants');

    $deleteSpecifiedFile->execute([
        'id_uploading_tenant'=>$_SESSION['id'],
        'id_files_tenants'=>$id_file_tenant,
    ])or die(print_r($deleteSpecifiedFile->errorInfo()));

    return $deleteSpecifiedFile;

}

function checkFileNameTenant($pictureName, $id_uploading_tenant)
{

    $db = dbConnect();

    $checkExistingPicturesName = $db->prepare('SELECT file_dir, id_uploading_tenant FROM files_tenant WHERE file_dir=:file_dir AND id_uploading_tenant=:id_uploading_tenant');

    $checkExistingPicturesName->execute([
        'file_dir' => $pictureName,
        'id_uploading_tenant' => $id_uploading_tenant,
    ]) or die(print_r($checkExistingPicturesName->errorInfo()));

    return $checkExistingPicturesName;
};
