<?php

//   $db=dbConnect();

//   $searchTenantNames=$db->prepare("SELECT id,surname_tenant,name_tenant FROM tenant");

//  $searchTenantNames->execute() or die(print_r($searchTenantNames->errorInfo()));

//  $fetchedTenants=$searchTenantNames->fetchAll();


//   $encodedTenantNames=json_encode($fetchedTenants);

function getTenants()
{
  $db = dbConnect();
  $searchTenantNames = $db->prepare("SELECT id, surname_tenant, name_tenant FROM tenant");
  $searchTenantNames->execute();
  return $searchTenantNames;
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

function displayTenants($tenantToSearch)
{

  $db = dbConnect();

  $searchTenantNames = $db->prepare("SELECT * FROM tenant WHERE name_tenant=:name_tenant");

  $searchTenantNames->execute([
    'name_tenant' => $tenantToSearch,
  ]) or die(print_r($searchTenantNames->errorInfo()));

  $foundTenantNames = $searchTenantNames->fetchAll();



          };

          function uploadFileCommon($file_dir_common)
          {

            $db = dbConnect();


            $upload = $db->prepare('INSERT INTO common (file_dir_common, created_at) VALUES (:file_dir_common, :created_at)');

            date_default_timezone_set('Europe/Paris');

            $upload->execute([
              'file_dir_common' => $file_dir_common,
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