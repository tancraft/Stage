<?php

//Test BlocscompetencesManager

echo "recherche id = 1" . "<br>";
$obj =BlocscompetencesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Blocscompetences(["numeroBlocComp" => "([value 1])", "libelleBlocComp" => "([value 2])"]);
var_dump(BlocscompetencesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = BlocscompetencesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnumeroBlocComp("[(Value)]");
BlocscompetencesManager::update($obj);
$objUpdated = BlocscompetencesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = BlocscompetencesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = BlocscompetencesManager::findById(1);
BlocscompetencesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = BlocscompetencesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>