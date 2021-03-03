<?php

//Test OutilscaisseManager

echo "recherche id = 1" . "<br>";
$obj =OutilscaisseManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Outilscaisse(["nomOutilCaisse" => "([value 1])", "nbOutilCaisse" => "([value 2])", "idUser" => "([value 3])"]);
var_dump(OutilscaisseManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = OutilscaisseManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomOutilCaisse("[(Value)]");
OutilscaisseManager::update($obj);
$objUpdated = OutilscaisseManager::findById(1);
echo "Liste des objets" . "<br>";
$array = OutilscaisseManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = OutilscaisseManager::findById(1);
OutilscaisseManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = OutilscaisseManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>