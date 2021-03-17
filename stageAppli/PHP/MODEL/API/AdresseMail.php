<?php

$email=$_POST["emailUser"];
echo json_encode(UtilisateursManager::getByEmail($email));
