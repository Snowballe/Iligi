<h3>Ajouter un bénéficiaires</h3>
<br>
<form action="index.php" method="post">

    <label for="firstname_beneficiaries">Votre prénom *</label>
    <input type="text" name="firstname_beneficiaries" placeholder="Votre prénom" minlength="4" mxlength="20" size="22" required/>
    <br>
    <label for="name_beneficiaries">Votre nom *</label>
    <input type="text" name="name_beneficiaries" placeholder="Votre nom ici" minlength="4" mxlength="20" size="22" required>
    <br>
    <label for="gender_beneficiaries">Votre genre *</label>
    <select name="gender_beneficiaries" required>
        <option <?php htmlspecialchars( print_r('value="Homme"')) ; ?> selected > Homme</option>
        <option <?php htmlspecialchars( print_r('value="Femme"')) ; ?> > Femme</option>
    </select>
    <br>
    <label for="birthdate_beneficiaries">Votre date de naissance *</label>
    <input type="date" name="birthdate_beneficiaries" required>
    <br>
    <label for="country_code_beneficiaries">Numéro de pays européen</label>
    <select name="country_code_beneficiaries">
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
    <label for="tel_beneficiaries">Numéro de téléphone portable *</label>
    <input type="tel" name="tel_beneficiaries" placeholder="07 ** ** ** **" pattern="[0-9]{10}" required>
    <br>
    <label for="phone_beneficiaries">Numéro de téléphone fixe *</label>
    <input type="tel" name="phone_beneficiaries" placeholder="02 ** ** ** **" pattern="[0-9]{10}" required>
    <br>
    <label for="email_beneficiaries">Votre addresse mail *</label>
    <input type="email" name="email_beneficiaries" placeholder="exemple@domain.com" required>
    <br>
    <label for="department_beneficiaries">Votre Département *</label>
    <select name="department_beneficiaries" required>
        <option <?php htmlspecialchars( print_r('value="Choissiez votre département"')); ?>  selected>Choissiez votre département</option>
        <optgroup label="Alsace">
            <option <?php htmlspecialchars( print_r('value="Bas-rhin"')); ?> >(67) Bas-Rhin</option>
            <option <?php htmlspecialchars( print_r('value="Haut-rhin"')); ?> >(68) Haut-Rhin</option>
        </optgroup>
        <optgroup label="Aquitaine">
            <option <?php htmlspecialchars( print_r('value="Dordogne"')); ?> >(24) Dordogne</option>
            <option <?php htmlspecialchars( print_r('value="Gironde"')); ?> >(33) Gironde</option>
            <option <?php htmlspecialchars( print_r('value="Landes"')); ?> >(40) Landes</option>
            <option <?php htmlspecialchars( print_r('value="Lot et garonne"')); ?> >(47) Lot-et-Garonne</option>
            <option <?php htmlspecialchars( print_r('value="Pyrénées"')); ?> >(64) Pyrénées Atlantiques</option>
        </optgroup>
        <optgroup label="Auvergne">
            <option <?php htmlspecialchars( print_r('value ="Allier"')); ?> >(03) Allier</option>
            <option <?php htmlspecialchars( print_r('value="Cantal"')); ?> >(15) Cantal</option>
            <option <?php htmlspecialchars( print_r('value ="Haute-loire"')); ?> >(43) Haute Loire</option>
            <option <?php htmlspecialchars( print_r('value="Puy-de-dome"')); ?> >(63) Puy-de-Dôme</option>
        </optgroup>
        <optgroup label="Basse-Normandie">
            <option <?php htmlspecialchars( print_r('value="Calvados"')); ?> >(14) Calvados</option>
            <option <?php htmlspecialchars( print_r('value="Manche"')); ?> >(50) Manche</option>
            <option <?php htmlspecialchars( print_r('value="Orne"')); ?> >(61) Orne</option>
        </optgroup>
        <optgroup label="Bourgogne">
            <option <?php htmlspecialchars( print_r('value="Yonne"')); ?> >(89) Yonne</option>
            <option <?php htmlspecialchars( print_r('value="Cote-d\'or"')); ?> >(21) Côte-d'Or</option>
            <option <?php htmlspecialchars( print_r('value="Nievre"')); ?> >(58) Nièvre</option>
            <option <?php htmlspecialchars( print_r('value="Saone-et-loire"')); ?> >(71) Saône-et-Loire</option>
        </optgroup>
        <optgroup label="Bretagne">
             <option <?php htmlspecialchars( print_r('value="Cote d\'armor"')); ?> >(22) Côtes d'Armor</option>
             <option <?php htmlspecialchars( print_r('value="Finistère"')); ?>  >(29) Finistère</option>
             <option <?php htmlspecialchars( print_r('value="Ille-et-vilaine"')); ?> >(35) Ille-et-Vilaine</option>
             <option <?php htmlspecialchars( print_r('value="Morbihan"')); ?> >(56) Morbihan</option>
        </optgroup>
        <optgroup label="Centre">
            <option <?php htmlspecialchars( print_r('value="Cher"')); ?> >(18) Cher</option>
            <option <?php htmlspecialchars( print_r('value="Eure-et-loir"')); ?> >(28) Eure-et-Loir</option>
            <option <?php htmlspecialchars( print_r('value="Indre"')); ?> >(36) Indre</option>
            <option <?php htmlspecialchars( print_r('value="Indre-et-loire"')); ?> >(37) Indre-et-Loire</option>
            <option <?php htmlspecialchars( print_r('value="Loir-et-cher"')); ?> >(41) Loir-et-Cher</option>
            <option <?php htmlspecialchars( print_r('value="Loiret"')); ?> >(45) Loiret</option>
        </optgroup>
        <optgroup label="Champagne-Ardenne">
            <option <?php htmlspecialchars( print_r('value="Champagne-ardenne"')); ?> >(08) Ardennes</option>
            <option <?php htmlspecialchars( print_r('value="Aube"')); ?> >(10) Aube</option>
            <option <?php htmlspecialchars( print_r('value="Marne"')); ?> >(51) Marne</option>
            <option <?php htmlspecialchars( print_r('value="Haute-marne"')); ?> >(52) Haute Marne</option>
        </optgroup>            
        <optgroup label="Corse">
            <option <?php htmlspecialchars( print_r('value="Corse-sud"')); ?> >(2A) Corse-du-Sud</option>
            <option <?php htmlspecialchars( print_r('value="Corse-nord"')); ?> >(2B) Haute Corse</option>
        </optgroup>
        <optgroup label="Franche-Comté">
            <option <?php htmlspecialchars( print_r('value="Doubs"')); ?> >(25) Doubs</option>
            <option <?php htmlspecialchars( print_r('value="Jura"')); ?> >(39) Jura</option>
             <option <?php htmlspecialchars( print_r('value="Haute-saone"')); ?> >(70) Haute Saône</option>
             <option <?php htmlspecialchars( print_r('value="Territoire-belfort"')); ?> >(90) Territoire de Belfort</option>
        </optgroup> 
        <optgroup label="Haute-Normandie">
            <option <?php htmlspecialchars( print_r('value="Eure"')); ?> >(27) Eure</option>
            <option <?php htmlspecialchars( print_r('value="Seine-maritime"')); ?> >(76) Seine Maritime</option>
        </optgroup>
        <optgroup label="Ile-de-France">
            <option <?php htmlspecialchars( print_r('value="Paris"')); ?> >(75) Paris</option>
            <option <?php htmlspecialchars( print_r('value="Seine-marne"')); ?> >(77) Seine-et-Marne</option>
            <option <?php htmlspecialchars( print_r('value="Yvelines"')); ?> >(78) Yvelines</option>
            <option <?php htmlspecialchars( print_r('value="Essone"')); ?> >(91) Essonne</option>
            <option <?php htmlspecialchars( print_r('value="Haut de seine"')); ?> >(92) Hauts-de-Seine</option>
            <option <?php htmlspecialchars( print_r('value="Seine-st-denis"')); ?> >(93) Seine-St-Denis</option>
            <option <?php htmlspecialchars( print_r('value="Val-de-marne"')); ?> >(94) Val-de-Marne</option>
            <option <?php htmlspecialchars( print_r('value="Val-d\'oise"')); ?> >(95) Val-D'Oise</option>
        </optgroup> 
        <optgroup label="Languedoc-Roussillon">
             <option <?php htmlspecialchars( print_r('value="Aude"')); ?> >(11) Aude</option>
             <option <?php htmlspecialchars( print_r('value="Gard"')); ?> >(30) Gard</option>
             <option <?php htmlspecialchars( print_r('value="Herault"')); ?> >(34) Hérault</option>
             <option <?php htmlspecialchars( print_r('value="Lozere"')); ?> >(48) Lozère</option>
             <option <?php htmlspecialchars( print_r('value="Pyréné-orientale"')); ?> >(66) Pyrénées Orientales</option>
        </optgroup> 
        <optgroup label="Limousin">
             <option <?php htmlspecialchars( print_r('value="Correze"')); ?> >(19) Corrèze</option>
             <option <?php htmlspecialchars( print_r('value="Creuset"')); ?> >(23) Creuset</option>
             <option <?php htmlspecialchars( print_r('value="Haute-vienne"')); ?> >(87) Haute Vienne</option>
        </optgroup> 
        <optgroup label="Lorraine">
             <option <?php htmlspecialchars( print_r('value="Meurthe-et-moselle"')); ?> >(54) Meurthe-et-Moselle</option>
             <option <?php htmlspecialchars( print_r('value="Meuse"')); ?> >(55) Meuse</option>
             <option <?php htmlspecialchars( print_r('value="Moselle"')); ?> >(57) Moselle</option>
             <option <?php htmlspecialchars( print_r('value="Vosges"')); ?> >(88) Vosges</option>
        </optgroup> 
        <optgroup label="Midi-Pyrénées">
            <option <?php htmlspecialchars( print_r('value="Ariege"')); ?> >(09) Ariège</option>
            <option <?php htmlspecialchars( print_r('value="Aveyron"')); ?> >(12) Aveyron</option>
            <option <?php htmlspecialchars( print_r('value="Haute-garonne"')); ?> >(31) Haute Garonne</option>
            <option <?php htmlspecialchars( print_r('value="Gers"')); ?> >(32) Gers</option>
            <option <?php htmlspecialchars( print_r('value="Lot"')); ?> >(46) Lot</option>
            <option <?php htmlspecialchars( print_r('value="Haute-pyrénées"')); ?> >(65) Hautes Pyrénées</option>
            <option <?php htmlspecialchars( print_r('value="Tarn"')); ?> >(81) Tarn</option>
            <option <?php htmlspecialchars( print_r('value="Tarn-et-garonne"')); ?> >(82) Tarn-et-Garonne</option>
        </optgroup> 
        <optgroup label="Nord-Pas-de-Calais">
             <option <?php htmlspecialchars( print_r('value="Nord"')); ?> >(59) Nord</option>
             <option <?php htmlspecialchars( print_r('value="Pas-de-calais"')); ?> >(62) Pas-de-Calais</option>
        </optgroup> 
        <optgroup label="Pays de la Loire">
             <option <?php htmlspecialchars( print_r('value="Loire-atlantique"')); ?> >(44) Loire Atlantique</option>
             <option <?php htmlspecialchars( print_r('value="Maine-et-loire"')); ?> >(49) Maine-et-Loire</option>
             <option <?php htmlspecialchars( print_r('value="Mayenne"')); ?> >(53) Mayenne</option>
             <option <?php htmlspecialchars( print_r('value="Sarthe"')); ?> >(72) Sarthe</option>
             <option <?php htmlspecialchars( print_r('value ="Vendée"')); ?> >(85) Vendée</option>
        </optgroup> 
        <optgroup label="Picardie">
             <option <?php htmlspecialchars( print_r('value="Aisne"')); ?> >(02) Aisne</option>
             <option <?php htmlspecialchars( print_r('value="Oise"')); ?> >(60) Oise</option>
             <option <?php htmlspecialchars( print_r('value="Somme"')); ?> >(80) Somme</option>
        </optgroup> 
        <optgroup label="Poitou-Charentes">
             <option <?php htmlspecialchars( print_r('value="Charente"')); ?> >(16) Charente</option>
             <option <?php htmlspecialchars( print_r('value="Charente-maritime"')); ?> >(17) Charente-Maritime</option>
             <option <?php htmlspecialchars( print_r('value="Deux-sevres"')); ?> >(79) Deux-Sèvres</option>
             <option <?php htmlspecialchars( print_r('value="Vienne"')); ?> >(86) Vienne</option>
        </optgroup> 
        <optgroup label="Provence-Alpes-Côte-d'Azur">
             <option <?php htmlspecialchars( print_r('value="Alpes-haute-provence"')); ?> >(04) Alpes de Haute Provence</option>
             <option <?php htmlspecialchars( print_r('value="Haute-alpes"')); ?> >(05) Hautes-Alpes</option>
             <option <?php htmlspecialchars( print_r('value="Alpes-maritimes"')); ?> >(06) Alpes Maritimes</option>
             <option <?php htmlspecialchars( print_r('value="Bouches-du-rhone"')); ?> >(13) Bouches-du-Rhône</option>
             <option <?php htmlspecialchars( print_r('value="Var"')); ?> >(83) Var</option>
             <option <?php htmlspecialchars( print_r('value="Vaucluse"')); ?> >(84) Vaucluse</option>
        </optgroup> 
        <optgroup label="Rhône-Alpes">
             <option <?php htmlspecialchars( print_r('value="Ain"')); ?> >(01) Ain</option>
             <option <?php htmlspecialchars( print_r('value="Ardeche"')); ?> >(07) Ardèche</option>
             <option <?php htmlspecialchars( print_r('value="Drome"')); ?> >(26) Drôme</option>
             <option <?php htmlspecialchars( print_r('value="Isere"')); ?> >(38) Isère</option>
             <option <?php htmlspecialchars( print_r('value="Loire"')); ?> >(42) Loire</option>
             <option <?php htmlspecialchars( print_r('value="Rhone"')); ?> >(69) Rhône</option>
             <option <?php htmlspecialchars( print_r('value="Savoie"')); ?> >(73) Savoie</option>
             <option <?php htmlspecialchars( print_r('value="Haute-savoie"')); ?> >(74) Haute Savoie</option>
        </optgroup>
    </select>
    <br>
    <label for="city_beneficiaries">Votre ville de résidence *</label>
    <input type="text" name="city_beneficiaries" placeholder="Paris" required>
    <br>
    <label for="address_beneficiaries">Votre addresse *</label>
    <input type="text" name="address_beneficiaries" placeholder="2 rue de Paris" required>
    <br>
    <label for="family_beneficiaries">Votre situation familliale *</label>
    <select name="family_beneficiaries" required>
        <option <?php htmlspecialchars( print_r('value="Célibataire"')); ?> > Célibataire </option>
        <option <?php htmlspecialchars( print_r('value="Mariée"')); ?> > Mariée </option>
        <option <?php htmlspecialchars( print_r('value="Fiancée"')); ?> > Fiancée </option>
        <option <?php htmlspecialchars( print_r('value="Pacs"')); ?> > Pacs </option>
    </select>
    <br>
    <label for="entry_date_beneficiaries">La date de votre arrivée chez SoranaAsso *</label>
    <input type="date" name="entry_date_beneficiaries" required>
    <br>
    <label for="structure_referent_beneficiaries">Le nom de votre entreprise *</label>
    <input type="text" name="structure_referent_beneficiaries" required>
    <br>
    <label for="password_beneficiaries">Entrez votre mot de passe *</label>
    <input type="password" name="password_beneficiaries" placeholder="*******" required>
    <br>
    <label for="children_beneficiaries">Vos enfants</label>
    <input type="text" name="children_beneficiaries" placeholder="Théo 4ans / Violette 16ans">

    <br><br>
    <p> Les champs marquer d'un "*" sont obligatoire </p>
    <input type="submit" value="Valider le bénéficiaire" name="submitBeneficiaries" >


