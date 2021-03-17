// appel ajax API adresseMail declenché par input sur adresse mail
// envoyé l'adresse mail saisie pour test
// si resultat positif => message erreur
// sinon pas de message

const request = new XMLHttpRequest();

var email = document.querySelector('#email');

var args = email.addEventListener('input', function (e) {
    var isValid = e.target.checkValidity();
    if (isValid) {
        var valeur = e.target.value;
        console.log(valeur)
        request.open('POST', 'index.php?page=AdresseMail', true);
        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        args = "emailUser=" + valeur;
        request.send(args);
    }
});

request.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            reponse = JSON.parse(this.responseText);
            testExiste(reponse);
            
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};


/**
 * Affiche le message d'erreur, change les couleurs et affiche les coches
 * @param {élément de type input} input 
 * @param {*} isValid 
 */
function testExiste(reponse) {
    let erreur = document.querySelector('.erreur');
    let existe = "<br>Cette adresse mail existe déja!";
    if (reponse && !erreur.innerHTML) {
        erreur.innerHTML = erreur.innerHTML = existe;
    }
    else {
        if (reponse) {
            erreur.innerHTML += erreur.innerHTML = existe;
        } else {
            if (erreur.innerHTML.indexOf(existe) == -1) {
                erreur.innerHTML += "";
            }
            else {
                erreur.innerHTML = erreur.innerHTML.replace(existe, "");
            }
        }
    }
}