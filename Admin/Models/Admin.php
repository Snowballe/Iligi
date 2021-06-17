<?php

//   $db=dbConnect();

//   $searchTenantNames=$db->prepare("SELECT id,surname_tenant,name_tenant FROM tenant");

//  $searchTenantNames->execute() or die(print_r($searchTenantNames->errorInfo()));

//  $fetchedTenants=$searchTenantNames->fetchAll();


//   $encodedTenantNames=json_encode($fetchedTenants);

function changeUserNotice($textToStore){
  $db=dbConnect();

  $ChangeText=$db->prepare('UPDATE admin_user_notice SET commercial_notice=:new_commercial_notice WHERE id_notice=1');

  $ChangeText->execute([
    'new_commercial_notice'=>$textToStore,
  ])or die(print_r($ChangeText->errorInfo()));;

  header('Location: index.php?editSuccess');

}

function getNotice(){
  $db=dbConnect();

  $getText=$db->prepare('SELECT commercial_notice FROM admin_user_notice WHERE id_notice=1');

  $getText->execute()or die(print_r($getText->errorInfo()));;

  return $getText;
}

function getTenants()
{
  $db = dbConnect();
  $searchTenantNames = $db->prepare("SELECT id, surname_tenant, name_tenant FROM tenant");
  $searchTenantNames->execute()or die(print_r($searchTenantNames->errorInfo()));;
  return $searchTenantNames;
}


function getLandLords(){
  $db = dbConnect();
  $searchLandlordNames = $db->prepare("SELECT id_landlord, surname_landlord, name_landlord, corporate_name_landlord FROM landlord");
  $searchLandlordNames->execute()or die(print_r($searchLandlordNames->errorInfo()));;
  return $searchLandlordNames;
}

function deleteLease($leaseToDelete)
{
  $db = dbConnect();
  $delQuery = $db->prepare("DELETE * FROM common where id=:id");
  $delQuery->execute([
    'id' => $leaseToDelete,
  ])or die(print_r($delQuery->errorInfo()));;
  return $delQuery;
};


function uploadFileCommon($file_dir_common, $idTenant, $idLandlord)
{

  $db = dbConnect();


  $upload = $db->prepare('INSERT INTO common (file_dir_common, id_landlord_concerned, id_tenant_concerned, created_at) VALUES (:file_dir_common, :id_landlord_concerned, :id_tenant_concerned, :created_at)');

  date_default_timezone_set('Europe/Paris');

  $upload->execute([
    'file_dir_common' => $file_dir_common,
    'id_landlord_concerned'=>$idLandlord,
    'id_tenant_concerned'=>$idTenant,
    'created_at' => date('Y-m-d H:i:s'),
  ]) or die(print_r($upload->errorInfo()));

  return $upload;
};

function checkFileNameCommon($pictureName)
{

  $db = dbConnect();

  $checkExistingPicturesName = $db->prepare('SELECT file_dir_common FROM common WHERE file_dir_common=:file_dir_common');

  $checkExistingPicturesName->execute([
    'file_dir_common' => $pictureName,
  ]) or die(print_r($checkExistingPicturesName->errorInfo()));

  return $checkExistingPicturesName;
};
?>
