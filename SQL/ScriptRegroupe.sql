#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

DROP DATABASE IF EXISTS ambDatabase;
CREATE DATABASE ambDatabase;
USE ambDatabase;

DROP TABLE IF EXISTS formateurs;
DROP TABLE IF EXISTS offres;
DROP TABLE IF EXISTS stagiaires;
DROP TABLE IF EXISTS roles;
DROP TABLE IF EXISTS utilisateurs;
DROP TABLE IF EXISTS environnements;
DROP TABLE IF EXISTS lieux;
DROP TABLE IF EXISTS causes;
DROP TABLE IF EXISTS typesMaintenances;
DROP TABLE IF EXISTS actions;
DROP TABLE IF EXISTS blocsCompetences;
DROP TABLE IF EXISTS mesm;
DROP TABLE IF EXISTS operations;
DROP TABLE IF EXISTS fichesInterventions;
DROP TABLE IF EXISTS activites;
DROP TABLE IF EXISTS materiaux;
DROP TABLE IF EXISTS outils;
DROP TABLE IF EXISTS animation;
DROP TABLE IF EXISTS realise;
DROP TABLE IF EXISTS aPour;
DROP TABLE IF EXISTS correspond;
DROP TABLE IF EXISTS utiliser;
DROP TABLE IF EXISTS utilise;

#------------------------------------------------------------
# Table: formateurs
#------------------------------------------------------------

