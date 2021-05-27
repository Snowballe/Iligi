

<form action="registrationLandlord.php" method="post">


    <label for="surname_landlord">Votre prénom  *</label>
    <input type="text" name="surname_landlord" placeholder="Votre prénom" minlength="4" mxlength="20" size="22" required/>
    <br>
    <label for="name_landlord">Entrez votre nom *</label>
    <input type="text" name="name_landlord" placeholder="Votre nom ici" minlength="4" mxlength="20" size="22" required>
    <br>
    <label for="tel_landlord">N° de téléphone : *</label>
    <input type="tel" name="tel_landlord" placeholder="N°" pattern="[0-9]{10}" required>
    <br>
    <label for="password_landlord">Entrez votre mot de passe *</label>
    <input type="password" name="password_landlord" placeholder="****" required>
    <br>
    <label for="email_landlord">Votre email *</label>
    <input type="email" name="email_landlord" placeholder="Votre mail" required>
    <br>
    
    <input type="submit" value="submit" name="submit" >

</form>

<p> Les champs marqués d'un "*" sont obligatoires. </p>
