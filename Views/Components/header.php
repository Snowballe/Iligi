<?php

session_start();

require 'Functions/database.fn.php';

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iligi</title>
  <link rel="icon" type="image/x-icon" href="Assets\img\ILIGIICON.ico">
  <link rel="stylesheet" href="Assets/CSS/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="Assets/CSS/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="bg-light">
    <div class="container-fluid">
      <div class="row">
        <nav class="col navbar navbar-expand-lg navbar-light">

          <a class="navbar-brand" href="index.php">
            <img src="Assets\img\ILIGI-COULEURS-RVB-1920w.png" alt="Logo Iligi" width="190" height="90">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div id="navbarContent" class="collapse navbar-collapse">

            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil</a>
              </li>
            
              <li class="nav-item">
              <a href="pricing.php" class="nav-link">Tarifs</a>
              </li>
              <?php if (isset($_SESSION['connected'])) {
                if (isset($_SESSION['id'])) { //If it's a tenant
                  ?> <li class="nav-item">
                    <a class="nav-link" href="indexTenant.php">Espace Locataire</a>
                  </li><?php
                  echo ("</ul><ul class=\"navbar-nav ms-auto\"><li class=\"nav-item\"><p class=\"nav-link\">Bonjour, " . $_SESSION['surname_tenant'] . "</p></li>");
              ?>
                  <li class="nav-item">
                    <a href="profileTenant.php" class="nav-link btn btn-outline-info">Modifier votre profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-info" href="logout.php">D??connexion</a>
                  </li>
            </ul>
                  <?php
                } else { //Else it is a landlord

                  if ($_SESSION['corporate_name_landlord'] != NULL) {

                  ?><li class="nav-item">
                      <a class="nav-link" href="indexLandlord.php">Espace Propri??taire</a>
                    </li><?php

                          echo ("</ul><ul class=\"navbar-nav ms-auto\"><li class=\"nav-item\"><p class=\"nav-link \" href=\"\" tabindex=\"-1\" aria-disabled=\"true\">Bonjour ?? vous " . $_SESSION['corporate_name_landlord'] . "!</p></li>"); ?>
           
              <li class="nav-item">
                <a href="profileLandlord.php" class="nav-link btn btn-outline-info">Modifier votre profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-info" href="logout.php">D??connexion</a>
              </li>
            </ul>
          <?php

                  } else { //Sinon on dit bonjour au pr??nom
                    echo ("<li class=\"nav-item\"><p class=\"fst-normal\">Bonjour ?? toi " . $_SESSION['surname_landlord'] . " !</p></li>");
          ?><li class="nav-item">
              <a class="nav-link" href="indexLandlord.php">Espace Propri??taire</a>
            </li>
        <?php
                  }
                }
              } else { //Not connected
        ?>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link btn btn-light text-dark" href="loginTenant.php">Connection locataires</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-dark text-light" href="loginLandlord.php">Connection propri??taires</a>
          </li>
        </ul>
      <?php
              } ?>


      </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>