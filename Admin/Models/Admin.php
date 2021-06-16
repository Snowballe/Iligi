<?php

//   $db=dbConnect();

//   $searchTenantNames=$db->prepare("SELECT id,surname_tenant,name_tenant FROM tenant");

//  $searchTenantNames->execute() or die(print_r($searchTenantNames->errorInfo()));

//  $fetchedTenants=$searchTenantNames->fetchAll();


//   $encodedTenantNames=json_encode($fetchedTenants);

function changeUserNotice($textToStore){
  $db=dbConnect();

  $ChangeText=$db->prepare('INSERT INTO admin_user_notice (commercial_notice) VALUES new_commercial_notice=:new_commercial_notice');

  $ChangeText->execute([
    'new_commercial_notice'=>$textToStore,
  ]);

  header('Location: index.php?editSuccess');

}

function getTenants()
{
  $db = dbConnect();
  $searchTenantNames = $db->prepare("SELECT id, surname_tenant, name_tenant FROM tenant");
  $searchTenantNames->execute();
  return $searchTenantNames;
}


function getLandLords(){
  $db = dbConnect();
  $searchLandlordNames = $db->prepare("SELECT id_landlord, surname_landlord, name_landlord, corporate_name_landlord FROM landlord");
  $searchLandlordNames->execute();
  return $searchLandlordNames;
}

function deleteLease($leaseToDelete)
{
  $db = dbConnect();
  $delQuery = $db->prepare("DELETE * FROM common where id=:id");
  $delQuery->execute([
    'id' => $leaseToDelete,
  ]);
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
