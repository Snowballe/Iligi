<?php

session_start();

require 'Functions/database.fn.php';

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Assets/CSS/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="">

  <link rel="icon" type="image/x-icon" href="../favicon_d1_res.ico">

  <title>Iligi - Admin</title>


</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Iligi - Panneau Administrateur</a>
    <form class="d-flex d-end">
    <a href="index.php" class="btn btn-light mx-3 text-dark">Home</a>
      <a class="btn btn-info" href="../index.php">Retourner à l'accueil</a>
      
    </form>
  </div>
</nav>