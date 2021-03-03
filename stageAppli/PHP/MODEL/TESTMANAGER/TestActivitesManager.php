<?php

//Test ActivitesManager

echo "recherche id = 1" . "<br>";
$obj =ActivitesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Activites(["dateIntervention" => "([value 1])", "dateDebutItv" => "([value 2])", "dateFinItv" => "([value 3])", "dureeItv" => "([value 4])", "travauxRealises" => "([value 5])", "travauxNonRealises" => "([value 6])", "observations" => "([value 7])", "idMesm" => "([value 8])", "idTypeMaint" => "([value 9])", "idFicheIntervention" => "([value 10])"]);
var_dump(ActivitesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = ActivitesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setdateIntervention("[(Value)]");
ActivitesManager::update($obj);
$objUpdated = ActivitesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = ActivitesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = ActivitesManager::findById(1);
ActivitesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = ActivitesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>