USE ambdatabase;

INSERT INTO amb_environnements(idEnv, typeEnv) VALUES (NULL,"Atelier");
INSERT INTO amb_environnements(idEnv, typeEnv) VALUES (NULL,"Centre");

INSERT INTO amb_lieux(idLieu, nomLieu, idEnv) VALUES (NULL,"cabine 1",1);
INSERT INTO amb_lieux(idLieu, nomLieu, idEnv) VALUES (NULL,"cabine 2",1);
INSERT INTO amb_lieux(idLieu, nomLieu, idEnv) VALUES (NULL,"maquette 1",1);
INSERT INTO amb_lieux(idLieu, nomLieu, idEnv) VALUES (NULL,"maquette 2",1);
INSERT INTO amb_lieux(idLieu, nomLieu, idEnv) VALUES (NULL,"Bat 1-RDC-salle 1",2);
INSERT INTO amb_lieux(idLieu, nomLieu, idEnv) VALUES (NULL,"BAT 2-RDC-salle 2",2);
INSERT INTO amb_lieux(idLieu, nomLieu, idEnv) VALUES (NULL,"secreteriat Bureau 1",2);
INSERT INTO amb_lieux(idLieu, nomLieu, idEnv) VALUES (NULL,"chaufferie",2);
INSERT INTO amb_lieux(idLieu, nomLieu, idEnv) VALUES (NULL,"foyer-RDC-Chambre 1",2);
INSERT INTO amb_lieux(idLieu, nomLieu, idEnv) VALUES (NULL,"foyer-RDC-Chambre 2",2);

INSERT INTO amb_roles(idRole, libelleRole) VALUES (NULL,"Administrateur");
INSERT INTO amb_roles(idRole, libelleRole) VALUES (NULL,"RIR");
INSERT INTO amb_roles(idRole, libelleRole) VALUES (NULL,"Formateur référent");
INSERT INTO amb_roles(idRole, libelleRole) VALUES (NULL,"Formateur suppleant");
INSERT INTO amb_roles(idRole, libelleRole) VALUES (NULL,"Stagiaire");

INSERT INTO amb_degresurgence(idDegreUrgence, libelleDegreUrgence) VALUES (NULL,"Immédiate");
INSERT INTO amb_degresurgence(idDegreUrgence, libelleDegreUrgence) VALUES (NULL,"Urgente");
INSERT INTO amb_degresurgence(idDegreUrgence, libelleDegreUrgence) VALUES (NULL,"Rapide");
INSERT INTO amb_degresurgence(idDegreUrgence, libelleDegreUrgence) VALUES (NULL,"Normal");

INSERT INTO amb_actions(idAction, numeroAction, libelleAction) VALUES (NULL,1,"Remplacement");
INSERT INTO amb_actions(idAction, numeroAction, libelleAction) VALUES (NULL,2,"Réglage");
INSERT INTO amb_actions(idAction, numeroAction, libelleAction) VALUES (NULL,3,"Nettoyage");
INSERT INTO amb_actions(idAction, numeroAction, libelleAction) VALUES (NULL,4,"Dépannage");
INSERT INTO amb_actions(idAction, numeroAction, libelleAction) VALUES (NULL,5,"Réparation");
INSERT INTO amb_actions(idAction, numeroAction, libelleAction) VALUES (NULL,6,"Amélioration");
INSERT INTO amb_actions(idAction, numeroAction, libelleAction) VALUES (NULL,7,"Contrôle");

INSERT INTO amb_causes(idCause, numeroCause, libelleCause) VALUES (NULL,1,"Usure");
INSERT INTO amb_causes(idCause, numeroCause, libelleCause) VALUES (NULL,2,"Détérioration");
INSERT INTO amb_causes(idCause, numeroCause, libelleCause) VALUES (NULL,3,"Manque d'entretien");
INSERT INTO amb_causes(idCause, numeroCause, libelleCause) VALUES (NULL,4,"Contrôle de routine");

INSERT INTO amb_typesmaintenances(idTypeMaint, numeroTypeMaint, libelleTypeMaint) VALUES (NULL,1,"améliorative");
INSERT INTO amb_typesmaintenances(idTypeMaint, numeroTypeMaint, libelleTypeMaint) VALUES (NULL,2,"Préventive");
INSERT INTO amb_typesmaintenances(idTypeMaint, numeroTypeMaint, libelleTypeMaint) VALUES (NULL,3,"Corrective");

