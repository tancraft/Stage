<?php

//Test StagiairesaffectesManager

echo "recherche id = 1" . "<br>";
$obj =StagiairesaffectesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Stagiairesaffectes(["idUser" => "([value 1])", "idFicheIntervention" => "([value 2])"]);
var_dump(StagiairesaffectesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = StagiairesaffectesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidUser("[(Value)]");
StagiairesaffectesManager::update($obj);
$objUpdated = StagiairesaffectesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = StagiairesaffectesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = StagiairesaffectesManager::findById(1);
StagiairesaffectesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = StagiairesaffectesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>