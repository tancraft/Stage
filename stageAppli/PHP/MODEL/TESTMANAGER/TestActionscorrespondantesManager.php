<?php

//Test ActionscorrespondantesManager

echo "recherche id = 1" . "<br>";
$obj =ActionscorrespondantesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Actionscorrespondantes(["idAction" => "([value 1])", "idActivite" => "([value 2])"]);
var_dump(ActionscorrespondantesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ActionscorrespondantesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidAction("[(Value)]");
ActionscorrespondantesManager::update($obj);
$objUpdated = ActionscorrespondantesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ActionscorrespondantesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ActionscorrespondantesManager::findById(1);
ActionscorrespondantesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ActionscorrespondantesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>