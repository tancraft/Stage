<?php

//Test FichesinterventionsManager

echo "recherche id = 1" . "<br>";
$obj =FichesinterventionsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Fichesinterventions(["dateDemande" => "([value 1])", "demandeur" => "([value 2])", "descriptionDemande" => "([value 3])", "statutDemande" => "([value 4])", "validation" => "([value 5])", "appreciation" => "([value 6])", "idUser" => "([value 7])", "idLieu" => "([value 8])", "idOperation" => "([value 9])", "idDegreUrgence" => "([value 10])"]);
var_dump(FichesinterventionsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = FichesinterventionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setdateDemande("[(Value)]");
FichesinterventionsManager::update($obj);
$objUpdated = FichesinterventionsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = FichesinterventionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = FichesinterventionsManager::findById(1);
FichesinterventionsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = FichesinterventionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>