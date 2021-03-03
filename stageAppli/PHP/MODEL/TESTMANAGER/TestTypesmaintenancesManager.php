<?php

//Test TypesmaintenancesManager

echo "recherche id = 1" . "<br>";
$obj =TypesmaintenancesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Typesmaintenances(["numeroTypeMaint" => "([value 1])", "libelleTypeMaint" => "([value 2])"]);
var_dump(TypesmaintenancesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = TypesmaintenancesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnumeroTypeMaint("[(Value)]");
TypesmaintenancesManager::update($obj);
$objUpdated = TypesmaintenancesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = TypesmaintenancesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = TypesmaintenancesManager::findById(1);
TypesmaintenancesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = TypesmaintenancesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>