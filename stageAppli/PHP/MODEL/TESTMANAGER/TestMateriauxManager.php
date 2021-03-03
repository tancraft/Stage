<?php

//Test MateriauxManager

echo "recherche id = 1" . "<br>";
$obj =MateriauxManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Materiaux(["nomMateriel" => "([value 1])", "nbDispo" => "([value 2])", "idUser" => "([value 3])"]);
var_dump(MateriauxManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = MateriauxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomMateriel("[(Value)]");
MateriauxManager::update($obj);
$objUpdated = MateriauxManager::findById(1);
echo "Liste des objets" . "<br>";
$array = MateriauxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = MateriauxManager::findById(1);
MateriauxManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = MateriauxManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>