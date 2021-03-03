<?php

//Test FicheactiviteManager

echo "recherche id = 1" . "<br>";
$obj =FicheactiviteManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Ficheactivite(["dateIntervention" => "([value 1])", "dateDebutItv" => "([value 2])", "dateFinItv" => "([value 3])", "dureeItv" => "([value 4])", "travauxRealises" => "([value 5])", "travauxNonRealises" => "([value 6])", "observations" => "([value 7])", "idCause" => "([value 8])", "numeroCause" => "([value 9])", "libelleCause" => "([value 10])", "idMesm" => "([value 11])", "numeroMesm" => "([value 12])", "libelleMesm" => "([value 13])", "idTypeMaint" => "([value 14])", "numeroTypeMaint" => "([value 15])", "libelleTypeMaint" => "([value 16])", "idAction" => "([value 17])", "numeroAction" => "([value 18])", "libelleAction" => "([value 19])", "idFicheIntervention" => "([value 20])", "dateDemande" => "([value 21])", "demandeur" => "([value 22])", "idOperation" => "([value 23])", "idMateriel" => "([value 24])", "nomMateriel" => "([value 25])", "quantiteMat" => "([value 26])", "idOutilCaisse" => "([value 27])", "nomOutilCaisse" => "([value 28])", "quantiteOutilsCaisse" => "([value 29])", "idOutilMagasin" => "([value 30])", "nomOutilMagasin" => "([value 31])", "quantiteOutilsMagasin" => "([value 32])"]);
var_dump(FicheactiviteManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = FicheactiviteManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setdateIntervention("[(Value)]");
FicheactiviteManager::update($obj);
$objUpdated = FicheactiviteManager::findById(1);
echo "Liste des objets" . "<br>";
$array = FicheactiviteManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = FicheactiviteManager::findById(1);
FicheactiviteManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = FicheactiviteManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>