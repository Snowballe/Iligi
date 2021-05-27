<?php
require 'Views/Components/header.php';

require 'Models/IndexLandlord.php';

$listUsers = getAllUsers();
 
require 'Views/indexViewLandlord.php';
require 'Views/Components/footer.php';
?>