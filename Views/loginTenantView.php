<?php

if (isset($_GET['wrongEmail'])) {

?>
    <p style="color: red;">Mauvais email, veuillez réessayer</p>
<?php
};

if (isset($_GET['wrongPassword'])) {

?>
    <p style="color: red;">Mauvais mot de passe, veuillez réessayer</p>
<?php

}

?>


<div class="container">
    <form action="loginTenant.php" method="post">
        <div class="row mb-3 justify-content-center">
            <div class="col-auto">

                <label for="email_tenant" class="form-label">Mettez votre Email</label>
                <input type="email" name="email_tenant" class="form-control" placeholder="nom@exemple.fr">

            </div>
        </div>
        <div class="mb-3 row justify-content-center">
            <div class="col-auto">
                <label for="password_tenant" class="form-label"> Mettez votre Password</label>

                <input type="password" class="form-control" name="password_tenant" placeholder="****">
            </div>
        </div>
        <div class="mb-3 row justify-content-center">

            <div class="col-auto">
                <button class="btn btn-primary mb-3" type="submit" name="submit">Confirmer</button>
            </div>
        </div>
    </form>
    <div id="carouselControls" class="carousel slide carousel-fade" data-ride="carousel">
    

    <div class="row justify-content-center">
        <div class="col-auto">
            <p>Pas encore de compte locataire ? c'est <a class="text-dark" href="registrationTenant.php">ici</a> !</p>

        </div>
    </div>
</div>
