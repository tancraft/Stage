
-- ne pas utiliser il s agit de donnes de test pour mes listes

SELECT numeroAction,libelleAction from amb_actions ORDER BY numeroAction,libelleAction;
SELECT numeroCause, libelleCause from amb_causes ORDER BY numeroCause, libelleCause;
SELECTnumeroOperation, intituleOperation, schemaOperation, idMesm FROM amb_operations ORDER BY intituleOperation, schemaOperation;
SELECT numeroBlocComp, libelleBlocComp from amb_blocscompetences ORDER BY numeroBlocComp,libelleBlocComp;
SELECT numeroOperation, intituleOperation, schemaOperation, idMesm FROM amb_operations ORDER BY numeroOperation, intituleOperation;

--insert des operations

INSERT INTO amb_roles(idRole, libelleRole) VALUES (NULL,"Administrateur");
INSERT INTO amb_roles(idRole, libelleRole) VALUES (NULL,"Formateur référent");
INSERT INTO amb_roles(idRole, libelleRole) VALUES (NULL,"Formateur suppleant");
INSERT INTO amb_roles(idRole, libelleRole) VALUES (NULL,"Stagiaire");

INSERT INTO amb_utilisateurs (idUser, nomUser, prenomUser, telUser, emailUser, mdpUser, idRole) VALUES (NULL,"admin","admin","0745821463","admin@gmail.com","admin1*",1);
INSERT INTO amb_utilisateurs (idUser, nomUser, prenomUser, telUser, emailUser, mdpUser, idRole) VALUES (NULL,"formateur1","formateur1","0614247894","formateur1@gmail.com","Formateur1*",2);
INSERT INTO amb_utilisateurs (idUser, nomUser, prenomUser, telUser, emailUser, mdpUser, idRole) VALUES (NULL,"formateur2","formateur2","0240528471","formateur2@gmail.com","Formateur2*",3);

INSERT INTO amb_blocscompetences(idBlocComp, numeroBlocComp, libelleBlocComp) VALUES (NULL,"1","Assurer la maintenance courante des aménagements intérieurs d’un bâtiment");
INSERT INTO amb_blocscompetences(idBlocComp, numeroBlocComp, libelleBlocComp) VALUES (NULL,"2","Assurer la maintenance courante de l’installation et des équipements électriques d’un bâtiment");
INSERT INTO amb_blocscompetences(idBlocComp, numeroBlocComp, libelleBlocComp) VALUES (NULL,"3","Assurer la maintenance courante de l’installation et des équipements thermiques et sanitaires d’un bâtiment");



INSERT INTO amb_mesm(idMesm, numeroMesm, libelleMesm, idBlocComp) VALUES (NULL,"1.01","Effectuer la maintenance améliorative courante des aménagements intérieurs d’un bâtiment",1);
INSERT INTO amb_mesm(idMesm, numeroMesm, libelleMesm, idBlocComp) VALUES (NULL,"1.02","Effectuer la maintenance améliorative courante des revêtements intérieurs d’un bâtiment",1);
INSERT INTO amb_mesm(idMesm, numeroMesm, libelleMesm, idBlocComp) VALUES (NULL,"1.03","Effectuer la maintenance préventive courante des menuiseries et fermetures d’un bâtiment",1);
INSERT INTO amb_mesm(idMesm, numeroMesm, libelleMesm, idBlocComp) VALUES (NULL,"1.04","Effectuer la maintenance corrective courante des aménagements intérieurs d’un bâtiment",1);
INSERT INTO amb_mesm(idMesm, numeroMesm, libelleMesm, idBlocComp) VALUES (NULL,"2.01","Effectuer la maintenance améliorative courante d’une installation électrique monophasée d’un bâtiment",2);
INSERT INTO amb_mesm(idMesm, numeroMesm, libelleMesm, idBlocComp) VALUES (NULL,"2.02","Effectuer la maintenance préventive courante de l’installation et des équipements électriques d’un bâtiment",2);
INSERT INTO amb_mesm(idMesm, numeroMesm, libelleMesm, idBlocComp) VALUES (NULL,"2.03","Effectuer la maintenance corrective courante de l’installation et des équipements électriques d’un bâtiment",2);
INSERT INTO amb_mesm(idMesm, numeroMesm, libelleMesm, idBlocComp) VALUES (NULL,"3.01","Effectuer la maintenance améliorative courante de l’installation sanitaire d’un bâtiment",3);
INSERT INTO amb_mesm(idMesm, numeroMesm, libelleMesm, idBlocComp) VALUES (NULL,"3.02","Effectuer la maintenance préventive courante de l’installation et des équipements thermiques et sanitaires d’un bâtiment",3);
INSERT INTO amb_mesm(idMesm, numeroMesm, libelleMesm, idBlocComp) VALUES (NULL,"3.03","Effectuer la maintenance corrective courante de l’installation et des équipements thermiques et sanitaires d’un bâtiment",3);


INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.01.01","Préparer une intervention","image 1",1);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.01.02","Déconstruire de menus ouvrages d'aménagements intérieurs d'un bâtiment","image 2",1);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.01.03","Construire une cloison de distribution","image 3",1);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.01.04","Construire un faux plafond de petite surface","image 4",1);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.01.05","Réaliser des ouvrages simples d'aménagement et de protection","image 5",1);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.01.06","Réaliser la pose de différents éléments menuisés manufacturés (plinthes, protections, tablettes, etc.)","image 6",1);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.01.07","Réaliser le montage et démontage de mobiliers tertiaires","image 7",1);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.01.08","Remplacer une serrure sur une menuiserie intérieure","image 8",1);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.02.01","Poser un plafond démontable en dalles","image 9",2);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.02.02","Poser au sol des carreaux céramiques","image 10",2);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.02.03","Poser sur un mur des carreaux céramiques","image 11",2);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.02.04","Poser un revêtement décoratif","image 12",2);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.02.05","Mettre en peinture (Finition B) un plafond","image 13",2);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.02.06","Mettre en peinture (Finition B) un mur","image 14",2);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.02.07","Mettre en peinture (Finition B) une menuiserie bois","image 15",2);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.02.08","Poser au sol un revêtement PVC en dalles","image 16",2);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.03.01","Maintenir en état de fonctionnement une menuiserie intérieure","image 17",3);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.03.02","Maintenir en état de fonctionnement une menuiserie extérieure","image 18",3);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.03.03","Maintenir en état des stores et volets d'un bâtiment","image 19",3);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.03.04","Maintenir en état de fonctionnement une serrure d'un bâtiment","image 20",3);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.01","Remettre en état un revêtement de sol dégradé","image 21",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.02","Remettre en état un plafond revêtu d'une peinture (Finition B)","image 22",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.03","Remettre en état un plafond démontable dégradé","image 23",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.04","Remettre en état une cloison dégradée","image 24",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.05","Remettre en état un mur dégradé revêtu de carreaux céramiques","image 25",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.06","Remettre en état un mur dégradé revêtu d'un revêtement décoratif","image 26",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.07","Remettre en état un mur dégradé revêtu d'une peinture (Finition B)","image 27",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.08","Remettre en état une menuiserie bois peinte dégradée","image 28",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.09","Remettre en état une serrure dégradée intérieure et/ou extérieure d'un bâtiment","image 29",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.10","Remettre en état du petit mobilier dégradé équipant un bâtiment","image 30",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.11","Poser et déposer des accessoires d'agencement","image 31",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"1.04.12","Remettre en état des stores et volets dégradés équipant un bâtiment","image 32",4);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"2.01.01","Réaliser des modifications, des extensions de circuits prises et éclairages d'une installation monophasée","image 33",5);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"2.01.02","Appréhender les risques électriques","image 34",5);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"2.02.01","Vérifier l'état de fonctionnement d'équipements terminaux d'une installation électrique courant fort","image 35",6);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"2.02.02","Vérifier l'état de fonctionnement d'une installation téléphonique","image 36",6);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"2.02.03","Vérifier l'état de fonctionnement des équipements de signalétique (Eclairage de Sécurité et Sécurité Incendie)","image 37",6);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"2.02.04","Vérifier l'état de fonctionnement d'équipements terminaux domotiques","image 38",6);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"2.03.01","Rechercher l'origine et résoudre un dysfonctionnement sur une installation électrique monophasée d'un bâtiment","image 39",7);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"2.03.02","Rechercher l'origine et résoudre un dysfonctionnement d'équipements terminaux téléphoniques d'un bâtiment","image 40",7);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"2.03.03","Identifier et alerter d'un dysfonctionnement d'équipements terminaux (Eclairage de Sécurité et Sécurité Incendie), d'un bâtiment","image 41",7);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"2.03.04","Identifier et alerter d'un dysfonctionnement d'équipements terminaux domotiques","image 42",7);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"3.01.01","Réaliser des extensions d'une installation sanitaire","image 43",8);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"3.01.02","Réaliser des modifications d'une installation sanitaire","image 44",8);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"3.02.01","Vérifier l'état de fonctionnement un réseau d'évacuation EU/EV d'un bâtiment","image 45",9);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"3.02.02","Vérifier l'état de fonctionnement un réseau d'alimentation EF/EC d'un bâtiment","image 46",9);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"3.02.03","Vérifier l'état de fonctionnement d'un appareil sanitaire","image 47",9);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"3.02.04","Vérifier l'état des équipements terminaux d'une installation CVC d'un bâtiment","image 48",9);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"3.03.01","Rechercher l'origine et résoudre un dysfonctionnement d'un réseau EU/EV","image 49",10);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"3.03.02","Rechercher l'origine et résoudre un dysfonctionnement d'un réseau EF/EC","image 50",10);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"3.03.03","Rechercher l'origine et résoudre un dysfonctionnement d'un appareil sanitaire","image 51",10);
INSERT INTO amb_operations(idOperation, numeroOperation, intituleOperation, schemaOperation, idMesm) VALUES (NULL,"3.03.04","Rechercher l'origine et résoudre un dysfonctionnement d'un équipement terminal CVC","image 52",10);







