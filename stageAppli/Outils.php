<?php

/*fonctions globales*/
function ChargerClasse($classe)
{
	if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
	{
		require "PHP/CONTROLLER/" . $classe . ".Class.php";
	}
	if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
	{
		require "PHP/MODEL/" . $classe . ".Class.php";
	}
}
spl_autoload_register("ChargerClasse");

function uri()
{
	$uri = $_SERVER['REQUEST_URI'];
	if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
	{
		$uri .= "index.php?";
	}
	else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
	{
		$uri .= "&";
	}
	else
	{
		$uri .= "?";
	}
	return $uri;
}

function crypte($mot)
{
	return md5(md5($mot));
}

function texte($codeTexte)
{
	global $lang; //on appel la variable globale
	return TexteManager::findByCodes($lang, $codeTexte);
}

function afficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];
    if ($page[3]) // C'est une API
    {
        include $chemin . $nom . '.php';
    } else {
        include 'PHP/VIEW/Head.php';
        include 'PHP/VIEW/Header.php';
        if (isset($_SESSION['utilisateur'])) {
            if (isset($_GET['page']) && substr($_GET['page'], 0, 6) == "FormFR" && $_SESSION['utilisateur']->getIdRole() == 3) {
                include 'PHP/VIEW/MenuFR.php';
            }
        }

        include 'PHP/VIEW/Nav.php';
        include $chemin . $nom . '.php';
        include 'PHP/VIEW/Footer.php';
    }
}

function code($texte)
{
    $resultat="";
    $texte = str_split($texte);
    for ($i = 0; $i < count($texte); $i++)
    {
        $resultat .= chr(ord($texte[$i]) + 3);
    }
    return $resultat;
}

function decode($texte)
{
    $resultat="";
    $texte = str_split($texte);
    for ($i = 0; $i < count($texte); $i++)
    {
        $resultat .= chr(ord($texte[$i]) - 3);
    }
    return $resultat;
}

/*fonctions du projet*/

/**
 * Fonction qui renvoi la liste necessaire a la creation du select
 * @array : contient la la liste des colonnes
 */
function appelGetList($nomTable)
{
    $methode = $nomTable . "Manager::getList";
    return call_user_func($methode);
}

/**
 * Fonction qui renvoi l'objet renvoyé par l'appel de la methode formé de Get et de la chaine de caractere
 * @obj : contient l'objet sur lequel porte l'appel
 * @chaine : contient la partie de la methode apres le get
 * ex: chaine="libelle" on appele la méthode $obj->getLibelle()
 */
function appelGet($obj, $chaine)
{
    $methode = 'get' . ucfirst($chaine);
    return call_user_func(array($obj, $methode));

}

/**
 * fonction qui construit un select en fonction des parametres
 * @valeur : valeur qui sera selected
 * @table : table de reference
 * @nomId : nom de l'id dans la table de reference
 * @mode : mode ajout modif, edit ou supprime
 * @libelle : nom de la colonne libelle à mettre dans les options
 * @attribut : chaine de caractère ajouter comme attribut (ex : checkValidity, class="centrer")
 */
// function optionSelect($valeur, $table, $nomId, $mode, $libelle, $attribut)
// {
   
//     $select = '<select id="' . $nomId . '" name="' . $nomId . '"';
//     if ($mode == "details" || $mode == "supprimer") {
//         $select .= " disabled ";
//     }
//     $select .= $attribut .'>';
//     $liste = appelGetList($table);

//     if ($valeur == null) { // si le code est null, on ne mets pas de choix par défaut avec valeur
//         $select .= '<option value="" SELECTED>Choisir une valeur</option>';
//     }
//     foreach ($liste as $elt) {

//         if ($valeur == appelGet($elt, $nomId)) //appel de la methode stockée dans $method
//         { // si le code entré en paramètre est égale à l'élément alors c'est celui qui est selectionné
//             $select .= '<option value="' . appelGet($elt, $nomId) . '" SELECTED>' . appelGet($elt, $libelle) . '</option>';
//         } else {
//             $select .= '<option value="' . appelGet($elt, $nomId) . '">' . appelGet($elt, $libelle) . '</option>';
//         }
//     }
//     $select .= "</select>";
//     return $select;
// }

function optionSelect($valeur,$idChoisi, $table, $nomId, $mode, $libelle, $attribut)
{
   
    $select = '<select id="' . $nomId . '" name="' . $nomId . '"';
    if ($mode == "details" || $mode == "supprimer") {
        $select .= " disabled ";
    }
    $select .= $attribut .'>';
    $liste = appelGetList($table);

    if ($valeur == null) { // si le code est null, on ne mets pas de choix par défaut avec valeur
        $select .= '<option value="" SELECTED>Choisir une valeur</option>';
    }
    foreach ($liste as $elt) {

        if ($idChoisi == appelGet($elt, $nomId)) //appel de la methode stockée dans $method
        { // si le code entré en paramètre est égale à l'élément alors c'est celui qui est selectionné
            $select .= '<option value="' . appelGet($elt, $nomId) . '" SELECTED>' . appelGet($elt, $libelle) . '</option>';
        } else {
            $select .= '<option value="' . appelGet($elt, $nomId) . '">' . appelGet($elt, $libelle) . '</option>';
        }
    }
    $select .= "</select>";
    return $select;
}