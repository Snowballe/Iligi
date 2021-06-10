<?php

if (isset($_GET['wrongEmail'])) {

?>
    <div class="container">
        <p style="color: red;">Mauvais email, veuillez réessayer.</p>
    <?php
};

if (isset($_GET['wrongPassword'])) {

    ?>
        <p style="color: red;">Mauvais mot de passe, veuillez réessayer</p>
    <?php

}

    ?>



    <form action="loginLandlord.php" method="post">
        <div class="row mb-3 justify-content-center">
            <div class="col-auto">

                <label for="email_landlord" class="form-label">Mettez votre Email</label>
                <input type="email" name="email_landlord" class="form-control" placeholder="nom@exemple.fr">

            </div>
        </div>
        <div class="mb-3 row justify-content-center">
            <div class="col-auto">
                <label for="password_landlord" class="form-label"> Mettez votre Password</label>

                <input type="password" class="form-control" name="password_landlord" placeholder="****">
            </div>
        </div>
        <div class="mb-3 row justify-content-center">

            <div class="col-auto">
                <button class="btn btn-primary mb-3" type="submit" name="submit">Confirmer</button>
            </div>
        </div>
    </form>


    <div class="row justify-content-center">
        <div class="col-auto">
            <p>Pas encore de compte propriétaire ? c'est <a href="registrationLandlord.php">ici</a> !</p>

        </div>
    </div>
    </div>