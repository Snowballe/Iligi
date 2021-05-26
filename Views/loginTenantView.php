
<?php

if(isset($_GET['wrongEmail'])) {

    ?>
    <p style="color: red;">Mauvais email, veuillez réessayer</p>
    <?php
};

if(isset($_GET['wrongPassword'])) {

    ?>
    <p style="color: red;">Mauvais mot de passe, veuillez réessayer</p>
    <?php

}

?>



<form action="loginTenant.php" method="post">

    <label for="email">Mettez votre Email</label>
    <input type="email" name="email" required>

    <br>

    <label for="password"> Mettez votre Password</label>
    <input type="password" name="password" required>

    <input type="submit" value="submit" name="submit">


</form>

<p> Pas encore de compte ? c'est <a href="registrationTenant.php">ici</a> !</p>
