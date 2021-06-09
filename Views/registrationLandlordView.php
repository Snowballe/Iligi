<div class="container">

    <form action="registrationLandlord.php" method="post">

        <div class="row justify-content-center align-bottom">

            <div class="col-auto">
                <input type="text" class="form-control" name="surname_landlord" placeholder="Prénom..." minlength="2" mxlength="20" size="22" required />

                <input type="text" class="form-control" name="name_landlord" placeholder="Nom..." minlength="2" mxlength="20" size="22" required />
            </div>
            <div class="col-auto">
                <label class=" mt-3" for="corporate_name_landlord ">Si vous êtes une société, entrez son nom :</label>
                <input type="text" class="form-control" name="corporate_name_landlord" placeholder="Nom de société" minlength="1">
            </div>

            <div class="col-auto">
                <input type="tel" class="form-control" name="tel_landlord" placeholder="N° de téléphone" pattern="[0-9]{10}" required>
                <input type="email" class="form-control" name="email_landlord" placeholder="Votre mail" required>
                <input type="password" class="form-control" name="password_landlord" placeholder="****" required>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-auto">
                <input class="btn btn-primary" type="submit" name="submit">


                <p> Les champs marqués d'un "*" sont obligatoires. </p>
            </div>
        </div>
    </form>
</div>