</form>
<br>
<br>
<br>

<h3>Ajouter une structure</h3>
<br>
<form action="index.php" method="post">

<label for="name_structure">Entrez le nom de la structure *<label>
<input type="text" name="name_structure" required>
<br>
<label for="nature_structure">Nature de votre structure *</label>
<select name="nature_structure" required>
    <option <?php htmlspecialchars( print_r('value="Association"')); ?> > Association </option>
    <option <?php htmlspecialchars( print_r('value="Centre Social"')); ?> > Centre Social </option>
    <option <?php htmlspecialchars( print_r('value="Institution"')); ?> > Institution </option>
    <option <?php htmlspecialchars( print_r('value="Autre"')); ?> > Autre </option>
</select>
<br>
<label for="vocation_structure">Donnez la vocation de votre structure : *</label>
<input type="text" name="vocation_structure" required>
<br>
<label for="department_beneficiaries">Département de votre structure : *</label>
    <select name="department_beneficiaries" required>
        <option <?php htmlspecialchars( print_r('value="Choissiez votre département"')); ?>  selected>Choissiez votre département</option>
        <optgroup label="Alsace">
            <option <?php htmlspecialchars( print_r('value="bas-rhin"')); ?> >(67) Bas-Rhin</option>
            <option <?php htmlspecialchars( print_r('value="haut-rhin"')); ?> >(68) Haut-Rhin</option>
        </optgroup>
        <optgroup label="Aquitaine">
            <option <?php htmlspecialchars( print_r('value="dordogne"')); ?> >(24) Dordogne</option>
            <option <?php htmlspecialchars( print_r('value="gironde"')); ?> >(33) Gironde</option>
            <option <?php htmlspecialchars( print_r('value="landes"')); ?> >(40) Landes</option>
            <option <?php htmlspecialchars( print_r('value="lot et garonne"')); ?> >(47) Lot-et-Garonne</option>
            <option <?php htmlspecialchars( print_r('value="Pyrénées"')); ?> >(64) Pyrénées Atlantiques</option>
        </optgroup>
        <optgroup label="Auvergne">
            <option <?php htmlspecialchars( print_r('value ="allier"')); ?> >(03) Allier</option>
            <option <?php htmlspecialchars( print_r('value="cantal"')); ?> >(15) Cantal</option>
            <option <?php htmlspecialchars( print_r('value ="haute-loire"')); ?> >(43) Haute Loire</option>
            <option <?php htmlspecialchars( print_r('value="puy-de-dome"')); ?> >(63) Puy-de-Dôme</option>
        </optgroup>
        <optgroup label="Basse-Normandie">
            <option <?php htmlspecialchars( print_r('value="calvados"')); ?> >(14) Calvados</option>
            <option <?php htmlspecialchars( print_r('value="manche"')); ?> >(50) Manche</option>
            <option <?php htmlspecialchars( print_r('value="orne"')); ?> >(61) Orne</option>
        </optgroup>
        <optgroup label="Bourgogne">
            <option <?php htmlspecialchars( print_r('value="yonne"')); ?> >(89) Yonne</option>
            <option <?php htmlspecialchars( print_r('value="cote-d\'or"')); ?> >(21) Côte-d'Or</option>
            <option <?php htmlspecialchars( print_r('value="nievre"')); ?> >(58) Nièvre</option>
            <option <?php htmlspecialchars( print_r('value="saone-et-loire"')); ?> >(71) Saône-et-Loire</option>
        </optgroup>
        <optgroup label="Bretagne">
             <option <?php htmlspecialchars( print_r('value="cote d\'armor"')); ?> >(22) Côtes d'Armor</option>
             <option <?php htmlspecialchars( print_r('value="finistère"')); ?>  >(29) Finistère</option>
             <option <?php htmlspecialchars( print_r('value="ille-et-vilaine"')); ?> >(35) Ille-et-Vilaine</option>
             <option <?php htmlspecialchars( print_r('value="morbihan"')); ?> >(56) Morbihan</option>
        </optgroup>
        <optgroup label="Centre">
            <option <?php htmlspecialchars( print_r('value="cher"')); ?> >(18) Cher</option>
            <option <?php htmlspecialchars( print_r('value="eure-et-loir"')); ?> >(28) Eure-et-Loir</option>
            <option <?php htmlspecialchars( print_r('value="indre"')); ?> >(36) Indre</option>
            <option <?php htmlspecialchars( print_r('value="indre-et-loire"')); ?> >(37) Indre-et-Loire</option>
            <option <?php htmlspecialchars( print_r('value="loir-et-cher"')); ?> >(41) Loir-et-Cher</option>
            <option <?php htmlspecialchars( print_r('value="loiret"')); ?> >(45) Loiret</option>
        </optgroup>
        <optgroup label="Champagne-Ardenne">
            <option <?php htmlspecialchars( print_r('value="champagne-ardenne"')); ?> >(08) Ardennes</option>
            <option <?php htmlspecialchars( print_r('value="aube"')); ?> >(10) Aube</option>
            <option <?php htmlspecialchars( print_r('value="marne"')); ?> >(51) Marne</option>
            <option <?php htmlspecialchars( print_r('value="haute-marne"')); ?> >(52) Haute Marne</option>
        </optgroup>            
        <optgroup label="Corse">
            <option <?php htmlspecialchars( print_r('value="corse-sud"')); ?> >(2A) Corse-du-Sud</option>
            <option <?php htmlspecialchars( print_r('value="corse-nord"')); ?> >(2B) Haute Corse</option>
        </optgroup>
        <optgroup label="Franche-Comté">
            <option <?php htmlspecialchars( print_r('value="doubs"')); ?> >(25) Doubs</option>
            <option <?php htmlspecialchars( print_r('value="jura"')); ?> >(39) Jura</option>
             <option <?php htmlspecialchars( print_r('value="haute-saone"')); ?> >(70) Haute Saône</option>
             <option <?php htmlspecialchars( print_r('value="territoire-belfort"')); ?> >(90) Territoire de Belfort</option>
        </optgroup> 
        <optgroup label="Haute-Normandie">
            <option <?php htmlspecialchars( print_r('value="eure"')); ?> >(27) Eure</option>
            <option <?php htmlspecialchars( print_r('value="seine-maritime"')); ?> >(76) Seine Maritime</option>
        </optgroup>
        <optgroup label="Ile-de-France">
            <option <?php htmlspecialchars( print_r('value="paris"')); ?> >(75) Paris</option>
            <option <?php htmlspecialchars( print_r('value="seine-marne"')); ?> >(77) Seine-et-Marne</option>
            <option <?php htmlspecialchars( print_r('value="yvelines"')); ?> >(78) Yvelines</option>
            <option <?php htmlspecialchars( print_r('value="essone"')); ?> >(91) Essonne</option>
            <option <?php htmlspecialchars( print_r('value="haut de seine"')); ?> >(92) Hauts-de-Seine</option>
            <option <?php htmlspecialchars( print_r('value="seine-st-denis"')); ?> >(93) Seine-St-Denis</option>
            <option <?php htmlspecialchars( print_r('value="val-de-marne"')); ?> >(94) Val-de-Marne</option>
            <option <?php htmlspecialchars( print_r('value="val-d\'oise"')); ?> >(95) Val-D'Oise</option>
        </optgroup> 
        <optgroup label="Languedoc-Roussillon">
             <option <?php htmlspecialchars( print_r('value="aude"')); ?> >(11) Aude</option>
             <option <?php htmlspecialchars( print_r('value="gard"')); ?> >(30) Gard</option>
             <option <?php htmlspecialchars( print_r('value="herault"')); ?> >(34) Hérault</option>
             <option <?php htmlspecialchars( print_r('value="lozere"')); ?> >(48) Lozère</option>
             <option <?php htmlspecialchars( print_r('value="pyréné-orientale"')); ?> >(66) Pyrénées Orientales</option>
        </optgroup> 
        <optgroup label="Limousin">
             <option <?php htmlspecialchars( print_r('value="correze"')); ?> >(19) Corrèze</option>
             <option <?php htmlspecialchars( print_r('value="creuset"')); ?> >(23) Creuset</option>
             <option <?php htmlspecialchars( print_r('value="haute-vienne"')); ?> >(87) Haute Vienne</option>
        </optgroup> 
        <optgroup label="Lorraine">
             <option <?php htmlspecialchars( print_r('value="meurthe-et-moselle"')); ?> >(54) Meurthe-et-Moselle</option>
             <option <?php htmlspecialchars( print_r('value="meuse"')); ?> >(55) Meuse</option>
             <option <?php htmlspecialchars( print_r('value="moselle"')); ?> >(57) Moselle</option>
             <option <?php htmlspecialchars( print_r('value="vosges"')); ?> >(88) Vosges</option>
        </optgroup> 
        <optgroup label="Midi-Pyrénées">
                <option <?php htmlspecialchars( print_r('value="ariege"')); ?> >(09) Ariège</option>
                <option <?php htmlspecialchars( print_r('value="aveyron"')); ?> >(12) Aveyron</option>
                <option <?php htmlspecialchars( print_r('value="haute-garonne"')); ?> >(31) Haute Garonne</option>
                <option <?php htmlspecialchars( print_r('value="gers"')); ?> >(32) Gers</option>
                <option <?php htmlspecialchars( print_r('value="lot"')); ?> >(46) Lot</option>
                <option <?php htmlspecialchars( print_r('value="haute-pyrénées"')); ?> >(65) Hautes Pyrénées</option>
                <option <?php htmlspecialchars( print_r('value="tarn"')); ?> >(81) Tarn</option>
                <option <?php htmlspecialchars( print_r('value="tarn-et-garonne"')); ?> >(82) Tarn-et-Garonne</option>
           </optgroup> 
           <optgroup label="Nord-Pas-de-Calais">
                <option <?php htmlspecialchars( print_r('value="nord"')); ?> >(59) Nord</option>
                <option <?php htmlspecialchars( print_r('value="pas-de-calais"')); ?> >(62) Pas-de-Calais</option>
           </optgroup> 
           <optgroup label="Pays de la Loire">
                <option <?php htmlspecialchars( print_r('value="loire-atlantique"')); ?> >(44) Loire Atlantique</option>
                <option <?php htmlspecialchars( print_r('value="maine-et-loire"')); ?> >(49) Maine-et-Loire</option>
                <option <?php htmlspecialchars( print_r('value="mayenne"')); ?> >(53) Mayenne</option>
                <option <?php htmlspecialchars( print_r('value="sarthe"')); ?> >(72) Sarthe</option>
                <option <?php htmlspecialchars( print_r('value ="vendée"')); ?> >(85) Vendée</option>
           </optgroup> 
           <optgroup label="Picardie">
                <option <?php htmlspecialchars( print_r('value="aisne"')); ?> >(02) Aisne</option>
                <option <?php htmlspecialchars( print_r('value="oise"')); ?> >(60) Oise</option>
                <option <?php htmlspecialchars( print_r('value="somme"')); ?> >(80) Somme</option>
           </optgroup> 
           <optgroup label="Poitou-Charentes">
                <option <?php htmlspecialchars( print_r('value="charente"')); ?> >(16) Charente</option>
                <option <?php htmlspecialchars( print_r('value="charente-maritime"')); ?> >(17) Charente-Maritime</option>
                <option <?php htmlspecialchars( print_r('value="deux-sevres"')); ?> >(79) Deux-Sèvres</option>
                <option <?php htmlspecialchars( print_r('value="vienne"')); ?> >(86) Vienne</option>
           </optgroup> 
           <optgroup label="Provence-Alpes-Côte-d'Azur">
                <option <?php htmlspecialchars( print_r('value="alpes-haute-provence"')); ?> >(04) Alpes de Haute Provence</option>
                <option <?php htmlspecialchars( print_r('value="haute-alpes"')); ?> >(05) Hautes-Alpes</option>
                <option <?php htmlspecialchars( print_r('value="alpes-maritimes"')); ?> >(06) Alpes Maritimes</option>
                <option <?php htmlspecialchars( print_r('value="bouches-du-rhone"')); ?> >(13) Bouches-du-Rhône</option>
                <option <?php htmlspecialchars( print_r('value="var"')); ?> >(83) Var</option>
                <option <?php htmlspecialchars( print_r('value="vaucluse"')); ?> >(84) Vaucluse</option>
           </optgroup> 
           <optgroup label="Rhône-Alpes">
                <option <?php htmlspecialchars( print_r('value="ain"')); ?> >(01) Ain</option>
                <option <?php htmlspecialchars( print_r('value="ardeche"')); ?> >(07) Ardèche</option>
                <option <?php htmlspecialchars( print_r('value="drome"')); ?> >(26) Drôme</option>
                <option <?php htmlspecialchars( print_r('value="isere"')); ?> >(38) Isère</option>
                <option <?php htmlspecialchars( print_r('value="loire"')); ?> >(42) Loire</option>
                <option <?php htmlspecialchars( print_r('value="rhone"')); ?> >(69) Rhône</option>
                <option <?php htmlspecialchars( print_r('value="savoie"')); ?> >(73) Savoie</option>
                <option <?php htmlspecialchars( print_r('value="haute-savoie"')); ?> >(74) Haute Savoie</option>
           </optgroup>
        </select>
        <br>
