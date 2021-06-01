<?php

if(isset($_GET['wrongPassword'])) {

?>
<p style="color: red;">Les mots de passe ne correspond pas</p>
<?php

}

?>

<form action="profileTenant.php" method="post">

    <label for="password">Changez de mot de passe</label>
    <input type="password" name="password" placeholder="****" required>
    
    
    <label for="password">Confirmez le mot de passe</label>
    <input type="password" name="passwordConfirm" placeholder="****" required>

    <input type="submit" value="submit" name="submit-password">

</form>
<br>
<br>
<br>




<form action="profileTenant.php" method="post">

    <label for="name">Changez votre nom</label>
    <input type="text" name="name" placeholder="Votre nom ici" minlength="4" mxlength="20" size="22">
    <br>

    <label for="surname">Changez votre prénom</label>
    <input type="text" name="surname" placeholder="Votre nom ici" minlength="4" mxlength="20" size="22">

    <br>
   


    <label for="phone_number">Changez votre numéro de téléphone</label>
    <input type="tel" name="phone_number" placeholder="your phone" pattern="[0-9]{10}">
    <br>

    <label for="email">Changez votre email</label>
    <input type="email" name="email" placeholder="Votre mail">
    <br>
    <label for="roommate">Changez votre nombre de colocataires :</label>
    <input type="number" name="nb_roommates" pattern="[0-30]">

    <input type="submit" value="submit" name="submit">


</form>