INSERT INTO amb_utilisateurs (idUser, nomUser, prenomUser, telUser, emailUser, mdpUser, idRole) VALUES (NULL,"admin","admin","0745821463","admin@gmail.com","Admin111*",1);
INSERT INTO amb_utilisateurs (idUser, nomUser, prenomUser, telUser, emailUser, mdpUser, idRole) VALUES (NULL,"Rir","Rir","0425321712","rir@gmail.com","Rir1111*",2);
INSERT INTO amb_utilisateurs (idUser, nomUser, prenomUser, telUser, emailUser, mdpUser, idRole) VALUES (NULL,"formateurUn","formateurUn","0614247894","formateur1@gmail.com","Formateur1*",3);
INSERT INTO amb_utilisateurs (idUser, nomUser, prenomUser, telUser, emailUser, mdpUser, idRole) VALUES (NULL,"formateurDeux","formateurDeux","0240528471","formateur2@gmail.com","Formateur2*",4);
INSERT INTO amb_utilisateurs (idUser, nomUser, prenomUser, telUser, emailUser, mdpUser, idRole) VALUES (NULL,"StagiaireUn","StagiaireUn","0614247894","Stagiaire1@gmail.com","Stagiaire1*",5);
INSERT INTO amb_utilisateurs (idUser, nomUser, prenomUser, telUser, emailUser, mdpUser, idRole) VALUES (NULL,"StagiaireDeux","StagiaireDeux","0240528471","Stagiaire2@gmail.com","Stagiaire2*",5);
INSERT INTO amb_utilisateurs (idUser, nomUser, prenomUser, telUser, emailUser, mdpUser, idRole) VALUES (NULL,"StagiaireTrois","StagiaireTrois","0240528471","Stagiaire3@gmail.com","Stagiaire3*",5);

INSERT INTO amb_formateurs(idUser, matriculeFormateur, typeContrat, dateDebutContrat, dateFinContrat) VALUES (2,"7654321","CDI","2010-07-05",NULL);
INSERT INTO amb_formateurs(idUser, matriculeFormateur, typeContrat, dateDebutContrat, dateFinContrat) VALUES (3,"8756312","CDD","2021-02-01","2021-08-01");

INSERT INTO amb_blocscompetences(idBlocComp, numeroBlocComp, libelleBlocComp) VALUES (NULL,"1","Assurer la maintenance courante des aménagements intérieurs d’un bâtiment");
INSERT INTO amb_blocscompetences(idBlocComp, numeroBlocComp, libelleBlocComp) VALUES (NULL,"2","Assurer la maintenance courante de l’installation et des équipements électriques d’un bâtiment");
INSERT INTO amb_blocscompetences(idBlocComp, numeroBlocComp, libelleBlocComp) VALUES (NULL,"3","Assurer la maintenance courante de l’installation et des équipements thermiques et sanitaires d’un bâtiment");

INSERT INTO amb_offres(idOffre, numeroOffre, dateDebutOffre, dateFinOffre) VALUES (NULL,"012345","2020-06-09","2020-12-09");
INSERT INTO amb_offres(idOffre, numeroOffre, dateDebutOffre, dateFinOffre) VALUES (NULL,"067892","2021-02-21","2021-08-21");
INSERT INTO amb_offres(idOffre, numeroOffre, dateDebutOffre, dateFinOffre) VALUES (NULL,"043215","2021-03-10","2021-09-10");

INSERT INTO amb_stagiaires(idUser, dateDebutFormation, dateFinFormation, numeroBeneficiaire, idOffre) VALUES (4,"2020-06-09","2020-12-09","1654321",1);
INSERT INTO amb_stagiaires(idUser, dateDebutFormation, dateFinFormation, numeroBeneficiaire, idOffre) VALUES (5,"2021-2-21","2021-08-21","2234567",2);
INSERT INTO amb_stagiaires(idUser, dateDebutFormation, dateFinFormation, numeroBeneficiaire, idOffre) VALUES (6,"2021-02-24","2021-08-21","3546123",2);

INSERT INTO amb_animation(idAnimation, idOffre, idUser) VALUES (NULL,1,2);
INSERT INTO amb_animation(idAnimation, idOffre, idUser) VALUES (NULL,2,2);
INSERT INTO amb_animation(idAnimation, idOffre, idUser) VALUES (NULL,2,3);
INSERT INTO amb_animation(idAnimation, idOffre, idUser) VALUES (NULL,3,3);


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

