
/**
 * Vérifie la validité de la saisie dans un input et change le style en conséquence
 * @param {élément de type input} input 
 */
function updateValidity(input) {
    isValid = valideInput(input);
    impactValidity(input, isValid);
    checkAllValidity();
}

/**
 * Vérifie la validité de la saisie dans un input
 * Renvoi vrai si la saisie est valide, faux si elle n'est pas valide, 0 si le champ n'est pas rempli
 * @param {élément de type input} input 
 */
function valideInput(input) {
    isValid = input.checkValidity();
    if (!isValid && input.value == "" && input.required) {
        isValid = 0;
    }
    return isValid;
}



/**
 * Affiche le message d'erreur, change les couleurs et affiche les coches
 * @param {élément de type input} input 
 * @param {*} isValid 
 */
function impactValidity(input, isValid) {
    let erreur = document.querySelector('.erreur');
    let invalide = input.previousElementSibling.textContent;
    requis = invalide.substr(0,invalide.length-1) +" est requis"
    invalide = invalide.substr(0,invalide.length-1) +" est invalide";
    switch (isValid) {
        case true:
            erreur.innerHTML = erreur.innerHTML.replace("<br>" +invalide,"");
            erreur.innerHTML = erreur.innerHTML.replace("<br>" +requis,"");
            break;
        case 0:
            erreur.innerHTML = erreur.innerHTML.replace("<br>" +invalide,"");
            if (erreur.innerHTML.indexOf(requis)==-1)
            erreur.innerHTML += "<br>" +requis;
            break;
        case false:
            erreur.innerHTML = erreur.innerHTML.replace("<br>" +requis,"");
            if (erreur.innerHTML.indexOf(invalide)==-1)
            erreur.innerHTML += "<br>" +invalide;
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
    j = 0;
    // on vérifie les listeInput un à un
    while (pasErreur && i < listeInput.length) {
        pasErreur = valideInput(listeInput[i])
        i++;
    }
    while (pasErreur && j < listeSelect.length)
    {
        pasErreur = valideSelect(listeSelect[j])
        j++
    }
    if (pasErreur) {
        valider.disabled = false;
    } else {
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

var listeInput = document.querySelectorAll("input");
var mdp = document.querySelector('#mdp');
var confirmer = document.querySelector('#confirmation');
var listeSelect = document.querySelectorAll('select');
var valider = document.querySelector('#submit');


for (let i = 0; i < listeInput.length; i++) {
    listeInput[i].addEventListener("input", function (event) {
        updateValidity(event.target);
    });
}

for (let j = 0; j < listeSelect.length; j++) {
    listeSelect[j].addEventListener("change", function (event) {
        isValid = (event.target.value != "")
        impactValidity(event.target, isValid);
        checkAllValidity();
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
    if (mode != 'details' && mode != 'supprimer') {
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

