<?php

//Test ActionsManager

echo "recherche id = 1" . "<br>";
$obj =ActionsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Actions(["numeroAction" => "([value 1])", "libelleAction" => "([value 2])"]);
var_dump(ActionsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ActionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnumeroAction("[(Value)]");
ActionsManager::update($obj);
$objUpdated = ActionsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ActionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ActionsManager::findById(1);
ActionsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ActionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>