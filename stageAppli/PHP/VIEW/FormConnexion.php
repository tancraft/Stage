<section>
    <div class="demi"></div>
    <form action="index.php?page=ActionConnexion" method="post">

        <div class="info centre">
            <div>
                <label  for="emailUser">Adresse mail</label>
            </div>
            <div>
                <input id="email" type="text" name="emailUser" required pattern="^[0-9a-zA-Z._-]+@{1}[0-9a-zA-Z.-]{2,}[.]{1}[a-z]{2,6}$" />
            </div>
            <div class=" erreur"></div>
        </div>

        <div class="info centre">
            <div>
                <label for="mdpUser">Mot de Passe</label>
            </div>
            <div>
                <input id="motDePasse" type="password" name="mdpUser" required />
            </div>
            <div class=" erreur"></div>
        </div>
        <div class="espaceHor"></div>
        <button id="valide" class="bouton" type="submit" disabled >Valider</button>
    </form>
    <div class="demi"></div>
</section>