<label for="city_structure">Entrez le nom de la ville d'origine: *<label>
<input type="text" name="city_structure" required>
<br>
<label for="adress_structure">Entrez l'adresse de la structure: *<label>
<input type="text" name="adress_structure" required>
<br>
<label for="tel_structure">Numéro de téléphone de la structure: *</label>
<input type="tel" name="tel_structure" placeholder="N°" pattern="[0-9]{10}" required>
<br>
<label for="mail_structure">Le mail de la structure: *</label>
<input type="mail" name="mail_structure" required>
<br>
<br>
<label for="other_structure">Donnez un descriptif de la structure :</label><br>
<textarea name="other_structure" placeholder="Un bref descriptif de la structure (optionel)"></textarea>
<br>
<label for="website_structure">Lien vers le site wbe de la structure :</label>
<input type="text" name="website_structure">
<br>
<input type="submit" value="submitAddStructure" name="submitAddStructure">

</form>


<br>
<br>
<br>

<h3>Ajouter un référent</h3>
<br>

<form action="index.php" method="post">

<label for="contact_type_referent">Nature du premier contact avec le référent *</label>
<select name="contact_type_referent" required>
    <option <?php htmlspecialchars( print_r('value="Contact spontané entrant"')); ?> > Contact spontané entrant </option>
    <option <?php htmlspecialchars( print_r('value="Contact spontané Sonara"')); ?> > Contact spontané Sonara </option>
    <option <?php htmlspecialchars( print_r('value="Réseaux associatif"')); ?> > Réseaux associatif </option>
    <option <?php htmlspecialchars( print_r('value="Autre"')); ?> > Autre </option>
