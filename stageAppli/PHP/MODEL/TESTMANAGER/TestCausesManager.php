<?php

//Test CausesManager

echo "recherche id = 1" . "<br>";
$obj =CausesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Causes(["numeroCause" => "([value 1])", "libelleCause" => "([value 2])"]);
var_dump(CausesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = CausesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnumeroCause("[(Value)]");
CausesManager::update($obj);
$objUpdated = CausesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = CausesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = CausesManager::findById(1);
CausesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = CausesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>