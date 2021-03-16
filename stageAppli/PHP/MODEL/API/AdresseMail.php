<?php
// recuperer l'adresse mail envoyé par JS
// executer la methode Utilisateur ::FindByEmail 
// si il y a un objet=> reponse positive<?phpsinon false

$listUsers = json_encode(UtilisateursManager::getList(true));