</select>
<br>

<label for="firstname_referent">Entrez le prénom du réferent *<label>
<input type="text" name="firstname_referent" required>
<br>
<label for="name_referent">Entrez le nom du réferent *<label>
<input type="text" name="name_referent" required>
<br>
<label for="structure_referent">Entrez la fonction du réferent au sein de la structure *<label>
<select name="structure_referent">
<option <?php htmlspecialchars( print_r('value="défaut"')); ?> > défaut </option>

<!-- TODO : PHP LINK FOR ALL THE SRUCTURE -->

</select>
<br>
<label for="tasks_structure_referent">Entrez la fonction du réferent au sein de la structure *<label>
<input type="text" name="tasks_structure_referent" required>
<br>
<label for="tel_referent ">Numéro de téléphone du référent *</label>
<input type="tel" name="tel_referent " placeholder="N°" pattern="[0-9]{10}" required>
<br>
<label for="phone_referent ">Numéro de portable du référent *</label>
<input type="tel" name="phone_referent " placeholder="N°" pattern="[0-9]{10}" required>
<br>
<label for="mail_referent">Entrez l'adesse email du référent *</label>
<input type="email" name="mail_referent" placeholder="exemple@domain.com" required>
<br>
<label for="contact_tracked_structure_referent">Entrez le type de suivi *</label>
<select name="contact_tracked_structure_referent" required>
    <option <?php htmlspecialchars( print_r('value="Suivi par structure"')); ?> > Suivi par structure </option>
    <option <?php htmlspecialchars( print_r('value="Suivi par référent"')); ?> > Suivi par référent </option>
