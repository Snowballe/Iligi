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



<form action="loginLandlord.php" method="post">

    <label for="email_landlord">Mettez votre Email</label>
    <input type="email" name="email_landlord">

    <br>

    <label for="password_landlord"> Mettez votre Password</label>
    <input type="password" name="password_landlord">

    <input type="submit" value="submit" name="submit">


</form>

<p>Pas encore de compte propriétaire ? c'est <a href="registrationLandlord.php">ici</a> !</p>
