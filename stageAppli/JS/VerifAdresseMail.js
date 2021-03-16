// appel ajax API adresseMail declenché par input sur adresse mail
// envoyé l'adresse mail saisie pour test
// si resultat positif => message erreur
// sinon pas de message

console.log('toto');

const request = new XMLHttpRequest();

request.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            // var divCount  = document.getByEmail("total");
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
           //on traite les éléments de la liste ....
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

request.open('POST', 'PHP/MODEL/API/index.php?codePage=AdresseMail', true);
request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
// var args = "idPersonne=1";
// request.send(args);
request.send(null);