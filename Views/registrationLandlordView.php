<div class="container">

    <form action="registrationLandlord.php" method="post">

        <div class="row justify-content-center">

            <div class="col-auto">
                <label for="surname_name_tenant">Nom / Prénom :<span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="name_landlord" placeholder="Nom..." minlength="2" mxlength="20" size="22" required />

                <input type="text" class="form-control" name="surname_landlord" placeholder="Prénom..." minlength="2" mxlength="20" size="22" required />

            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-auto">
                <label class=" mt-3" for="corporate_name_landlord ">Nom de société (non obligatoire)</label>
                <input type="text" class="form-control" name="corporate_name_landlord" placeholder="Nom de société" minlength="1">
            </div>
        </div>
        <div class="row justify-content-center mb-3">

            <div class="col-auto">
                <label for="tel_landlord">Numéro de téléphone:<span style="color:red;">*</span></label>
                <input type="tel" class="form-control" name="tel_landlord" placeholder="N° de téléphone" pattern="[0-9]{10}" required>

            </div>
        </div>
        
        <div class="row justify-content-center mb-3">

            <div class="col-auto">

                <label for="email_password_landlord">Email / Mot de passe :<span style="color:red;">*</span></label>
                <input type="email" class="form-control" name="email_landlord" placeholder="Votre mail" required>
                <input type="password" class="form-control" name="password_landlord" placeholder="****" required>
            </div>
        </div>


        <div class="row justify-content-center mb-3">
            <div class="col-auto">
                <input class="btn btn-primary" type="submit" name="submit" value="Je m'inscris !">

            </div>

            <p> Les champs marqués d'un "<span style="color:red;">*</span>" sont obligatoires. </p>
        </div>
    </form>
</div>