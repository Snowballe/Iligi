

<form action="registrationTenant.php" method="post">

    <label for="name_tenant">Entrez votre nom *</label>
    <input type="text" name="name_tenant" placeholder="Votre nom ici" minlength="4" mxlength="20" size="22" required>
    <br>
    <label for="surname_tenant">Votre prénom  *</label>
    <input type="text" name="surname_tenant" placeholder="Votre prénom" minlength="4" mxlength="20" size="22" required/>
    <br>
    <label for="tel_tenant">N° de téléphone : *</label>
    <input type="tel" name="tel_tenant" placeholder="N°" pattern="[0-9]{10}" required>
    <br>
    <label for="password_tenant">Entrez votre mot de passe *</label>
    <input type="password" name="password_tenant" placeholder="****" required>
    <br>
    <label for="email_tenant">Votre email *</label>
    <input type="email" name="email_tenant" placeholder="Votre mail" required>
    <br>
    <label for="professional_situation_tenant">Votre situation professionelle : *</label>
    <select name="professional_situation_tenant">
    <option value="">Etudiant</option>
    <option value="">Salarié</option>
    <option value="">Employeur</option>
    <option value="">Sans emploi</option>
    </select>
    <br>
    <label for="nb_roommates_tenant">Nombre de colocataires *</label>
    <br>
    <input type="text" name="nb_roommates_tenant" required>
    
    <input type="submit" value="submit" name="submit" >

</form>

<p> Les champs marqués d'un "*" sont obligatoires. </p>
