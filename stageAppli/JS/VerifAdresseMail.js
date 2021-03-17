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
        args = "emailUser="+valeur;
        request.send(args);
    }
});

request.onreadystatechange = function(event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // console.log("Réponse reçue: %s", this.responseText);
            reponse=JSON.parse(this.responseText);
            if (reponse)
            {
                var toto = 1;
            }
            else{
                var toto = 2;
            }
            console.log(toto);
           //on traite les éléments de la liste ....
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
function testExiste(input, isValid) {
    let erreur = document.querySelector('.erreur');

    let existe = input.previousElementSibling.textContent;
    existe = existe.substr(0, existe.length - 2) + "  existe déja.";
    existe = "L'" + existe.toLowerCase();
    switch (isValid) {
        case true:
            erreur.innerHTML = erreur.innerHTML.replace("<br>" + existe, "");
            break;
        case false:
            erreur.innerHTML = erreur.innerHTML.replace("<br>" + existe, "");
            if (erreur.innerHTML.indexOf(existe) == -1)
                erreur.innerHTML += "<br>" + existe;
            break;
    }

}