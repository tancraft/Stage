var urlParams = new URLSearchParams(document.location.href);
var mode = urlParams.get('mode');

var inputs = document.getElementsByTagName("input");

for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener("input", function (event) {
        updateValidity(event.target);
    });
}

var valider = document.querySelector('#submit');

//gestion de l'oeil dans le mot de passe
var oeil = document.getElementsByClassName("oeil")[0];
// on affiche un petit oeil qui permet de voir de mot de passe 
oeil.addEventListener("mousedown", function () {
    if (mode != 'details' && mode != 'supprimer')
    {
        affichePassWord(true);
    }
});
oeil.addEventListener("mouseup", function () {
    affichePassWord(false);
});

/**
 * Vérifie la validité de la saisie dans un input et change le style en conséquence
 * @param {élément de type input} input 
 */
 function updateValidity(input) {
    isValid = valideInput(input);
    console.log(isValid);
    impactValidity(input, isValid);
    checkAllValidity();
}

/**
 * Vérifie la validité de la saisie dans un input
 * Renvoi vrai si la saisie est valide, faux si elle n'est pas valide, 0 si le champ n'est pas rempli
 * @param {élément de type input} input 
 */
function valideInput(input){   
    isValid = input.checkValidity();
    if (!isValid && input.value == "" && input.required)
    {
        isValid = 0;
    }
    return isValid;
}

/**
 * Affiche le message d'erreur, change les couleurs et affiche les coches
 * @param {élément de type input} input 
 * @param {*} isValid 
 */
function impactValidity(input, isValid)
{
    let erreur = document.querySelector('.erreur');
    switch (isValid){
        case true:
            erreur.innerHTML = 'Champ Valide';
            input.classList = 'correct';
            break;
        case 0:
            erreur.innerHTML = 'Champ requis';
            input.classList = 'incorrect';
            break;
        case false:
            erreur.innerHTML = 'Format invalide';
            input.classList = 'incorrect';
            break;
    }

}

/**
 * Activation du bouton de formulaire
 * Vérification de tous les champs
 */
 function checkAllValidity() {
    var pasErreur = true;
    i = 0;
    // on vérifie les inputs un à un
    while (pasErreur && i < inputs.length) {
        pasErreur = valideInput(inputs[i])
        i++;
    }
    if (pasErreur) {
        valider.disabled = false;
    }else{
        valider.disabled = true;
    }
}

/**
 * Change le type de l'input mot de passe
 * @param {boolean} flag 
 */
 function affichePassWord(flag) {
    if (flag) mdp.type = "text";
    else mdp.type = "password";
}
