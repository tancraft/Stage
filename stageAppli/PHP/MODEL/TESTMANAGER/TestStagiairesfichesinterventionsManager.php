<?php

//Test StagiairesfichesinterventionsManager

echo "recherche id = 1" . "<br>";
$obj =StagiairesfichesinterventionsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Stagiairesfichesinterventions(["dateDebutFormation" => "([value 1])", "dateFinFormation" => "([value 2])", "numeroBeneficiaire" => "([value 3])", "idFicheIntervention" => "([value 4])", "dateDemande" => "([value 5])", "demandeur" => "([value 6])", "descriptionDemande" => "([value 7])", "statutDemande" => "([value 8])", "validation" => "([value 9])", "appreciation" => "([value 10])", "idLieu" => "([value 11])", "nomLieu" => "([value 12])", "idOperation" => "([value 13])", "numeroOperation" => "([value 14])", "intituleOperation" => "([value 15])", "schemaOperation" => "([value 16])", "idMesm" => "([value 17])", "numeroMesm" => "([value 18])", "libelleMesm" => "([value 19])", "numeroBlocComp" => "([value 20])", "libelleBlocComp" => "([value 21])"]);
var_dump(StagiairesfichesinterventionsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = StagiairesfichesinterventionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setdateDebutFormation("[(Value)]");
StagiairesfichesinterventionsManager::update($obj);
$objUpdated = StagiairesfichesinterventionsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = StagiairesfichesinterventionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = StagiairesfichesinterventionsManager::findById(1);
StagiairesfichesinterventionsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = StagiairesfichesinterventionsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>