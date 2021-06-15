<div class="container">

  <div class="row mb-3">
    <div class="col-auto">
      <label for="search_tenant" class="form-label text-light">Trouver un client</label>
      <input name="box_search_tenant" class="form-control" id="searchInput" type="text" placeholder="Rechercher...">
    </div>




  </div>


  <!-- The 2 lists -->
  <div class="row">
    <div class="col-12 col-md-6 my-3">
      <div class="card">
        <div class="card-header">
          <h5>Liste des locataires</h5>
        </div>
        <div class="card-body">
          <?php
          foreach ($listTenants->fetchAll() as $listTenant) {

            echo "<div class=\"row my-1\" id=\"lessonList\"><div class=\"#lessonList col-12\">" . $listTenant['surname_tenant'] . " " . $listTenant['name_tenant'] . " " . "<input name=\"chose_tenant\" onclick=\"document.getElementById('tenant_chosen').value = '" . $listTenant['surname_tenant'] . ' ' . $listTenant['name_tenant'] . ' ID: ' . $listTenant['id'] . "'\" class=\"btn btn-light btn-sm\"type=\"submit\" value=\"Choisir\"></div></div>";
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
              echo "<div class=\"row my-1\" id=\"lessonList\"><div class=\"#lessonList col-12\">" . $listLandlord['surname_landlord'] . " " . $listLandlord['name_landlord'] . " " . /*<--Spaghetti code, easiest solution to add whitespace for my button*/ "<input onclick=\"document.getElementById('landlord_chosen').value = '" . $listLandlord['surname_landlord'] . ' ' . $listLandlord['name_landlord'] . ' ID: ' . $listLandlord['id_landlord'] . "'\" name=\"chose_landlord\" class=\"btn btn-light btn-sm\"type=\"submit\" value=\"Choisir\"></div></div>";
            } else {
              echo "<div class=\"row my-1\" id=\"lessonList\"><div class=\"#lessonList col-12\">" . $listLandlord['surname_landlord'] . " " . $listLandlord['name_landlord'] . " de chez " . $listLandlord['corporate_name_landlord'] . " " . "<input onclick=\"document.getElementById('landlord_chosen').value = '" . $listLandlord['corporate_name_landlord'] . ' ID: ' . $listLandlord['id_landlord'] . "'\" name=\"chose_landlord_corporate\" class=\"btn btn-light btn-sm\"type=\"submit\" value=\"Choisir\"></div></div>";
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>


  <!----------- Modelo link ----------------------------------->
  <div class="row justify-content-center my-3">
    <div class="col-auto">
      <a class="btn btn-primary " href="https://fnaim.modelo.fr/" target="_blank">Confimer et aller sur Modelo</a></button>
    </div>
  </div>
  <!-- ----------------------------------------------------- -->


  <!-- Send to DB ----------------------------- -->
  <form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row form-check-inline my-5 d-flex justify-content-center">

      <div class="col-auto">
        <input id="tenant_chosen" name="tenant_chosen" class="form-control mt-3" type="text" placeholder="Aucun locataire choisi" readonly>
        <button onclick="document.getElementById('tenant_chosen').value = ''" class="form-control">Désélectionner</button>
      </div>

      <div class="col-auto">
        <input style="font-size:large;" class="form-control bg-secondary text-light text-center" type="text" value="Ajouter le bail rempli" aria-label="Ajouter le bail rempli" readonly>
        <input class="form-control" type="file" name="file_common"> <!-- input case du fichier à charger -->
        <input class="form-control btn btn-primary" type="submit" name="submit_file_common">
      </div>

      <div class="col-auto">
        <input id="landlord_chosen" name="landlord_chosen" class="form-control mt-3" type="text" placeholder="Aucun propriétaire choisi" readonly>
        <button onclick="document.getElementById('landlord_chosen').value = ''" class="form-control">Désélectionner</button>
      </div>

    </div>
  </form>

  <!-- ----------------------------------------------------- -->

  <!-- Button to delete lease (we souldn't delete one so i'll just comment it out + for now idk how to delete a file from the server) -->
  <!--
  <div class="row">
    <div class="col">
      <form action="index.php" method="post">

        <label for="deleting_lease" style="color:red;">SUPPRIMER UN BAIL (restera sur Modelo quand même)</label><br>
        <input class="btn btn-danger" type="submit" name="delete_lease">
      </form>
    </div>
  </div>
-->
</div>