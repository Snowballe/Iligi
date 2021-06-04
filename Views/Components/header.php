<?php

session_start();

require 'Functions/database.fn.php';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iligi - Accueil</title>
    <link rel="icon" type="image/x-icon" href="https://static-cdn.website-editor.net/runtime/favicon_d1_res.ico">
    <link rel="stylesheet" href="Assets/CSS/bootstrap/css/bootstrap.css">
</head>
<body>
<div class="bg-light">
    <div class="container">
      <div class="row">
        <nav class="col navbar navbar-expand-lg navbar-light">
          
        <a class="navbar-brand" href="index.php">
        <img src="Assets/img/iligilogotrans.png" alt="Logo Iligi" width="100" height="60">  
        </a><!--Iligi mot à garder pour plus tard-->
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div id="navbarContent" class="collapse navbar-collapse">
            
          <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cours</a>
              </li>
            
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>