<?php

//Test OperationsManager

echo "recherche id = 1" . "<br>";
$obj =OperationsManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Operations(["numeroOperation" => "([value 1])", "intituleOperation" => "([value 2])", "schemaOperation" => "([value 3])", "idMesm" => "([value 4])"]);
var_dump(OperationsManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = OperationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnumeroOperation("[(Value)]");
OperationsManager::update($obj);
$objUpdated = OperationsManager::findById(1);
echo "Liste des objets" . "<br>";
$array = OperationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = OperationsManager::findById(1);
OperationsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = OperationsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>