</select>
<br>
<h4>Étapes de suivis :</h4>
<label for="initial_contact_referent">Contact initial avec le référent</label>
<input type="checkbox" name="initial_contact_referent">
<label for="initial_contact_date_referent">Date du contact initial</label>
<input type="date" name="initial_contact_date_referent">
<br>
<label for="presentation_appointment_referent">Rendez vous de présentation avec le référent</label>
<input type="checkbox" name="presentation_appointment_referent">
<label for="presentation_appointment_date_referent">Date de la présentaion avec le référent</label>
<input type="date" name="presentation_appointment_date_referent">
<br>
<label for="convention_referent">Envoie de la convention</label>
<input type="checkbox" name="convention_referent">
<label for="convention_date_referent">Date de l'envoie de la convention</label>
<input type="date" name="convention_date_referent">
<br>
<label for="signature_referent ">Signature de la convention</label>
<input type="checkbox" name="signature_referent">
<label for="first_date_signature_referent">Date de la première signature</label>
<input type="date" name="first_date_signature_referent">
<label for="second_date_signature_referent">Date de la deuxième signature</label>
<input type="date" name="second_date_signature_referent">
<br>
<label for="first_action_referent ">Première action du référent</label>
<input type="checkbox" name="first_action_referent">
<label for="date_first_action_referent">Date de la première action du référent</label>
<input type="date" name="date_first_action_referent">
<label for="object_first_action_referent">Object de la première action</label>
<input type="text" name="object_first_action_referent">
<br>

<br><br>
<p> Les champs marquer d'un "*" sont obligatoire </p>
<input type="submit" value="Envoyer" name="submitAddReferent">

</form>

