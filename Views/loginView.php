
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



<form action="login.php" method="post">

    <label for="email">Mettez votre Email</label>
    <input type="email" name="email">

    <br>

    <label for="password"> Mettez votre Password</label>
    <input type="password" name="password">

    <input type="submit" value="submit" name="submit">


</form>

<p> Pas encore de compte ? c'est <a href="registration.php">ici</a> !</p>
