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