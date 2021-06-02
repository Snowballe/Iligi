<?php

session_start();

require 'Functions/database.fn.php';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Script pour l'autocomplétion (JQuery) -->
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    
    
    <title>Iligi - Admin</title>
    
    
   </head>
   
   <body>
   <script>
         $(function() {
            var availableTutorials = [
               "ActionScript",
               "Bootstrap",
               "C",
               "C++",
            ];
            $( "#automplete-2" ).autocomplete({
               source: availableTutorials,
               autoFocus:true
            });
         });
      </script>
      


