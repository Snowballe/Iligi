<?php

  //   $db=dbConnect();

  //   $searchTenantNames=$db->prepare("SELECT id,surname_tenant,name_tenant FROM tenant");
 
  //  $searchTenantNames->execute() or die(print_r($searchTenantNames->errorInfo()));

  //  $fetchedTenants=$searchTenantNames->fetchAll();
 

  //   $encodedTenantNames=json_encode($fetchedTenants);
 
   
function displayTenants($tenantToSearch){
  
  $db=dbConnect();
  
  $searchTenantNames=$db->prepare("SELECT * FROM tenant WHERE name_tenant LIKE '%box_search_tenant%'=:box_search_tenant");
  
  $searchTenantNames->execute([
    'box_search_tenant'=>$tenantToSearch,
  ])or die(print_r($searchTenantNames->errorInfo()));

  $foundTenantNames=$searchTenantNames->fetch();

return $foundTenantNames;
};



?>