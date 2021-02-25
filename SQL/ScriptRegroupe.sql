#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Table: formateurs
#------------------------------------------------------------

CREATE TABLE formateurs(
        iduSer             Int  Auto_increment  NOT NULL ,
        matriculeFormateur Varchar (50) NOT NULL
	,CONSTRAINT formateurs_PK PRIMARY KEY (iduSer)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: offres
#------------------------------------------------------------

CREATE TABLE offres(
        idOffre        Int  Auto_increment  NOT NULL ,
        numeroOffre    Varchar (50) NOT NULL ,
        dateDebutOffre Date NOT NULL ,
        dateFinOffre   Date NOT NULL
	,CONSTRAINT offres_PK PRIMARY KEY (idOffre)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: roles
#------------------------------------------------------------

CREATE TABLE roles(
        idRole      Int  Auto_increment  NOT NULL ,
        libelleRole Varchar (50) NOT NULL
	,CONSTRAINT roles_PK PRIMARY KEY (idRole)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: environnements
#------------------------------------------------------------

CREATE TABLE environnements(
        idEnv   Int  Auto_increment  NOT NULL ,
        typeEnv Varchar (50) NOT NULL
	,CONSTRAINT environnements_PK PRIMARY KEY (idEnv)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: causes
#------------------------------------------------------------

CREATE TABLE causes(
        idCause      Int  Auto_increment  NOT NULL ,
        numeroCause  Varchar (50) NOT NULL ,
        libelleCause Varchar (50) NOT NULL
	,CONSTRAINT causes_PK PRIMARY KEY (idCause)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: blocsCompetences
#------------------------------------------------------------

CREATE TABLE blocsCompetences(
        idBlocComp      Int  Auto_increment  NOT NULL ,
        numeroBlocComp  Varchar (50) NOT NULL ,
        libelleBlocComp Varchar (50) NOT NULL
	,CONSTRAINT blocsCompetences_PK PRIMARY KEY (idBlocComp)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE utilisateurs(
        idUser     Int  Auto_increment  NOT NULL ,
        nomUser    Varchar (50) NOT NULL ,
        prenomUser Varchar (50) NOT NULL ,
        telUser    Varchar (50) NOT NULL ,
        emailUser  Varchar (50) NOT NULL ,
        mdpUser    Varchar (50) NOT NULL ,
        idRole     Int NOT NULL
	,CONSTRAINT utilisateurs_PK PRIMARY KEY (idUser)

	,CONSTRAINT utilisateurs_roles_FK FOREIGN KEY (idRole) REFERENCES roles(idRole)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: lieux
#------------------------------------------------------------

CREATE TABLE lieux(
        idLieu  Int  Auto_increment  NOT NULL ,
        nomlIEU Varchar (50) NOT NULL ,
        idEnv   Int NOT NULL
	,CONSTRAINT lieux_PK PRIMARY KEY (idLieu)

	,CONSTRAINT lieux_environnements_FK FOREIGN KEY (idEnv) REFERENCES environnements(idEnv)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: materiaux
#------------------------------------------------------------

CREATE TABLE materiaux(
        idMateriel  Int  Auto_increment  NOT NULL ,
        nomMateriel Varchar (100) NOT NULL ,
        nbDispo     Int NOT NULL ,
        idUser      Int NOT NULL
	,CONSTRAINT materiaux_PK PRIMARY KEY (idMateriel)

	,CONSTRAINT materiaux_formateurs_FK FOREIGN KEY (idUser) REFERENCES formateurs(idUser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: outils
#------------------------------------------------------------

CREATE TABLE outils(
        idOutil  Int  Auto_increment  NOT NULL ,
        nomOutil Varchar (100) NOT NULL ,
        nbOutil  Int NOT NULL ,
        idUser   Int NOT NULL
	,CONSTRAINT outils_PK PRIMARY KEY (idOutil)

	,CONSTRAINT outils_formateurs_FK FOREIGN KEY (idUser) REFERENCES formateurs(idUser)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: stagiaires
#------------------------------------------------------------

CREATE TABLE stagiaires(
        idUser             Int  Auto_increment  NOT NULL ,
        dateDebutFormation Date NOT NULL ,
        dateFinFormation   Date NOT NULL ,
        numeroBeneficiaire Varchar (50) NOT NULL ,
        idOffre            Int NOT NULL
	,CONSTRAINT stagiaires_PK PRIMARY KEY (idUser)

	,CONSTRAINT stagiaires_offres_FK FOREIGN KEY (idOffre) REFERENCES offres(idOffre)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: fichesInterventions
#------------------------------------------------------------

CREATE TABLE fichesInterventions(
        idFicheIntervention Int  Auto_increment  NOT NULL ,
        dateDemande         Date NOT NULL ,
        descriptionDemande  Text NOT NULL ,
        statutDemande       Int NOT NULL ,
        validation          Bool NOT NULL ,
        appreciation        Text NOT NULL ,
        iduSer              Int NOT NULL ,
        idLieu              Int NOT NULL
	,CONSTRAINT fichesInterventions_PK PRIMARY KEY (idFicheIntervention)

	,CONSTRAINT fichesInterventions_formateurs_FK FOREIGN KEY (iduSer) REFERENCES formateurs(iduSer)
	,CONSTRAINT fichesInterventions_lieux0_FK FOREIGN KEY (idLieu) REFERENCES lieux(idLieu)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: anime
#------------------------------------------------------------

CREATE TABLE anime(
        idOffre Int NOT NULL ,
        iduSer  Int NOT NULL
	,CONSTRAINT anime_PK PRIMARY KEY (idOffre,iduSer)

	,CONSTRAINT anime_offres_FK FOREIGN KEY (idOffre) REFERENCES offres(idOffre)
	,CONSTRAINT anime_formateurs0_FK FOREIGN KEY (iduSer) REFERENCES formateurs(iduSer)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: realise
#------------------------------------------------------------

CREATE TABLE realise(
        idUser              Int NOT NULL ,
        idFicheIntervention Int NOT NULL
	,CONSTRAINT realise_PK PRIMARY KEY (idUser,idFicheIntervention)

	,CONSTRAINT realise_stagiaires_FK FOREIGN KEY (idUser) REFERENCES stagiaires(idUser)
	,CONSTRAINT realise_fichesInterventions0_FK FOREIGN KEY (idFicheIntervention) REFERENCES fichesInterventions(idFicheIntervention)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: mesm
#------------------------------------------------------------

CREATE TABLE mesm(
        idMesm      Int  Auto_increment  NOT NULL ,
        numeroMesm  Varchar (50) NOT NULL ,
        libelleMesm Varchar (50) NOT NULL ,
        idBlocComp  Int NOT NULL
	,CONSTRAINT mesm_PK PRIMARY KEY (idMesm)

	,CONSTRAINT mesm_blocsCompetences_FK FOREIGN KEY (idBlocComp) REFERENCES blocsCompetences(idBlocComp)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: operations
#------------------------------------------------------------

CREATE TABLE operations(
        idOperation       Int  Auto_increment  NOT NULL ,
        numeroOperation   Varchar (50) NOT NULL ,
        intituleOperation Varchar (50) NOT NULL ,
        schemaOperation   Varchar (50) NOT NULL ,
        idMesm            Int NOT NULL
	,CONSTRAINT operations_PK PRIMARY KEY (idOperation)

	,CONSTRAINT operations_mesm_FK FOREIGN KEY (idMesm) REFERENCES mesm(idMesm)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: typesMaintenances
#------------------------------------------------------------

CREATE TABLE typesMaintenances(
        idTypeMaint      Int  Auto_increment  NOT NULL ,
        numeroTypeMaint  Varchar (50) NOT NULL ,
        libelleTypeMaint Varchar (50) NOT NULL
	,CONSTRAINT typesMaintenances_PK PRIMARY KEY (idTypeMaint)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: activites
#------------------------------------------------------------

CREATE TABLE activites(
        idActivite         Int  Auto_increment  NOT NULL ,
        dateIntervention   Date NOT NULL ,
        dateDebutItv       Datetime NOT NULL ,
        dateFinItv         Datetime NOT NULL ,
        travauxRealises    Text NOT NULL ,
        travauxNonRealises Text NOT NULL ,
        observations       Text NOT NULL ,
        idMesm             Int NOT NULL ,
        idTypeMaint        Int NOT NULL
	,CONSTRAINT activites_PK PRIMARY KEY (idActivite)

	,CONSTRAINT activites_mesm_FK FOREIGN KEY (idMesm) REFERENCES mesm(idMesm)
	,CONSTRAINT activites_typesMaintenances0_FK FOREIGN KEY (idTypeMaint) REFERENCES typesMaintenances(idTypeMaint)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: actions
#------------------------------------------------------------

CREATE TABLE actions(
        idAction      Int  Auto_increment  NOT NULL ,
        numeroAction  Varchar (50) NOT NULL ,
        libelleAction Varchar (50) NOT NULL
	,CONSTRAINT actions_PK PRIMARY KEY (idAction)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aPour
#------------------------------------------------------------

CREATE TABLE aPour(
        idActivite Int NOT NULL ,
        idCause    Int NOT NULL
	,CONSTRAINT aPour_PK PRIMARY KEY (idActivite,idCause)

	,CONSTRAINT aPour_activites_FK FOREIGN KEY (idActivite) REFERENCES activites(idActivite)
	,CONSTRAINT aPour_causes0_FK FOREIGN KEY (idCause) REFERENCES causes(idCause)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: corresp
#------------------------------------------------------------

CREATE TABLE corresp(
        idAction   Int NOT NULL ,
        idActivite Int NOT NULL
	,CONSTRAINT corresp_PK PRIMARY KEY (idAction,idActivite)

	,CONSTRAINT corresp_actions_FK FOREIGN KEY (idAction) REFERENCES actions(idAction)
	,CONSTRAINT corresp_activites0_FK FOREIGN KEY (idActivite) REFERENCES activites(idActivite)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: activites
#------------------------------------------------------------

CREATE TABLE activites(
        idAcivite Int  Auto_increment  NOT NULL
	,CONSTRAINT activites_PK PRIMARY KEY (idAcivite)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: utilise
#------------------------------------------------------------

CREATE TABLE utilise(
        idAcivite     Int NOT NULL ,
        idOutil       Int NOT NULL ,
        quantiteOutil Int NOT NULL
	,CONSTRAINT utilise_PK PRIMARY KEY (idAcivite,idOutil)

	,CONSTRAINT utilise_activites_FK FOREIGN KEY (idAcivite) REFERENCES activites(idAcivite)
	,CONSTRAINT utilise_outils0_FK FOREIGN KEY (idOutil) REFERENCES outils(idOutil)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: necessite
#------------------------------------------------------------

CREATE TABLE necessite(
        idAcivite   Int NOT NULL ,
        idMateriel  Int NOT NULL ,
        quantiteMat Int NOT NULL
	,CONSTRAINT necessite_PK PRIMARY KEY (idAcivite,idMateriel)

	,CONSTRAINT necessite_activites_FK FOREIGN KEY (idAcivite) REFERENCES activites(idAcivite)
	,CONSTRAINT necessite_materiaux0_FK FOREIGN KEY (idMateriel) REFERENCES materiaux(idMateriel)
)ENGINE=InnoDB;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: operations
#------------------------------------------------------------

CREATE TABLE operations(
        idOperation Int  Auto_increment  NOT NULL
	,CONSTRAINT operations_PK PRIMARY KEY (idOperation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: fichesInterventions
#------------------------------------------------------------

CREATE TABLE fichesInterventions(
        idFicheIntervention Int  Auto_increment  NOT NULL ,
        idOperation         Int NOT NULL
	,CONSTRAINT fichesInterventions_PK PRIMARY KEY (idFicheIntervention)

	,CONSTRAINT fichesInterventions_operations_FK FOREIGN KEY (idOperation) REFERENCES operations(idOperation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: activites
#------------------------------------------------------------

CREATE TABLE activites(
        idActivite          Int  Auto_increment  NOT NULL ,
        idFicheIntervention Int NOT NULL
	,CONSTRAINT activites_PK PRIMARY KEY (idActivite)

	,CONSTRAINT activites_fichesInterventions_FK FOREIGN KEY (idFicheIntervention) REFERENCES fichesInterventions(idFicheIntervention)
)ENGINE=InnoDB;

