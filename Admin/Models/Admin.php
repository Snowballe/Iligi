<?php
function finTenantAlike(){
    
    $db=dbConnect() 

    $stmt = $db->prepare('SELECT * FROM tenant WHERE tenant_name LIKE %:term%');

    $stmt->execute(['term' => $searchTerm]);
    $results = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
    json_encode($results);
}
?>