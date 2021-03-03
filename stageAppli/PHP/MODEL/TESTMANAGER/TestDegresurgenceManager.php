<?php

//Test DegresurgenceManager

echo "recherche id = 1" . "<br>";
$obj =DegresurgenceManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Degresurgence(["libelleDegreUrgence" => "([value 1])"]);
var_dump(DegresurgenceManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = DegresurgenceManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setlibelleDegreUrgence("[(Value)]");
DegresurgenceManager::update($obj);
$objUpdated = DegresurgenceManager::findById(1);
echo "Liste des objets" . "<br>";
$array = DegresurgenceManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = DegresurgenceManager::findById(1);
DegresurgenceManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = DegresurgenceManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>