<div class="container">




  <div class="row mb-3">
    <div class="col-auto">
      <label for="search_tenant" class="form-label">Trouver un client</label>
      <input name="box_search_tenant" class="form-control" id="searchInput" type="text" placeholder="Rechercher...">
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6 my-3">
      <div class="card">
        <div class="card-header">
          <h5>Liste des locataires</h5>
        </div>
        <div class="card-body">
          <?php
          foreach ($listTenants->fetchAll() as $listTenant) {

            echo "<div class=\"row\" id=\"lessonList\"><div class=\"#lessonList col-12\">" . $listTenant['surname_tenant'] . " " . $listTenant['name_tenant'] . " ID: " . $listTenant['id'] ." ". "<input name=\"chose_tenant\" class=\"btn btn-light btn-sm\"type=\"submit\" value=\"Choisir\"></div></div>";
          }
          ?></div>
      </div>
    </div>
    <div class="col-12 col-md-6 my-3">
      <div class="card">
        <div class="card-header">
          <h5>Liste des propriétaires</h5>
        </div>
        <div class="card-body">
          <?php
          foreach ($listLandlords->fetchAll() as $listLandlord) {
            if ($listLandlord['corporate_name_landlord'] == null) {
              echo "<div class=\"row\" id=\"lessonList\"><div class=\"#lessonList col-12\">" . $listLandlord['surname_landlord'] . " " . $listLandlord['name_landlord'] . " ID: " . $listLandlord['id_landlord'] ." ". /*<--Spaghetti code, easiest solution to add whitespace for my button*/"<form action=\"index.php\" method=\"post\"><input name=\"chose_landlord\" class=\"btn btn-light btn-sm\"type=\"submit\" value=\"Choisir\"></form></div></div>";
            } else {
              echo "<div class=\"row\" id=\"lessonList\"><div class=\"#lessonList col-12\">" . $listLandlord['surname_landlord'] . " " . $listLandlord['name_landlord'] . " de chez " . $listLandlord['corporate_name_landlord'] . " ID: " . $listLandlord['id_landlord'] ." "."<input name=\"chose_landlord_corporate\" class=\"btn btn-light btn-sm\"type=\"submit\" value=\"Choisir\"></div></div>";
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>

 <!-- <div class="row" id="lessonList">
    <div class="#lessonList col-10">" . $listLandlord['surname_landlord'] . " " . $listLandlord['name_landlord'] . " ID: " . $listLandlord['id_landlord'] . "</div><div class="col-2"><input class="btn btn-secondary"type="submit" value="Choisir"></div></div>
-->


  <div class="row justify-content-center">
    <div class="col-auto">
      <a class="btn btn-primary " href="https://doc.modelo.fr/" target="_blank">Confimer et aller sur Modelo</a></button>
    </div>
  </div>

  <form action="index.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label" for="files_common">Ajouter le bail rempli</label>
      <input class="form-control" type="file" name="file_common"> <!-- input case du fichier à charger -->
      <input type="submit" name="submit_file_common"> <!-- Bouton ok -->
    </div>
  </form>
  <div class="row">
    <div class="col">
      <form action="index.php" method="post">

        <label for="deleting_lease" style="color:red;">SUPPRIMER UN BAIL (restera sur Modelo quand même)</label><br>
        <input class="btn btn-danger" type="submit" name="delete_lease">
      </form>
    </div>
  </div>

</div>