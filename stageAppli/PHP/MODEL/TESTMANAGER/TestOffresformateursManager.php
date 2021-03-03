<?php

//Test OffresformateursManager

echo "recherche id = 1" . "<br>";
$obj =OffresformateursManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Offresformateurs(["matriculeFormateur" => "([value 1])", "typeContrat" => "([value 2])", "dateDebutContrat" => "([value 3])", "dateFinContrat" => "([value 4])", "idOffre" => "([value 5])", "numeroOffre" => "([value 6])", "dateDebutOffre" => "([value 7])", "dateFinOffre" => "([value 8])"]);
var_dump(OffresformateursManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = OffresformateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setmatriculeFormateur("[(Value)]");
OffresformateursManager::update($obj);
$objUpdated = OffresformateursManager::findById(1);
echo "Liste des objets" . "<br>";
$array = OffresformateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = OffresformateursManager::findById(1);
OffresformateursManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = OffresformateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>