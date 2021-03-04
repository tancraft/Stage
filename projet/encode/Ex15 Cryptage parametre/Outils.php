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

$test = "test";
var_dump(code($test));
var_dump(decode(code($test)));

var_dump(code("localhost"));
var_dump(code("3306"));
var_dump(code("multilingue"));
var_dump(code("root"));
