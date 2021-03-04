<?php
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

$fp = fopen('./codes.txt',"w");

$host= code(readline('entrer le nom de la BDD'));

fputs($fp, "localhost: ".$host);

$bdd=code(readline('entrer le nom de la BDD'));
fputs($fp, "nom bdd: ".$bdd);

$identifiant=code(readline('entrer lidentifiant'));
fputs($fp, "identifiant: ".$identifiant);





