<?php
require 'Views/Components/header.php';

require 'Models/IndexTenant.php';

$listUsers = getAllUsers();
 
require 'Views/indexViewTenant.php';
require 'Views/Components/footer.php';
?>