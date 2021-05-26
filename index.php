<?php 

require 'Views/Components/header.php';

require 'Models/Index.php';

$listUsers = getAllUsers();

require 'Views/indexView.php';

require 'Views/Components/footer.php'

?>