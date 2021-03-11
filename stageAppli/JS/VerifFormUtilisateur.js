
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

/**
 * Annule l'action associé à la touche ou au clic
 * @param {*} event 
 */
 function annule(event) {
        event.preventDefault();
}

var urlParams = new URLSearchParams(document.location.href);
var mode = urlParams.get('mode');

var inputs = document.querySelectorAll("input");
var mdp = document.querySelector('#mdp');
var confirmer = document.querySelector('#confirmation');
var valider = document.querySelector('#submit');

for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener("input", function (event) {
        updateValidity(event.target);
    });
}

//empecher copier dans champ mdp et confirm/empecher coller dans champ confirm
mdp.addEventListener('contextmenu', annule);
confirmer.addEventListener('contextmenu', annule);
confirmer.addEventListener("paste", annule);


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

// affichage de l'aide à la saisie du mot de passe 
// c'est la 2eme fois que l'on pose un listener sur input de mot de passe, les 2 fonctions vont s'executer l'une derrière l'autre 
mdp.addEventListener("input", function (event) {
    let aideMdp = document.getElementsByClassName("aideMdp")[0];
    aideMdp.style.display = "flex";
    let lesImages = aideMdp.getElementsByTagName("i");
    let lesCheck = ["([a-zA-Z0-9!@#\$%\^&\*+]{8,})", "(?=.*[A-Z])", "(?=.*[a-z])", "(?=.*[0-9])", "(?=.*[!@#\$%\^&\*+])"];
    for (let i = 0; i < lesCheck.length; i++) {
        if (RegExp(lesCheck[i]).test(mdp.value)) {
            //la condition est vérifiée, on met la coche verte correspondente
            lesImages[i].classList = "far fa-check-circle vert";
        } else {
            lesImages[i].classList = "far fa-times-circle rouge";
        }
    }
});

//suppression de l'aide mot de passe quand on quitte le champ
mdp.addEventListener("blur", function (event) {
    document.getElementsByClassName("aideMdp")[0].style.display = "none";
});

//gestion particulière de la confirmation de mot de passe
confirmer.addEventListener("input", function (event) {
    if (confirmer.value == mdp.value) {
        impactValidity(confirmation, true);
    } else {
        impactValidity(confirmation, false);
    }
});
