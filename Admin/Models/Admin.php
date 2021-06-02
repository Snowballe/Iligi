<?php

    
  $db=dbConnect();

  $searchTenantNames=$db->query("SELECT * FROM tenant WHERE name_tenant")or die(print_r($searchTenantNames->errorInfo()));
 
  $yes=$searchTenantNames->fetch(\PDO::FETCH_ASSOC);
  echo $yes[4];
  return $yes;




?>