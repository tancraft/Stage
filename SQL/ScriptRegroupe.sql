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
DROP TABLE IF EXISTS stagiairesAffectes;
DROP TABLE IF EXISTS causesLiees;
DROP TABLE IF EXISTS actionsCorrespondantes;
DROP TABLE IF EXISTS outilsUtilises;

#------------------------------------------------------------
# Table: formateurs
#------------------------------------------------------------

CREATE TABLE formateurs(
        idUser             Int  NOT NULL PRIMARY KEY,
        matriculeFormateur Varchar (50) NOT NULL,
        typeContrat        Varchar (50) NOT NULL ,
        dateDebutContrat   Date NOT NULL ,
        dateFinContrat     Date NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: offres
#------------------------------------------------------------

CREATE TABLE offres(
        idOffre        Int Auto_increment  NOT NULL PRIMARY KEY,
        numeroOffre    Varchar (50) NOT NULL ,
        dateDebutOffre Date NOT NULL ,
        dateFinOffre   Date NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: stagiaires
#------------------------------------------------------------

CREATE TABLE stagiaires(
        idUser             Int NOT NULL PRIMARY KEY,
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
        idUser              Int NOT NULL ,
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
        dureeItv            Datetime NOT NULL ,
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
        idUser      Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: outils
#------------------------------------------------------------

CREATE TABLE outils(
        idOutil  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomOutil Varchar (100) NOT NULL ,
        nbOutil  Int NOT NULL ,
        idUser   Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: animation
#------------------------------------------------------------

CREATE TABLE animation(
        idAnimation Int NOT NULL PRIMARY KEY,
        idOffre Int NOT NULL,
        idUser  Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: stagiairesAffectes
#------------------------------------------------------------

CREATE TABLE stagiairesAffectes(
        idStagiairesAffectes           Int NOT NULL PRIMARY KEY,
        idUser              Int NOT NULL ,
        idFicheIntervention Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: causesLiees
#------------------------------------------------------------

CREATE TABLE causesLiees(
        idCausesLiees    Int NOT NULL PRIMARY KEY ,
        idActivite Int NOT NULL ,
        idCause    Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: actionsCorrespondantes
#------------------------------------------------------------

CREATE TABLE actionsCorrespondantes(
        idActionsCorrespondantes  Int NOT NULL PRIMARY KEY ,   
        idAction   Int NOT NULL ,
        idActivite Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: outilsUtilises
#------------------------------------------------------------

CREATE TABLE outilsUtilises(
        idOutilsUtilises     Int NOT NULL  PRIMARY KEY,
        idActivite    Int NOT NULL ,
        idOutil       Int NOT NULL ,
        quantiteOutil Int NOT NULL

)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: materiauxUtilises
#------------------------------------------------------------

CREATE TABLE materiauxUtilises(
        idMateriauxUtilises Int NOT NULL PRIMARY KEY,
        idActivite  Int NOT NULL ,
        idMateriel  Int NOT NULL ,
        quantiteMat Int NOT NULL

)ENGINE=InnoDB;

#------------------------------------------------------------
# cle etrangeres
#------------------------------------------------------------

ALTER TABLE stagiaires ADD CONSTRAINT FK_stagiaires_offres FOREIGN KEY (idOffre) REFERENCES offres(idOffre);

ALTER TABLE  utilisateurs ADD CONSTRAINT FK_utilisateurs_roles FOREIGN KEY (idRole) REFERENCES roles(idRole);

ALTER TABLE lieux ADD CONSTRAINT FK_lieux_environnements FOREIGN KEY (idEnv) REFERENCES environnements(idEnv);

ALTER TABLE mesm ADD CONSTRAINT FK_mesm__blocsCompetences FOREIGN KEY (idBlocComp) REFERENCES blocsCompetences(idBlocComp);

ALTER TABLE operations ADD CONSTRAINT FK_operations__mesm FOREIGN KEY (idMesm) REFERENCES mesm(idMesm);

ALTER TABLE fichesInterventions ADD CONSTRAINT FK_fichesInterventions_formateurs FOREIGN KEY (idUser) REFERENCES formateurs(idUser);
ALTER TABLE fichesInterventions ADD CONSTRAINT FK_fichesInterventions_lieux0 FOREIGN KEY (idLieu) REFERENCES lieux(idLieu);
ALTER TABLE fichesInterventions ADD CONSTRAINT FK_fichesInterventions__operations1 FOREIGN KEY (idOperation) REFERENCES operations(idOperation);


ALTER TABLE activites ADD CONSTRAINT FK_activites__mesm FOREIGN KEY (idMesm) REFERENCES mesm(idMesm);
ALTER TABLE activites ADD CONSTRAINT FK_activites__typesMaintenances0 FOREIGN KEY (idTypeMaint) REFERENCES typesMaintenances(idTypeMaint);
ALTER TABLE activites ADD CONSTRAINT FK_activites_fichesInterventions1 FOREIGN KEY (idFicheIntervention) REFERENCES fichesInterventions(idFicheIntervention);


ALTER TABLE materiaux ADD CONSTRAINT FK_materiaux_formateurs FOREIGN KEY (idUser) REFERENCES formateurs(idUser);


ALTER TABLE outils ADD CONSTRAINT FK_outils_formateurs FOREIGN KEY (idUser) REFERENCES formateurs(idUser);


ALTER TABLE animation ADD CONSTRAINT FK_animation_offres FOREIGN KEY (idOffre) REFERENCES offres(idOffre);
ALTER TABLE animation ADD CONSTRAINT FK_animation_formateurs0 FOREIGN KEY (idUser) REFERENCES formateurs(idUser);


ALTER TABLE stagiairesAffectes ADD CONSTRAINT FK_stagiairesAffectes_stagiaires FOREIGN KEY (idUser) REFERENCES stagiaires(idUser);
ALTER TABLE stagiairesAffectes ADD CONSTRAINT FK_stagiairesAffectes_fichesInterventions0 FOREIGN KEY (idFicheIntervention) REFERENCES fichesInterventions(idFicheIntervention);

ALTER TABLE causesLiees ADD CONSTRAINT FK_causesLiees__activites FOREIGN KEY (idActivite) REFERENCES activites(idActivite);
ALTER TABLE causesLiees ADD CONSTRAINT FK_causesLiees__causes0 FOREIGN KEY (idCause) REFERENCES causes(idCause);


ALTER TABLE actionsCorrespondantes ADD CONSTRAINT FK_actionsCorrespondantes__actions FOREIGN KEY (idAction) REFERENCES actions(idAction);
ALTER TABLE actionsCorrespondantes ADD CONSTRAINT FK_actionsCorrespondantes__activites0 FOREIGN KEY (idActivite) REFERENCES activites(idActivite);


ALTER TABLE outilsUtilises ADD CONSTRAINT FK_outilsUtilises__activites FOREIGN KEY (idActivite) REFERENCES activites(idActivite);
ALTER TABLE outilsUtilises ADD CONSTRAINT FK_outilsUtilises__outils0 FOREIGN KEY (idOutil) REFERENCES outils(idOutil);


ALTER TABLE materiauxUtilises ADD CONSTRAINT FK_materiauxUtilises__activites FOREIGN KEY (idActivite) REFERENCES activites(idActivite);
ALTER TABLE materiauxUtilises ADD CONSTRAINT FK_materiauxUtilises__materiaux0 FOREIGN KEY (idMateriel) REFERENCES materiaux(idMateriel);

#------------------------------------------------------------
# vues
#------------------------------------------------------------

CREATE VIEW  offresFormateurs as
SELECT
    f.idUser,
    f.matriculeFormateur,
    f.typeContrat,
    f.dateDebutContrat,
    f.dateFinContrat, 
    o.idOffre,
    o.numeroOffre,
    o.dateDebutOffre,
    o.dateFinOffre
FROM
    formateurs AS f
INNER JOIN animation AS a ON f.idUser = a.idUser
INNER JOIN offres AS o ON a.idOffre = o.idOffre;



CREATE VIEW  stagiairesFichesInterventions as
SELECT
    s.idUser,
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
    m.libelleMesm,
    bc.numeroBlocComp,
    bc.libelleBlocComp
FROM
    stagiaires AS s
INNER JOIN stagiairesAffectes AS r ON s.idUser = r.idUser
INNER JOIN fichesInterventions AS fi ON r.idFicheIntervention = fi.idFicheIntervention
INNER JOIN lieux AS li ON fi.idLieu = li.idLieu
LEFT JOIN operations AS op ON op.idOperation = fi.idOperation
INNER JOIN mesm AS m ON m.idMesm = op.idMesm
INNER JOIN blocsCompetences AS bc ON m.idBlocComp=bc.idBlocComp;



CREATE VIEW  ficheActivite as
SELECT
    ac.idActivite,
    ac.dateIntervention,
    ac.dateDebutItv,
    ac.dateFinItv,
    ac.dureeItv,
    ac.travauxRealises,
    ac.travauxNonRealises,
    ac.observations,
    ca.idCause,
    ca.numeroCause,
    ca.libelleCause,
    me.idMesm,
    me.numeroMesm,
    me.libelleMesm,
    tm.idTypeMaint,
    tm.numeroTypeMaint,
    tm.libelleTypeMaint,
    a.idAction,
    a.numeroAction,
    a.libelleAction,
    fi.idFicheIntervention,
    fi.dateDemande,
    fi.idOperation,
    mat.idMateriel,
    mat.nomMateriel,
    ne.quantiteMat,
    ou.idOutil,
    ou.nomOutil,
    uti.quantiteOutil

FROM
    activites AS ac
INNER JOIN fichesInterventions AS fi ON fi.idFicheIntervention= ac.idFicheIntervention 
LEFT JOIN causesLiees AS li ON ac.idActivite = li.idActivite
INNER JOIN causes AS ca ON li.idCause = ca.idCause
INNER JOIN mesm AS me ON me.idMesm = ac.idMesm
INNER JOIN typesMaintenances AS tm ON tm.idTypeMaint= ac.idTypeMaint
LEFT JOIN actionsCorrespondantes AS cor ON cor.idActivite= ac.idActivite
INNER JOIN actions AS a ON cor.idAction= a.idAction
LEFT JOIN materiauxUtilises AS ne ON ne.idActivite= ac.idActivite
INNER JOIN materiaux AS mat ON ne.idMateriel= mat.idMateriel
LEFT JOIN outilsUtilises AS uti ON uti.idActivite= ac.idActivite
INNER JOIN outils AS ou ON uti.idOutil= ou.idOutil;
