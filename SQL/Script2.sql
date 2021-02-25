#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


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

