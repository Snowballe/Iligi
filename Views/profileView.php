<?php

if(isset($_GET['wrongPassword'])) {

?>
<p style="color: red;">Les mots de passe ne correspond pas</p>
<?php

}

?>

<form action="profile.php" method="post">

    <label for="password">Changez de mot de passe</label>
    <input type="password" name="password" placeholder="****" required>
    
    
    <label for="password">Confirmez le mot de passe</label>
    <input type="password" name="passwordConfirm" placeholder="****" required>

    <input type="submit" value="submit" name="submit-password">

</form>
<br>
<br>
<br>




<form action="profile.php" method="post">

    <label for="name">Changez votre nom</label>
    <input type="text" name="name" placeholder="Votre nom ici" minlength="4" mxlength="20" size="22">
    <br>

    <label for="surname">Changez votre prénom</label>
    <input type="text" name="surname" placeholder="Votre nom ici" minlength="4" mxlength="20" size="22">
    <br>

    <label for="country_code">Changez votre numéro de pays</label>
    <select name="country_code">
        <option <?php htmlspecialchars( print_r('value="+33"') ); ?> selected > France (+33)</option>
        <option <?php htmlspecialchars( print_r('value="+49"') ); ?> >Allemagne (+49)</option>
        <option <?php htmlspecialchars( print_r('value="+32"') ); ?> >Belgique (+32)</option>
        <option <?php htmlspecialchars( print_r('value="+359"') ); ?> >Bulgarie (+359)</option>
        <option <?php htmlspecialchars( print_r('value="+357"') ); ?> >Chypre (+357)</option>
        <option <?php htmlspecialchars( print_r('value="+385"') ); ?> >Croatie (+385)</option>
        <option <?php htmlspecialchars( print_r('value="+45"') ); ?> >Danemark (+45)</option>
        <option <?php htmlspecialchars( print_r('value="+34"') ); ?> >Espagne (+34)</option>
        <option <?php htmlspecialchars( print_r('value="+372"') ); ?> >Estonie (+372)</option>
        <option <?php htmlspecialchars( print_r('value="+358"') ); ?> >Finlande (+358)</option>
        <option <?php htmlspecialchars( print_r('value="+30"') ); ?> >Grèce (+30)</option>
        <option <?php htmlspecialchars( print_r('value="+36"') ); ?> >Hongrie (+36)</option>
        <option <?php htmlspecialchars( print_r('value="+353"') ); ?> >Irlande (+353)</option>
        <option <?php htmlspecialchars( print_r('value="+354"') ); ?> >Islande (+354)</option>
        <option <?php htmlspecialchars( print_r('value="+39"') ); ?> >Italie (+39)</option>
        <option <?php htmlspecialchars( print_r('value="+371"') ); ?> >Lettonie (+371)</option>
        <option <?php htmlspecialchars( print_r('value="+423"') ); ?> >Liechtenstein (+423)</option>
        <option <?php htmlspecialchars( print_r('value="+370"') ); ?> >Lituanie (+370)</option>
        <option <?php htmlspecialchars( print_r('value="+356"') ); ?> >Malte (+356)</option>
        <option <?php htmlspecialchars( print_r('value="+47"') ); ?> >Norvège (+47)</option>
        <option <?php htmlspecialchars( print_r('value="+31"') ); ?> >Pays Bas (+31)</option>
        <option <?php htmlspecialchars( print_r('value="+48"') ); ?> >Pologne (+48)</option>
        <option <?php htmlspecialchars( print_r('value="+351"') ); ?> >Portugal (+351)</option>
        <option <?php htmlspecialchars( print_r('value="+420"') ); ?> >République Chèque (+420)</option>
        <option <?php htmlspecialchars( print_r('value="+40"') ); ?> >Roumanie (+40)</option>
        <option <?php htmlspecialchars( print_r('value="+44"') ); ?> >Royaume Uni (+44)</option>
        <option <?php htmlspecialchars( print_r('value="+421"') ); ?> >Slovaquie (+421)</option>
        <option <?php htmlspecialchars( print_r('value="+386"') ); ?> >Slovénie (+386)</option>
        <option <?php htmlspecialchars( print_r('value="+46"') ); ?> >Suède (+46)</option>
        <option <?php htmlspecialchars( print_r('value="+41"') ); ?> >Suisse (+41)</option>
    </select>
    <br>

    <label for="phone_number">Changez votre numéro de téléphone</label>
    <input type="tel" name="phone_number" placeholder="your phone" pattern="[0-9]{10}">
    <br>

    <label for="email">Changez votre email</label>
    <input type="email" name="email" placeholder="Votre mail">
    <br>
    <br>

    <input type="submit" value="submit" name="submit">
</form>