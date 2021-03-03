<?php

//Test LieuxManager

echo "recherche id = 1" . "<br>";
$obj =LieuxManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Lieux(["nomLieu" => "([value 1])", "idEnv" => "([value 2])"]);
var_dump(LieuxManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = LieuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomLieu("[(Value)]");
LieuxManager::update($obj);
$objUpdated = LieuxManager::findById(1);
echo "Liste des objets" . "<br>";
$array = LieuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = LieuxManager::findById(1);
LieuxManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = LieuxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>