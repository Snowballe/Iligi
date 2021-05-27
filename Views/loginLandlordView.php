<?php

if(isset($_GET['wrongEmail'])) {

    ?>
    <p style="color: red;">Mauvais email de bénéficiaire, veuillez réessayer.</p>
    <?php
};

if(isset($_GET['wrongPassword'])) {

    ?>
    <p style="color: red;">Mauvais mot de passe, veuillez réessayer</p>
    <?php

}

?>



<form action="loginBeneficiaries.php" method="post">

    <label for="email_beneficiaries">Mettez votre Email</label>
    <input type="email" name="email">

    <br>

    <label for="password_beneficiaries"> Mettez votre Password</label>
    <input type="password" name="password">

    <input type="submit" value="submit" name="submit">


</form>

<p>Pas encore de compte propriétaire ? c'est <a href="registrationLandlord.php">ici</a> !</p>
