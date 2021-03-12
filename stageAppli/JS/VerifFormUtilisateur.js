
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

var mdp = document.querySelector('#mdp');
var confirmer = document.querySelector('#confirmation');

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

