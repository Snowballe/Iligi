<div class="container">

    <form action="registrationLandlord.php" method="post">

        <div class="row justify-content-center">
            <div class="col-auto">
                <label for="surname_landlord">Votre prénom/nom : *</label>
                <input type="text" class="form-control" name="surname_landlord" placeholder="Prénom..." minlength="2" mxlength="20" size="22" required />
            
                <input type="text" class="form-control" name="name_landlord" placeholder="Nom..." minlength="2" mxlength="20" size="22" required />
            </div>
            <div class="col-auto">
                <label class=" mt-3" for="corporate_name_landlord ">Si vous êtes une société, entrez son nom :</label>
                <input type="text" class="form-control" name="corporate_name_landlord" placeholder="Nom de société" minlength="1">
            </div>
        </div>

        <div class="row">
            <div class="col-auto">
                <label for="tel_landlord">N° de téléphone : *</label>
                <input type="tel" class="form-control" name="tel_landlord" placeholder="N°" pattern="[0-9]{10}" required>
            </div>
        </div>

        <div class="row">
            <div class="col-auto">
                <label for="email_landlord">Votre email *</label>
                <input type="email" class="form-control" name="email_landlord" placeholder="Votre mail" required>
            </div>
            <div class="col-auto">
                <label for="password_landlord">Entrez votre mot de passe *</label>
                <input type="password" class="form-control" name="password_landlord" placeholder="****" required>
            </div>

        </div>

        <input type="submit" value="submit" name="submit">

    </form>

    <p> Les champs marqués d'un "*" sont obligatoires. </p>
</div>