CREATE TABLE formateurs(
        iduSer             Int  Auto_increment  NOT NULL PRIMARY KEY,
        matriculeFormateur Varchar (50) NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: offres
#------------------------------------------------------------

CREATE TABLE offres(
        idOffre        Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroOffre    Varchar (50) NOT NULL ,
        dateDebutOffre Date NOT NULL ,
        dateFinOffre   Date NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: stagiaires
#------------------------------------------------------------

CREATE TABLE stagiaires(
        idUser             Int  Auto_increment  NOT NULL PRIMARY KEY,
        dateDebutFormation Date NOT NULL ,
        dateFinFormation   Date NOT NULL ,
        numeroBeneficiaire Varchar (50) NOT NULL ,
        idOffre            Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: roles
#------------------------------------------------------------

CREATE TABLE roles(
        idRole      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleRole Varchar (50) NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE utilisateurs(
        idUser     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomUser    Varchar (50) NOT NULL ,
        prenomUser Varchar (50) NOT NULL ,
        telUser    Varchar (50) NOT NULL ,
        emailUser  Varchar (50) NOT NULL ,
        mdpUser    Varchar (50) NOT NULL ,
        idRole     Int NOT NULL,
        UNIQUE KEY email (emailUser)

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: environnements
#------------------------------------------------------------

CREATE TABLE environnements(
        idEnv   Int  Auto_increment  NOT NULL PRIMARY KEY,
        typeEnv Varchar (50) NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: lieux
#------------------------------------------------------------

CREATE TABLE lieux(
        idLieu  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomLieu Varchar (50) NOT NULL ,
        idEnv   Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: causes
#------------------------------------------------------------

CREATE TABLE causes(
        idCause      Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroCause  Varchar (50) NOT NULL ,
        libelleCause Varchar (50) NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: typesMaintenances
#------------------------------------------------------------

CREATE TABLE typesMaintenances(
        idTypeMaint      Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroTypeMaint  Varchar (50) NOT NULL ,
        libelleTypeMaint Varchar (50) NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: actions
#------------------------------------------------------------

CREATE TABLE actions(
        idAction      Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroAction  Varchar (50) NOT NULL ,
        libelleAction Varchar (50) NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: blocsCompetences
#------------------------------------------------------------

CREATE TABLE blocsCompetences(
        idBlocComp      Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroBlocComp  Varchar (50) NOT NULL ,
        libelleBlocComp Varchar (50) NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mesm
#------------------------------------------------------------

CREATE TABLE mesm(
        idMesm      Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroMesm  Varchar (50) NOT NULL ,
        libelleMesm Varchar (50) NOT NULL ,
        idBlocComp  Int NOT NULL

)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: operations
#------------------------------------------------------------

CREATE TABLE operations(
        idOperation       Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroOperation   Varchar (50) NOT NULL ,
        intituleOperation Varchar (50) NOT NULL ,
        schemaOperation   Varchar (50) NULL ,
        idMesm            Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: fichesInterventions
#------------------------------------------------------------

CREATE TABLE fichesInterventions(
        idFicheIntervention Int  Auto_increment  NOT NULL PRIMARY KEY,
        dateDemande         Date NOT NULL ,
        descriptionDemande  Text NOT NULL ,
        statutDemande       Int NOT NULL ,
        validation          Bool NOT NULL ,
        appreciation        Text NULL ,
        iduSer              Int NOT NULL ,
        idLieu              Int NOT NULL ,
        idOperation         Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: activites
#------------------------------------------------------------

CREATE TABLE activites(
        idActivite          Int  Auto_increment  NOT NULL PRIMARY KEY,
        dateIntervention    Date NOT NULL ,
        dateDebutItv        Datetime NOT NULL ,
        dateFinItv          Datetime NOT NULL ,
        travauxRealises     Text NOT NULL ,
        travauxNonRealises  Text NOT NULL ,
        observations        Text NOT NULL ,
        idMesm              Int NOT NULL ,
        idTypeMaint         Int NOT NULL ,
        idFicheIntervention Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: materiaux
#------------------------------------------------------------

CREATE TABLE materiaux(
        idMateriel  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomMateriel Varchar (100) NOT NULL ,
        nbDispo     Int NOT NULL ,
        iduSer      Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: outils
#------------------------------------------------------------

CREATE TABLE outils(
        idOutil  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomOutil Varchar (100) NOT NULL ,
        nbOutil  Int NOT NULL ,
        iduSer   Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: animation
#------------------------------------------------------------

CREATE TABLE animation(
        idAnimation Int NOT NULL PRIMARY KEY,
        idOffre Int NOT NULL,
        iduSer  Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: realise
#------------------------------------------------------------

CREATE TABLE realise(
        idRealise           Int NOT NULL PRIMARY KEY,
        idUser              Int NOT NULL ,
        idFicheIntervention Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aPour
#------------------------------------------------------------

CREATE TABLE aPour(
        idApour    Int NOT NULL PRIMARY KEY ,
        idActivite Int NOT NULL ,
        idCause    Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: correspond
#------------------------------------------------------------

CREATE TABLE correspond(
        idCorrespond  Int NOT NULL PRIMARY KEY ,   
        idAction   Int NOT NULL ,
        idActivite Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utiliser
#------------------------------------------------------------

CREATE TABLE utiliser(
        idUtiliser     Int NOT NULL  PRIMARY KEY,
        idActivite    Int NOT NULL ,
        idOutil       Int NOT NULL ,
        quantiteOutil Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilise
#------------------------------------------------------------

CREATE TABLE utilise(
        idUtilise Int NOT NULL PRIMARY KEY,
        idActivite  Int NOT NULL ,
        idMateriel  Int NOT NULL ,
        quantiteMat Int NOT NULL

)ENGINE=InnoDB;

ALTER TABLE stagiaires ADD CONSTRAINT FK_stagiaires_offres FOREIGN KEY (idOffre) REFERENCES offres(idOffre);

ALTER TABLE  utilisateurs ADD CONSTRAINT FK_utilisateurs_roles FOREIGN KEY (idRole) REFERENCES roles(idRole);

ALTER TABLE lieux ADD CONSTRAINT FK_lieux_environnements FOREIGN KEY (idEnv) REFERENCES environnements(idEnv);

ALTER TABLE mesm ADD CONSTRAINT FK_mesm__blocsCompetences FOREIGN KEY (idBlocComp) REFERENCES blocsCompetences(idBlocComp);

ALTER TABLE operations ADD CONSTRAINT FK_operations__mesm FOREIGN KEY (idMesm) REFERENCES mesm(idMesm);

ALTER TABLE fichesInterventions ADD CONSTRAINT FK_fichesInterventions_formateurs FOREIGN KEY (iduSer) REFERENCES formateurs(iduSer);
ALTER TABLE fichesInterventions ADD CONSTRAINT FK_fichesInterventions_lieux0 FOREIGN KEY (idLieu) REFERENCES lieux(idLieu);
ALTER TABLE fichesInterventions ADD CONSTRAINT FK_fichesInterventions__operations1 FOREIGN KEY (idOperation) REFERENCES operations(idOperation);


ALTER TABLE activites ADD CONSTRAINT FK_activites__mesm FOREIGN KEY (idMesm) REFERENCES mesm(idMesm);
ALTER TABLE activites ADD CONSTRAINT FK_activites__typesMaintenances0 FOREIGN KEY (idTypeMaint) REFERENCES typesMaintenances(idTypeMaint);
ALTER TABLE activites ADD CONSTRAINT FK_activites_fichesInterventions1 FOREIGN KEY (idFicheIntervention) REFERENCES fichesInterventions(idFicheIntervention);


ALTER TABLE materiaux ADD CONSTRAINT FK_materiaux_formateurs FOREIGN KEY (iduSer) REFERENCES formateurs(iduSer);


ALTER TABLE outils ADD CONSTRAINT FK_outils_formateurs FOREIGN KEY (iduSer) REFERENCES formateurs(iduSer);


ALTER TABLE animation ADD CONSTRAINT FK_animation_offres FOREIGN KEY (idOffre) REFERENCES offres(idOffre);
ALTER TABLE animation ADD CONSTRAINT FK_animation_formateurs0 FOREIGN KEY (iduSer) REFERENCES formateurs(iduSer);


ALTER TABLE realise ADD CONSTRAINT FK_realise_stagiaires FOREIGN KEY (idUser) REFERENCES stagiaires(idUser);
ALTER TABLE realise ADD CONSTRAINT FK_realise_fichesInterventions0 FOREIGN KEY (idFicheIntervention) REFERENCES fichesInterventions(idFicheIntervention);

ALTER TABLE aPour ADD CONSTRAINT FK_aPour__activites FOREIGN KEY (idActivite) REFERENCES activites(idActivite);
ALTER TABLE aPour ADD CONSTRAINT FK_aPour__causes0 FOREIGN KEY (idCause) REFERENCES causes(idCause);


ALTER TABLE correspond ADD CONSTRAINT FK_correspond__actions FOREIGN KEY (idAction) REFERENCES actions(idAction);
ALTER TABLE correspond ADD CONSTRAINT FK_correspond__activites0 FOREIGN KEY (idActivite) REFERENCES activites(idActivite);


ALTER TABLE utiliser ADD CONSTRAINT FK_utiliser__activites FOREIGN KEY (idActivite) REFERENCES activites(idActivite);
ALTER TABLE utiliser ADD CONSTRAINT FK_utiliser__outils0 FOREIGN KEY (idOutil) REFERENCES outils(idOutil);


ALTER TABLE utilise ADD CONSTRAINT FK_utilise__activites FOREIGN KEY (idActivite) REFERENCES activites(idActivite);
ALTER TABLE utilise ADD CONSTRAINT FK_utilise__materiaux0 FOREIGN KEY (idMateriel) REFERENCES materiaux(idMateriel);


CREATE VIEW  offreFormateur as
SELECT
    f.iduSer,
    f.matriculeFormateur,
    o.idOffre,
    o.numeroOffre,
    o.dateDebutOffre,
    o.dateFinOffre
FROM
    formateurs AS f
INNER JOIN animation AS a
ON
    f.iduSer = a.iduSer
INNER JOIN offres AS o
ON
    a.idOffre = o.idOffre;

CREATE VIEW  stagiaireFiche as
SELECT
    s.iduSer,
    s.dateDebutFormation,
    s.dateFinFormation,
    s.numeroBeneficiaire,
    fi.idFicheIntervention,
    fi.dateDemande,
    fi.descriptionDemande,
    fi.statutDemande,
    fi.validation,
    fi.appreciation,
    li.idLieu,
    li.nomLieu,
    op.idOperation,
    op.numeroOperation,
    op.intituleOperation,
    op.schemaOperation,
    m.idMesm,
    m.numeroMesm,
    m.libelleMesm
FROM
    stagiaires AS s
INNER JOIN realise AS r
ON
    s.iduSer = r.iduSer
INNER JOIN fichesInterventions AS fi
ON
    r.idFicheIntervention = fi.idFicheIntervention
INNER JOIN lieux AS li
ON
    fi.idLieu = li.idLieu
INNER JOIN operations AS op
ON
    op.idOperation = fi.idOperation
INNER JOIN mesm AS m
ON
    m.idMesm = op.idMesm;
