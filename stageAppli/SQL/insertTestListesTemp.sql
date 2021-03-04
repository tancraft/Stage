
-- ne pas utiliser il s agit de donnes de test pour mes listes

INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,2,"Réglage");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,3,"Nettoyage");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,1,"Remplacement");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,5,"Réparation");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,7,"Contrôle");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,6,"Amélioration");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,4,"Dépannage");

SELECT `numeroAction`,`libelleAction` FROM `actions` ORDER BY `numeroAction`,`libelleAction`;

INSERT INTO `blocscompetences`(`idBlocComp`, `numeroBlocComp`, `libelleBlocComp`) VALUES (NULL,3,"Assurer la maintenance courante de l’installation et des équipements thermiques et sanitaires d’un bâtiment");
INSERT INTO `blocscompetences`(`idBlocComp`, `numeroBlocComp`, `libelleBlocComp`) VALUES (NULL,1,"Assurer la maintenance courante des aménagements intérieurs d’un bâtiment");
INSERT INTO `blocscompetences`(`idBlocComp`, `numeroBlocComp`, `libelleBlocComp`) VALUES (NULL,2,"Assurer la maintenance courante de l’installation et des équipements électriques d’un bâtiment");

SELECT `numeroBlocComp`, `libelleBlocComp` FROM `blocscompetences` ORDER BY `numeroBlocComp`,`libelleBlocComp`;


INSERT INTO `causes`(`idCause`, `numeroCause`, `libelleCause`) VALUES (NULL,3,"Manque d'entretien");
INSERT INTO `causes`(`idCause`, `numeroCause`, `libelleCause`) VALUES (NULL,1,"Usure");
INSERT INTO `causes`(`idCause`, `numeroCause`, `libelleCause`) VALUES (NULL,4,"Contrôle de routine");
INSERT INTO `causes`(`idCause`, `numeroCause`, `libelleCause`) VALUES (NULL,2,"Détérioration");

SELECT `numeroCause`, `libelleCause` FROM `causes` ORDER BY `numeroCause`, `libelleCause`;


--insert des operations

INSERT INTO `blocscompetences`(`idBlocComp`, `numeroBlocComp`, `libelleBlocComp`) VALUES (NULL,"1","Assurer la maintenance courante des aménagements intérieurs d’un bâtiment");
INSERT INTO `blocscompetences`(`idBlocComp`, `numeroBlocComp`, `libelleBlocComp`) VALUES (NULL,"2","Assurer la maintenance courante de l’installation et des équipements électriques d’un bâtiment");
INSERT INTO `blocscompetences`(`idBlocComp`, `numeroBlocComp`, `libelleBlocComp`) VALUES (NULL,"3","Assurer la maintenance courante de l’installation et des équipements thermiques et sanitaires d’un bâtiment");


INSERT INTO `mesm`(`idMesm`, `numeroMesm`, `libelleMesm`, `idBlocComp`) VALUES (NULL,"1.1","Effectuer la maintenance améliorative courante des aménagements intérieurs d’un bâtiment",1);
INSERT INTO `mesm`(`idMesm`, `numeroMesm`, `libelleMesm`, `idBlocComp`) VALUES (NULL,"1.2","Effectuer la maintenance améliorative courante des revêtements intérieurs d’un bâtiment",1);
INSERT INTO `mesm`(`idMesm`, `numeroMesm`, `libelleMesm`, `idBlocComp`) VALUES (NULL,"1.3","Effectuer la maintenance préventive courante des menuiseries et fermetures d’un bâtiment",1);
INSERT INTO `mesm`(`idMesm`, `numeroMesm`, `libelleMesm`, `idBlocComp`) VALUES (NULL,"1.4","Effectuer la maintenance corrective courante des aménagements intérieurs d’un bâtiment",1);
INSERT INTO `mesm`(`idMesm`, `numeroMesm`, `libelleMesm`, `idBlocComp`) VALUES (NULL,"2.1","Effectuer la maintenance améliorative courante d’une installation électrique monophasée d’un bâtiment",2);
INSERT INTO `mesm`(`idMesm`, `numeroMesm`, `libelleMesm`, `idBlocComp`) VALUES (NULL,"2.2","Effectuer la maintenance préventive courante de l’installation et des équipements électriques d’un bâtiment",2);
INSERT INTO `mesm`(`idMesm`, `numeroMesm`, `libelleMesm`, `idBlocComp`) VALUES (NULL,"2.3","Effectuer la maintenance corrective courante de l’installation et des équipements électriques d’un bâtiment",2);
INSERT INTO `mesm`(`idMesm`, `numeroMesm`, `libelleMesm`, `idBlocComp`) VALUES (NULL,"3.1","Effectuer la maintenance améliorative courante de l’installation sanitaire d’un bâtiment",3);
INSERT INTO `mesm`(`idMesm`, `numeroMesm`, `libelleMesm`, `idBlocComp`) VALUES (NULL,"3.2","Effectuer la maintenance préventive courante de l’installation et des équipements thermiques et sanitaires d’un bâtiment",3);
INSERT INTO `mesm`(`idMesm`, `numeroMesm`, `libelleMesm`, `idBlocComp`) VALUES (NULL,"3.3","Effectuer la maintenance corrective courante de l’installation et des équipements thermiques et sanitaires d’un bâtiment",3);

INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.1.1","Préparer une intervention","image 1",1);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.1.2","Déconstruire de menus ouvrages d'aménagements intérieurs d'un bâtiment","image 2",1);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.1.3","Construire une cloison de distribution","image 3",1);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.1.4","Construire un faux plafond de petite surface","image 4",1);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.1.5","Réaliser des ouvrages simples d'aménagement et de protection","image 5",1);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.1.6","Réaliser la pose de différents éléments menuisés manufacturés (plinthes, protections, tablettes, etc.)","image 6",1);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.1.7","Réaliser le montage et démontage de mobiliers tertiaires","image 7",1);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.1.8","Remplacer une serrure sur une menuiserie intérieure","image 8",1);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.2.1","Poser un plafond démontable en dalles","image 9",2);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.2.2","Poser au sol des carreaux céramiques","image 10",2);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.2.3","Poser sur un mur des carreaux céramiques","image 11",2);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.2.4","Poser un revêtement décoratif","image 12",2);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.2.5","Mettre en peinture (Finition B) un plafond","image 13",2);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.2.6","Mettre en peinture (Finition B) un mur","image 14",2);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.2.7","Mettre en peinture (Finition B) une menuiserie bois","image 15",2);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.2.8","Poser au sol un revêtement PVC en dalles","image 16",2);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.3.1","Maintenir en état de fonctionnement une menuiserie intérieure","image 17",3);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.3.2","Maintenir en état de fonctionnement une menuiserie extérieure","image 18",3);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.3.3","Maintenir en état des stores et volets d'un bâtiment","image 19",3);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.3.4","Maintenir en état de fonctionnement une serrure d'un bâtiment","image 20",3);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.1","Remettre en état un revêtement de sol dégradé","image 21",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.2","Remettre en état un plafond revêtu d'une peinture (Finition B)","image 22",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.3","Remettre en état un plafond démontable dégradé","image 23",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.4","Remettre en état une cloison dégradée","image 24",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.5","Remettre en état un mur dégradé revêtu de carreaux céramiques","image 25",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.6","Remettre en état un mur dégradé revêtu d'un revêtement décoratif","image 26",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.7","Remettre en état un mur dégradé revêtu d'une peinture (Finition B)","image 27",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.8","Remettre en état une menuiserie bois peinte dégradée","image 28",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.9","Remettre en état une serrure dégradée intérieure et/ou extérieure d'un bâtiment","image 29",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.10","Remettre en état du petit mobilier dégradé équipant un bâtiment","image 30",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.11","Poser et déposer des accessoires d'agencement","image 31",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"1.4.12","Remettre en état des stores et volets dégradés équipant un bâtiment","image 32",4);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"2.1.1","Réaliser des modifications, des extensions de circuits prises et éclairages d'une installation monophasée","image 33",5);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"2.1.2","Appréhender les risques électriques","image 34",5);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"2.2.1","Vérifier l'état de fonctionnement d'équipements terminaux d'une installation électrique courant fort","image 35",6);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"2.2.2","Vérifier l'état de fonctionnement d'une installation téléphonique","image 36",6);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"2.2.3","Vérifier l'état de fonctionnement des équipements de signalétique (Eclairage de Sécurité et Sécurité Incendie)","image 37",6);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"2.2.4","Vérifier l'état de fonctionnement d'équipements terminaux domotiques","image 38",6);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"2.3.1","Rechercher l'origine et résoudre un dysfonctionnement sur une installation électrique monophasée d'un bâtiment","image 39",7);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"2.3.2","Rechercher l'origine et résoudre un dysfonctionnement d'équipements terminaux téléphoniques d'un bâtiment","image 40",7);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"2.3.3","Identifier et alerter d'un dysfonctionnement d'équipements terminaux (Eclairage de Sécurité et Sécurité Incendie), d'un bâtiment","image 41",7);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"2.3.4","Identifier et alerter d'un dysfonctionnement d'équipements terminaux domotiques","image 42",7);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"3.1.1","Réaliser des extensions d'une installation sanitaire","image 43",8);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"3.1.2","Réaliser des modifications d'une installation sanitaire","image 44",8);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"3.2.1","Vérifier l'état de fonctionnement un réseau d'évacuation EU/EV d'un bâtiment","image 45",9);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"3.2.2","Vérifier l'état de fonctionnement un réseau d'alimentation EF/EC d'un bâtiment","image 46",9);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"3.2.3","Vérifier l'état de fonctionnement d'un appareil sanitaire","image 47",9);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"3.2.4","Vérifier l'état des équipements terminaux d'une installation CVC d'un bâtiment","image 48",9);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"3.3.1","Rechercher l'origine et résoudre un dysfonctionnement d'un réseau EU/EV","image 49",10);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"3.3.2","Rechercher l'origine et résoudre un dysfonctionnement d'un réseau EF/EC","image 50",10);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"3.3.3","Rechercher l'origine et résoudre un dysfonctionnement d'un appareil sanitaire","image 51",10);
INSERT INTO `operations`(`idOperation`, `numeroOperation`, `intituleOperation`, `schemaOperation`, `idMesm`) VALUES (NULL,"3.3.4","Rechercher l'origine et résoudre un dysfonctionnement d'un équipement terminal CVC","image 52",10);
