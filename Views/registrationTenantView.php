<!-- <div class="container-fluid" style="background-color: #70A4BA;"> -->
    <div class="container">
        <form action="registrationTenant.php" method="post">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <label for="name_tenant" class="form-label">Nom/prénom :<span style="color:red;">*</span></label>
                    <input type="text" name="name_tenant" class="form-control" placeholder="Votre nom" minlength="4" mxlength="20" size="22" required>

                    <input type="text" name="surname_tenant" class="form-control" placeholder="Votre prénom" minlength="4" mxlength="20" size="22" required />
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <label for="email_tenant" class="form-label">Email / Mot de passe <span style="color:red;">*</span></label>
                    <input type="email" class="form-control" name="email_tenant" placeholder="Votre mail" required>
                    <input type="password" class="form-control" name="password_tenant" placeholder="****" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <label for="tel_tenant" class="form-label">N° de téléphone : <span style="color:red;">*</span></label>
                    <input type="tel" class="form-control" name="tel_tenant" placeholder="N°" pattern="[0-9]{10}" required>
                    <label for="nb_roommates_tenant" class="form-label">Nombre de colocataires :</label>

                    <select name="nb_roommates_tenant" class="form-select" id="">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="9+">9+</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <hr class="mx-4">
                    <input type="submit" class="btn btn-primary" value="Je m'inscris !" name="submit">
                </div>
            </div>
        </form>

        <p> Les champs marqués d'un "<span style="color:red;">*</span>" sont obligatoires. </p>
    </div>
<!-- </div> -->