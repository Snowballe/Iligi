<h3>Panneau Administrateur Iligi</h3>
<br>
<h4>Générateur de bail</h4>
  <!-- 
--------------------------------------

#TODO : proposition d'autocomplétion dans la barre de recherche (peut-être un jour (sûrement pas))
Utilisation de jquery
--------------------------------------
  -->
  <form action="index.php" method="post">
  <div class = "ui-widget">
         <label for ="automplete_tenant">Trouver un locataire: </label>
         <input type="text" id = "automplete_tenant" name="box_search_tenant">
         <input type="submit" name="submit_search_tenant">

 </form>

  <p>prénom : <?php echo $searchedTenants['surname_tenant']; ?></p>
    
    <p>Nom : <?php echo $searchedTenants['name_tenant'];?></p>
    <p>Id : <?php echo $searchedTenants['id'] ?></p>
    <br><br>

 
 <!--
<form action="index.php" method="post">
 
    <label for="tenant_search">Rechercher un locataire</label>
    <input  type="text" name="tenant_search" id="autocomplete_search">
    <input type="submit" name="submit_tenant_search">
  <br>
  

    <label for="landlordSearch">Rechercher un Propriétaire</label>
    <input type="text" id="landlord_search" name="landlord_search" placeholder="Votre propriétaire">

    <input type="submit" name="submit_to_modelo" value="Envoyer sur Modelo">    
</form>
-->