INSERT INTO amb_outilscaisse(idOutilCaisse, nomOutilCaisse, nbOutilCaisse, idUser) VALUES (NULL,"Fontaine de nettoyage pour brosses et rouleaux",4,2);
INSERT INTO amb_outilscaisse(idOutilCaisse, nomOutilCaisse, nbOutilCaisse, idUser) VALUES (NULL,"Perforateur électrique + jeu de forets béton",5,2);
INSERT INTO amb_outilscaisse(idOutilCaisse, nomOutilCaisse, nbOutilCaisse, idUser) VALUES (NULL,"Fontaine de nettoyage pour brosses et rouleaux",4,3);
INSERT INTO amb_outilscaisse(idOutilCaisse, nomOutilCaisse, nbOutilCaisse, idUser) VALUES (NULL,"Augette",5,NULL);

INSERT INTO amb_outilsmagasin(idOutilMagasin, nomOutilMagasin, nbOutilMagasin, idUser) VALUES (NULL,"tournevis plat",2,NULL);
INSERT INTO amb_outilsmagasin(idOutilMagasin, nomOutilMagasin, nbOutilMagasin, idUser) VALUES (NULL,"tournevis cruciforme",4,2);
INSERT INTO amb_outilsmagasin(idOutilMagasin, nomOutilMagasin, nbOutilMagasin, idUser) VALUES (NULL,"tournevis plat",2,NULL);
INSERT INTO amb_outilsmagasin(idOutilMagasin, nomOutilMagasin, nbOutilMagasin, idUser) VALUES (NULL,"clé à molette",3,2);
INSERT INTO amb_outilsmagasin(idOutilMagasin, nomOutilMagasin, nbOutilMagasin, idUser) VALUES (NULL,"marteau",3,3);

INSERT INTO amb_materiaux(idMateriel, nomMateriel, nbDispo, idUser) VALUES (NULL,"Bande à joint - 10 ml",5,NULL);
INSERT INTO amb_materiaux(idMateriel, nomMateriel, nbDispo, idUser) VALUES (NULL,"Bande à joint - 10 ml",2,2);
INSERT INTO amb_materiaux(idMateriel, nomMateriel, nbDispo, idUser) VALUES (NULL,"Bande à joint - 10 ml",1,2);
INSERT INTO amb_materiaux(idMateriel, nomMateriel, nbDispo, idUser) VALUES (NULL,"Bande à joint - 10 ml",0,3);
INSERT INTO amb_materiaux(idMateriel, nomMateriel, nbDispo, idUser) VALUES (NULL,"Bande à joint - 10 ml",4,NULL);

INSERT INTO amb_fichesinterventions(idFicheIntervention, dateDemande, demandeur, telDemandeur, descriptionDemande, statutDemande, validation, appreciation, idUser, idLieu, idOperation, idDegreUrgence) VALUES (NULL,"2020-07-08","Formateur référent","0614247894","Fuite sur le WC Disponibilité de la maquette de 14h00 à 17h00",2,true,"terminer avec succes",2,6,51,1);
INSERT INTO amb_fichesinterventions(idFicheIntervention, dateDemande, demandeur, telDemandeur, descriptionDemande, statutDemande, validation, appreciation, idUser, idLieu, idOperation, idDegreUrgence) VALUES (NULL,"2021-04-06","Formateur référent","0614225832","ampoule grillée",3,NULL,"",2,1,37,2);
INSERT INTO amb_fichesinterventions(idFicheIntervention, dateDemande, demandeur, telDemandeur, descriptionDemande, statutDemande, validation, appreciation, idUser, idLieu, idOperation, idDegreUrgence) VALUES (NULL,"2021-05-08","toto","0714225832","chaise cassée",3,NULL,"",3,1,37,3);

INSERT INTO amb_stagiairesaffectes(idStagiairesAffectes, idUser, idFicheIntervention) VALUES (NULL,4,1);
INSERT INTO amb_stagiairesaffectes(idStagiairesAffectes, idUser, idFicheIntervention) VALUES (NULL,5,2);
INSERT INTO amb_stagiairesaffectes(idStagiairesAffectes, idUser, idFicheIntervention) VALUES (NULL,6,2);

