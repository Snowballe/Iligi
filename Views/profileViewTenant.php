<div class="container">

    <?php

    if (isset($_GET['wrongPassword'])) {

        ?><p style="color: red;">Les mots de passe ne correspondent pas</p><?php
    }
    
    if (isset($_GET['passwordUpdate'])) {

        ?><p style="color: green;">Le nouveau mot de passe a bien été enregistré</p><?php
                                                                            
    }

    if(isset($_GET['updateSuccess'])){
    ?><p style="color: green;">Vos nouvelles coordonées on été enregistrées</p><?php
                                                                            
    }?>
    
    <div class="row mb-3 justify-content-evenly">
        <div class="col-auto">
            <form action="profileTenant.php" method="post">

                <div class="col-auto">
                    <label class="col-form-label" for="password">Changez votre mot de passe</label>
                    <input class="form-control" type="password" name="password" placeholder="****" required>
                </div>
                <div class="col-auto">
                    <label class="col-form-label" for="password">Confirmez votre mot de passe</label>
                    <input class="form-control" type="password" name="passwordConfirm" placeholder="****" required>
                </div>
                <div class="col-auto">
                    <input class="btn btn-warning" type="submit" value="Changer mon mot de passe" name="submit-password">
                </div>

            </form>
        </div>



        <div class="col-auto">
            <form action="profileTenant.php" method="post">

                <div class="col-auto">
                    <label for="name_surname_tenant">Changez votre nom/prénom</label>
                    <input class="form-control" type="text" name="name_tenant" placeholder="Nom" minlength="4" mxlength="20" size="22">
                    <input class="form-control" type="text" name="surname_tenant" placeholder="Prénom" minlength="2" mxlength="20" size="22">
                </div>

                <div class="col-auto">
                    <label for="phone_number">Changez votre numéro de téléphone</label>
                    <input class="form-control" type="tel" name="phone_number" placeholder="N°" pattern="[0-9]{10}">

                    <label for="email">Changez votre email</label>
                    <input class="form-control" type="email" name="email" placeholder="Votre email">
                    <label for="nb_roommates_tenant" class="form-label">Nombre de colocataires :</label>

                    <select name="nb_roommates_tenant" class="form-select" id="">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="9+">9+</option>
                    </select>
                </div>

                <div class="col-auto">
                    <input class="btn btn-dark" type="submit" value="Changer mes coordonnées" name="submit">
                </div>


            </form>
        </div>
    </div>
</div>