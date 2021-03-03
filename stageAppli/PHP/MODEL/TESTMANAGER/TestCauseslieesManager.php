<?php

//Test CauseslieesManager

echo "recherche id = 1" . "<br>";
$obj =CauseslieesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Causesliees(["idActivite" => "([value 1])", "idCause" => "([value 2])"]);
var_dump(CauseslieesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = CauseslieesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidActivite("[(Value)]");
CauseslieesManager::update($obj);
$objUpdated = CauseslieesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = CauseslieesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = CauseslieesManager::findById(1);
CauseslieesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = CauseslieesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>