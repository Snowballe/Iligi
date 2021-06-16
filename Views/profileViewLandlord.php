<div class="container">

    <?php

    if (isset($_GET['wrongPassword'])) {

        ?><p style="color: red;">Les mots de passe ne correspondent pas</p><?php
    }
    
    if (isset($_GET['passwordUpdate'])) {

        ?><p style="color: green;">Le nouveau mot de passe a bien été enregistré</p><?php
                                                                            
    }

    if(isset($_GET['updateSuccess'])){
    ?><p style="color: green;">Vos nouvelles coordonnées ont été enregistrées</p><?php
                                                                            
    }?>
    
    <div class="row mb-3 justify-content-evenly">
        <div class="col-auto">
            <form action="profileLandlord.php" method="post">

                <div class="col-auto">
                    <label class="col-form-label" for="password">Changez votre mot de passe</label>
                    <input class="form-control" type="password" name="password" placeholder="****" required>
                </div>
                <div class="col-auto">
                    <label class="col-form-label" for="password">Confirmez votre mot de passe</label>
                    <input class="form-control" type="password" name="passwordConfirm" placeholder="****" required>
                </div>
                <div class="col-auto">
                    <input class="btn btn-light" type="submit" value="Changer mon mot de passe" name="submit-password_landlord">
                </div>

            </form>
        </div>



        <div class="col-auto">
            <form action="profileLandlord.php" method="post">

                <div class="col-auto">
                    <label for="name_surname_landlord">Changez votre nom/prénom</label>
                    <input class="form-control" type="text" name="name_landlord" placeholder="Nom" minlength="4" mxlength="20" size="22">
                    <input class="form-control" type="text" name="surname_landlord" placeholder="Prénom" minlength="2" mxlength="20" size="22">
                </div>

                <div class="col-auto">
                    <label for="phone_number">Changez votre numéro de téléphone</label>
                    <input class="form-control" type="tel" name="phone_number" placeholder="N°" pattern="[0-9]{10}">

                    <label for="email">Changez votre email</label>
                    <input class="form-control" type="email" name="email" placeholder="Votre email">
            

                </div>

                <div class="col-auto">
                    <input class="btn btn-light" type="submit" value="Changer mes coordonnées" name="submit">
                </div>


            </form>
        </div>
    </div>
</div>