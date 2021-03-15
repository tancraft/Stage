var tab = document.querySelectorAll(".role");
var admin = document.querySelector("#admin");
var rir = document.querySelector("#rir");
var form = document.querySelector("#form");
var stag = document.querySelector("#stag");
var tous = document.querySelector("#tous");

admin.addEventListener("click", function () { Filtre("Administrateur") });
rir.addEventListener("click", function () { Filtre("RIR") });
form.addEventListener("click", function () { Filtre("Formateur référent", "Formateur suppleant") });
stag.addEventListener("click", function () { Filtre("Stagiaire") });
tous.addEventListener("click", Tous);

/**
 * fonction qui affiche tous les libelles d'une table
 * pas de parametres
 */
function Tous() {
    for (let i = 0; i < tab.length; i++) {
        tab[i].parentNode.parentNode.style.display = "flex";
    }
}
/**
 * fonction qui filtre une table par rapport a un ou plusieurs libellés 
 * @param {string} nomFiltre obligatoire nom du filtre, correspond au libéllé de la table pour filtrer
 * @param {string} nomFiltre2 optionnel nom du filtre, correspond a un autre libéllé de la table pour filtrer
 */
function Filtre(nomFiltre, nomFiltre2) {
    Tous()
    if (typeof(nomFiltre2) == 'undefined') {
        for (let i = 0; i < tab.length; i++) {
            if (tab[i].textContent != nomFiltre) {
                tab[i].parentNode.parentNode.style.display = "none";
            }
        }
    } else {
        for (let i = 0; i < tab.length; i++) {
            if (tab[i].textContent != nomFiltre && tab[i].textContent != nomFiltre2) {
                tab[i].parentNode.parentNode.style.display = "none";
            }
        }
    }
}
