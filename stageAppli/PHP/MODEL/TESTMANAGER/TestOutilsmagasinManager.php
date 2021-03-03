<?php

//Test OutilsmagasinManager

echo "recherche id = 1" . "<br>";
$obj =OutilsmagasinManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Outilsmagasin(["nomOutilMagasin" => "([value 1])", "nbOutilMagasin" => "([value 2])", "idUser" => "([value 3])"]);
var_dump(OutilsmagasinManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = OutilsmagasinManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomOutilMagasin("[(Value)]");
OutilsmagasinManager::update($obj);
$objUpdated = OutilsmagasinManager::findById(1);
echo "Liste des objets" . "<br>";
$array = OutilsmagasinManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = OutilsmagasinManager::findById(1);
OutilsmagasinManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = OutilsmagasinManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>