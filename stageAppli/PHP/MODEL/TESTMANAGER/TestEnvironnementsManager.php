<?php

//Test EnvironnementsManager

echo "recherche id = 1" . "<br>";
$obj =EnvironnementsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Environnements(["typeEnv" => "([value 1])"]);
var_dump(EnvironnementsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = EnvironnementsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->settypeEnv("[(Value)]");
EnvironnementsManager::update($obj);
$objUpdated = EnvironnementsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = EnvironnementsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = EnvironnementsManager::findById(1);
EnvironnementsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = EnvironnementsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>