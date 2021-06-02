<?php

require 'Views/Components/headerAdmin.php';

require 'Models/Admin.php';

   if(isset($_POST['submit_search_tenant'])){
       if($_POST['box_search_tenant']!="" || is_int($_POST['box_search_tenant'])){
        $searchedTenants= displayTenants($_POST['box_search_tenant']);
       }else{
        
        echo "fdp";
       }
     
   }

require 'Views/indexViewAdmin.php';

require 'Views/Components/footerAdmin.php'

?>