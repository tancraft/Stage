
var inputs = document.getElementsByTagName("input");

for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener("input", function (event) {
        updateValidity(event.target);
    });
}

var valider = document.querySelector('#submit');

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