INSERT INTO amb_activites(idActivite, dateIntervention, dateDebutItv, dateFinItv, dureeItv, travauxRealises, travauxNonRealises, observations, idMesm, idTypeMaint, idFicheIntervention) VALUES (NULL,"2020-07-09","2020-07-09T09:00:00","2020-07-09T10:00:00","01:00:00","Changement du joint du robinet équerre d'arrivée d'eau","","Après détection de la fuite sur le robinet équerre d'arrivée d'eau du WC, j'ai remplacé le joint sans difficulté. Après vérification, il n'y a plus de fuite.",10,3,1);
INSERT INTO amb_activites(idActivite, dateIntervention, dateDebutItv, dateFinItv, dureeItv, travauxRealises, travauxNonRealises, observations, idMesm, idTypeMaint, idFicheIntervention) VALUES (NULL,"2021-04-06","2021-04-07T09:30:00","2021-04-07T10:30:00","01:00:00","","ampoule non changer ","il ny a plus d ampoules en stocks. ",5,3,2);
INSERT INTO amb_activites(idActivite, dateIntervention, dateDebutItv, dateFinItv, dureeItv, travauxRealises, travauxNonRealises, observations, idMesm, idTypeMaint, idFicheIntervention) VALUES (NULL,"2021-05-16","2021-05-16T13:30:00","2021-05-16T16:30:00","3:00:00","chaise reparee. ","","il m a fallu emmener a l'atelier. ",4,3,3);
INSERT INTO amb_activites(idActivite, dateIntervention, dateDebutItv, dateFinItv, dureeItv, travauxRealises, travauxNonRealises, observations, idMesm, idTypeMaint, idFicheIntervention) VALUES (NULL,"2021-05-16","2021-05-16T13:30:00","2021-05-16T16:30:00","3:00:00","chaise refaite. ","","des vis etait manquantes. ",4,3,3);

INSERT INTO amb_actionscorrespondantes(idActionsCorrespondantes, idAction, idActivite) VALUES (NULL,4,1);
INSERT INTO amb_actionscorrespondantes(idActionsCorrespondantes, idAction, idActivite) VALUES (NULL,5,2);
INSERT INTO amb_actionscorrespondantes(idActionsCorrespondantes, idAction, idActivite) VALUES (NULL,5,3);

INSERT INTO amb_causesliees(idCausesLiees, idActivite, idCause) VALUES (NULL,1,2);
INSERT INTO amb_causesliees(idCausesLiees, idActivite, idCause) VALUES (NULL,2,2);
INSERT INTO amb_causesliees(idCausesLiees, idActivite, idCause) VALUES (NULL,3,3);

INSERT INTO amb_materiauxutilises(idMateriauxUtilises, idActivite, idMateriel, quantiteMat) VALUES (NULL,1,2,3);
INSERT INTO amb_materiauxutilises(idMateriauxUtilises, idActivite, idMateriel, quantiteMat) VALUES (NULL,1,3,2);
INSERT INTO amb_materiauxutilises(idMateriauxUtilises, idActivite, idMateriel, quantiteMat) VALUES (NULL,2,1,3);
INSERT INTO amb_materiauxutilises(idMateriauxUtilises, idActivite, idMateriel, quantiteMat) VALUES (NULL,2,4,2);
INSERT INTO amb_materiauxutilises(idMateriauxUtilises, idActivite, idMateriel, quantiteMat) VALUES (NULL,3,5,1);

INSERT INTO amb_outilscaisseutilises(idOutilsCaisseUtilises, idActivite, idOutilCaisse, quantiteOutilsCaisse) VALUES (NULL,1,2,1);
INSERT INTO amb_outilscaisseutilises(idOutilsCaisseUtilises, idActivite, idOutilCaisse, quantiteOutilsCaisse) VALUES (NULL,1,4,2);
INSERT INTO amb_outilscaisseutilises(idOutilsCaisseUtilises, idActivite, idOutilCaisse, quantiteOutilsCaisse) VALUES (NULL,2,3,5);
INSERT INTO amb_outilscaisseutilises(idOutilsCaisseUtilises, idActivite, idOutilCaisse, quantiteOutilsCaisse) VALUES (NULL,3,1,2);
INSERT INTO amb_outilscaisseutilises(idOutilsCaisseUtilises, idActivite, idOutilCaisse, quantiteOutilsCaisse) VALUES (NULL,3,2,3);

INSERT INTO amb_outilsmagasinutilises(idOutilsMagasinUtilises, idActivite, idOutilMagasin, quantiteOutilsMagasin) VALUES (NULL,1,5,2);
INSERT INTO amb_outilsmagasinutilises(idOutilsMagasinUtilises, idActivite, idOutilMagasin, quantiteOutilsMagasin) VALUES (NULL,2,2,3);
INSERT INTO amb_outilsmagasinutilises(idOutilsMagasinUtilises, idActivite, idOutilMagasin, quantiteOutilsMagasin) VALUES (NULL,2,4,6);

