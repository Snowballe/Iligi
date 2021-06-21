<div class="container">
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

    <div class="row my-5 justify-content-center">
        <div class="col-auto">

            <div class="card">
                <h5 class="card-header">Accès à mon espace propriétaire</h5>
                <div class="card-body">

                    <form action="loginLandlord.php" method="post">
                        <div class="row my-3 justify-content-center">
                            <div class="col-auto">



                                <label for="email_landlord" class="form-label">Entrez votre email</label>
                                <input type="email" name="email_landlord" class="form-control" placeholder="nom@exemple.fr">

                            </div>
                        </div>
                        <div class="mb-3 row justify-content-center">
                            <div class="col-auto">
                                <label for="password_landlord" class="form-label">Entrez votre mot de passe</label>

                                <input type="password" class="form-control" name="password_landlord" placeholder="****">
                            </div>
                        </div>
                        <div class="mb-3 row justify-content-center">

                            <div class="col-auto">
                                <button class="btn btn-primary mb-3" type="submit" name="submit">Confirmer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
       


                <div class="row justify-content-center">
                    <div class="col-auto">
                        <p>Si vous n'avez pas de compte propriétaire, veuillez vous <a class="text-dark" href="registrationLandlord.php">inscrire ici</a>.</p>

                    </div>
                </div>
            
        </div>
    </div>
    