<?php

//Test OutilsmagasinutilisesManager

echo "recherche id = 1" . "<br>";
$obj =OutilsmagasinutilisesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Outilsmagasinutilises(["idActivite" => "([value 1])", "idOutilMagasin" => "([value 2])", "quantiteOutilsMagasin" => "([value 3])"]);
var_dump(OutilsmagasinutilisesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = OutilsmagasinutilisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidActivite("[(Value)]");
OutilsmagasinutilisesManager::update($obj);
$objUpdated = OutilsmagasinutilisesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = OutilsmagasinutilisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = OutilsmagasinutilisesManager::findById(1);
OutilsmagasinutilisesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = OutilsmagasinutilisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>