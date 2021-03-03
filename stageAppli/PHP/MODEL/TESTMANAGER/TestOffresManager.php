<?php

//Test OffresManager

echo "recherche id = 1" . "<br>";
$obj =OffresManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Offres(["numeroOffre" => "([value 1])", "dateDebutOffre" => "([value 2])", "dateFinOffre" => "([value 3])"]);
var_dump(OffresManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = OffresManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnumeroOffre("[(Value)]");
OffresManager::update($obj);
$objUpdated = OffresManager::findById(1);
echo "Liste des objets" . "<br>";
$array = OffresManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = OffresManager::findById(1);
OffresManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = OffresManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>