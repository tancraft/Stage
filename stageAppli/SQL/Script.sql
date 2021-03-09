#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

DROP DATABASE IF EXISTS ambDatabase;
CREATE DATABASE ambDatabase;
USE ambDatabase;

DROP TABLE IF EXISTS amb_formateurs;
DROP TABLE IF EXISTS amb_offres;
DROP TABLE IF EXISTS amb_stagiaires;
DROP TABLE IF EXISTS amb_roles;
DROP TABLE IF EXISTS amb_utilisateurs;
DROP TABLE IF EXISTS amb_environnements;
DROP TABLE IF EXISTS amb_lieux;
DROP TABLE IF EXISTS amb_causes;
DROP TABLE IF EXISTS amb_typesMaintenances;
DROP TABLE IF EXISTS amb_actions;
DROP TABLE IF EXISTS amb_blocsCompetences;
DROP TABLE IF EXISTS amb_mesm;
DROP TABLE IF EXISTS amb_operations;
DROP TABLE IF EXISTS amb_fichesInterventions;
DROP TABLE IF EXISTS amb_activites;
DROP TABLE IF EXISTS amb_materiaux;
DROP TABLE IF EXISTS amb_outils;
DROP TABLE IF EXISTS amb_animation;
DROP TABLE IF EXISTS amb_stagiairesAffectes;
DROP TABLE IF EXISTS amb_causesLiees;
DROP TABLE IF EXISTS amb_actionsCorrespondantes;
DROP TABLE IF EXISTS amb_outilsUtilises;

#------------------------------------------------------------
# Table: formateurs
#------------------------------------------------------------

CREATE TABLE amb_formateurs(
        idUser             Int  NOT NULL PRIMARY KEY,
        matriculeFormateur Varchar (50) NOT NULL,
        typeContrat        Varchar (50) NOT NULL ,
        dateDebutContrat   Date NOT NULL ,
        dateFinContrat     Date NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: offres
#------------------------------------------------------------

CREATE TABLE amb_offres(
        idOffre        Int Auto_increment  NOT NULL PRIMARY KEY,
        numeroOffre    Varchar (50) NOT NULL ,
        dateDebutOffre Date NOT NULL ,
        dateFinOffre   Date NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: stagiaires
#------------------------------------------------------------

CREATE TABLE amb_stagiaires(
        idUser             Int NOT NULL PRIMARY KEY,
        dateDebutFormation Date NOT NULL ,
        dateFinFormation   Date NOT NULL ,
        numeroBeneficiaire Varchar (50) NOT NULL ,
        idOffre            Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: roles
#------------------------------------------------------------

CREATE TABLE amb_roles(
        idRole      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleRole Varchar (50) NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE amb_utilisateurs(
        idUser     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomUser    Varchar (50) NOT NULL ,
        prenomUser Varchar (50) NOT NULL ,
        telUser    Varchar (50) NOT NULL ,
        emailUser  Varchar (50) NOT NULL ,
        mdpUser    Varchar (50) NOT NULL ,
        idRole     Int NOT NULL,
        UNIQUE KEY email (emailUser)

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: environnements
#------------------------------------------------------------

CREATE TABLE amb_environnements(
        idEnv   Int  Auto_increment  NOT NULL PRIMARY KEY,
        typeEnv Varchar (50) NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: lieux
#------------------------------------------------------------

CREATE TABLE amb_lieux(
        idLieu  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomLieu Varchar (50) NOT NULL ,
        idEnv   Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: causes
#------------------------------------------------------------

CREATE TABLE amb_causes(
        idCause      Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroCause  Varchar (50) NOT NULL ,
        libelleCause Varchar (50) NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: typesMaintenances
#------------------------------------------------------------

CREATE TABLE amb_typesMaintenances(
        idTypeMaint      Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroTypeMaint  Varchar (50) NOT NULL ,
        libelleTypeMaint Varchar (50) NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: actions
#------------------------------------------------------------

CREATE TABLE amb_actions(
        idAction      Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroAction  Varchar (50) NOT NULL ,
        libelleAction Varchar (50) NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: blocsCompetences
#------------------------------------------------------------

CREATE TABLE amb_blocsCompetences(
        idBlocComp      Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroBlocComp  Varchar (50) NOT NULL ,
        libelleBlocComp Varchar (200) NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: mesm
#------------------------------------------------------------

CREATE TABLE amb_mesm(
        idMesm      Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroMesm  Varchar (50) NOT NULL ,
        libelleMesm Varchar (200) NOT NULL ,
        idBlocComp  Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: operations
#------------------------------------------------------------

CREATE TABLE amb_operations(
        idOperation       Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroOperation   Varchar (50) NOT NULL ,
        intituleOperation Varchar (200) NOT NULL ,
        schemaOperation   Varchar (50) NULL ,
        idMesm            Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: degresUrgence
#------------------------------------------------------------

CREATE TABLE amb_degresUrgence(
        idDegreUrgence      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleDegreUrgence Varchar (100) NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: fichesInterventions
#------------------------------------------------------------

CREATE TABLE amb_fichesInterventions(
        idFicheIntervention Int  Auto_increment  NOT NULL PRIMARY KEY,
        dateDemande         Date NOT NULL ,
        demandeur           VARCHAR(100)  NOT NULL DEFAULT 'Formateur Référent',
        telDemandeur           VARCHAR(20)  NOT NULL DEFAULT 'Formateur Référent',
        descriptionDemande  Text NOT NULL ,
        statutDemande       Int NOT NULL ,
        validation          Bool NULL   ,
        appreciation        Text NULL ,
        idUser              Int NOT NULL ,
        idLieu              Int NOT NULL ,
        idOperation         Int NOT NULL,
        idDegreUrgence      Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: activites
#------------------------------------------------------------

CREATE TABLE amb_activites(
        idActivite          Int  Auto_increment  NOT NULL PRIMARY KEY,
        dateIntervention    Date NOT NULL ,
        dateDebutItv        Datetime NOT NULL ,
        dateFinItv          Datetime NOT NULL ,
        dureeItv            TIME NOT NULL ,
        travauxRealises     Text NOT NULL ,
        travauxNonRealises  Text NOT NULL ,
        observations        Text NOT NULL ,
        idMesm              Int NOT NULL ,
        idTypeMaint         Int NOT NULL ,
        idFicheIntervention Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: materiaux
#------------------------------------------------------------

CREATE TABLE amb_materiaux(
        idMateriel  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomMateriel Varchar (100) NOT NULL ,
        nbDispo     Int NOT NULL ,
        idUser      Int NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: outilsCaisse
#------------------------------------------------------------

CREATE TABLE amb_outilsCaisse(
        idOutilCaisse  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomOutilCaisse Varchar (100) NOT NULL ,
        nbOutilCaisse  Int NOT NULL ,
        idUser   Int NULL

)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: outilsMagasin
#------------------------------------------------------------

CREATE TABLE amb_outilsMagasin(
        idOutilMagasin  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomOutilMagasin Varchar (100) NOT NULL ,
        nbOutilMagasin  Int NOT NULL ,
        idUser   Int NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: animation
#------------------------------------------------------------

CREATE TABLE amb_animation(
        idAnimation Int Auto_increment NOT NULL PRIMARY KEY,
        idOffre Int NOT NULL,
        idUser  Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: stagiairesAffectes
#------------------------------------------------------------

CREATE TABLE amb_stagiairesAffectes(
        idStagiairesAffectes           Int Auto_increment NOT NULL PRIMARY KEY,
        idUser              Int NOT NULL ,
        idFicheIntervention Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: causesLiees
#------------------------------------------------------------

CREATE TABLE amb_causesLiees(
        idCausesLiees    Int Auto_increment NOT NULL PRIMARY KEY ,
        idActivite Int NOT NULL ,
        idCause    Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: actionsCorrespondantes
#------------------------------------------------------------

CREATE TABLE amb_actionsCorrespondantes(
        idActionsCorrespondantes  Int Auto_increment NOT NULL PRIMARY KEY ,   
        idAction   Int NOT NULL ,
        idActivite Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;


#------------------------------------------------------------
# Table: outilsCaisseUtilises
#------------------------------------------------------------

CREATE TABLE amb_outilsCaisseUtilises(
        idOutilsCaisseUtilises     Int Auto_increment NOT NULL  PRIMARY KEY,
        idActivite    Int NOT NULL ,
        idOutilCaisse       Int NOT NULL ,
        quantiteOutilsCaisse Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: outilsMagasinUtilises
#------------------------------------------------------------

CREATE TABLE amb_outilsMagasinUtilises(
        idOutilsMagasinUtilises     Int Auto_increment NOT NULL  PRIMARY KEY,
        idActivite    Int NOT NULL ,
        idOutilMagasin       Int NOT NULL ,
        quantiteOutilsMagasin Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# Table: materiauxUtilises
#------------------------------------------------------------

CREATE TABLE amb_materiauxUtilises(
        idMateriauxUtilises Int Auto_increment NOT NULL PRIMARY KEY,
        idActivite  Int NOT NULL ,
        idMateriel  Int NOT NULL ,
        quantiteMat Int NOT NULL

)ENGINE=InnoDB, CHARSET = UTF8;

#------------------------------------------------------------
# cle etrangeres
#------------------------------------------------------------

ALTER TABLE amb_stagiaires ADD CONSTRAINT FK_stagiaires_offres FOREIGN KEY (idOffre) REFERENCES amb_offres(idOffre);

ALTER TABLE amb_utilisateurs ADD CONSTRAINT FK_utilisateurs_roles FOREIGN KEY (idRole) REFERENCES amb_roles(idRole);

ALTER TABLE amb_lieux ADD CONSTRAINT FK_lieux_environnements FOREIGN KEY (idEnv) REFERENCES amb_environnements(idEnv);

ALTER TABLE amb_mesm ADD CONSTRAINT FK_mesm__blocsCompetences FOREIGN KEY (idBlocComp) REFERENCES amb_blocsCompetences(idBlocComp);

ALTER TABLE amb_operations ADD CONSTRAINT FK_operations__mesm FOREIGN KEY (idMesm) REFERENCES amb_mesm(idMesm);

ALTER TABLE amb_fichesInterventions ADD CONSTRAINT FK_fichesInterventions_formateurs FOREIGN KEY (idUser) REFERENCES amb_formateurs(idUser);
ALTER TABLE amb_fichesInterventions ADD CONSTRAINT FK_fichesInterventions_lieux0 FOREIGN KEY (idLieu) REFERENCES amb_lieux(idLieu);
ALTER TABLE amb_fichesInterventions ADD CONSTRAINT FK_fichesInterventions__operations1 FOREIGN KEY (idOperation) REFERENCES amb_operations(idOperation);
ALTER TABLE amb_fichesInterventions ADD CONSTRAINT FK_fichesInterventions__degresUrgence FOREIGN KEY (idDegreUrgence) REFERENCES amb_degresUrgence(idDegreUrgence);

ALTER TABLE amb_activites ADD CONSTRAINT FK_activites__mesm FOREIGN KEY (idMesm) REFERENCES amb_mesm(idMesm);
ALTER TABLE amb_activites ADD CONSTRAINT FK_activites__typesMaintenances0 FOREIGN KEY (idTypeMaint) REFERENCES amb_typesMaintenances(idTypeMaint);
ALTER TABLE amb_activites ADD CONSTRAINT FK_activites_fichesInterventions1 FOREIGN KEY (idFicheIntervention) REFERENCES amb_fichesInterventions(idFicheIntervention);


ALTER TABLE amb_materiaux ADD CONSTRAINT FK_materiaux_formateurs FOREIGN KEY (idUser) REFERENCES amb_formateurs(idUser);


ALTER TABLE amb_outilsCaisse ADD CONSTRAINT FK_OutilsCaisse_formateurs FOREIGN KEY (idUser) REFERENCES amb_formateurs(idUser);

ALTER TABLE amb_outilsMagasin ADD CONSTRAINT FK_outilsMagasin_formateurs FOREIGN KEY (idUser) REFERENCES amb_formateurs(idUser);


ALTER TABLE amb_animation ADD CONSTRAINT FK_animation_offres FOREIGN KEY (idOffre) REFERENCES amb_offres(idOffre);
ALTER TABLE amb_animation ADD CONSTRAINT FK_animation_formateurs0 FOREIGN KEY (idUser) REFERENCES amb_formateurs(idUser);


ALTER TABLE amb_stagiairesAffectes ADD CONSTRAINT FK_stagiairesAffectes_stagiaires FOREIGN KEY (idUser) REFERENCES amb_stagiaires(idUser);
ALTER TABLE amb_stagiairesAffectes ADD CONSTRAINT FK_stagiairesAffectes_fichesInterventions0 FOREIGN KEY (idFicheIntervention) REFERENCES amb_fichesInterventions(idFicheIntervention);

ALTER TABLE amb_causesLiees ADD CONSTRAINT FK_causesLiees__activites FOREIGN KEY (idActivite) REFERENCES amb_activites(idActivite);
ALTER TABLE amb_causesLiees ADD CONSTRAINT FK_causesLiees__causes0 FOREIGN KEY (idCause) REFERENCES amb_causes(idCause);


ALTER TABLE amb_actionsCorrespondantes ADD CONSTRAINT FK_actionsCorrespondantes__actions FOREIGN KEY (idAction) REFERENCES amb_actions(idAction);
ALTER TABLE amb_actionsCorrespondantes ADD CONSTRAINT FK_actionsCorrespondantes__activites0 FOREIGN KEY (idActivite) REFERENCES amb_activites(idActivite);


ALTER TABLE amb_outilsCaisseUtilises ADD CONSTRAINT FK_OutilsCaisseUtilises__activites FOREIGN KEY (idActivite) REFERENCES amb_activites(idActivite);
ALTER TABLE amb_outilsCaisseUtilises ADD CONSTRAINT FK_OutilsCaisseUtilises__OutilsCaisse FOREIGN KEY (idOutilCaisse) REFERENCES amb_OutilsCaisse(idOutilCaisse);

ALTER TABLE amb_outilsMagasinUtilises ADD CONSTRAINT FK_outilsMagasinUtilises__activites FOREIGN KEY (idActivite) REFERENCES amb_activites(idActivite);
ALTER TABLE amb_outilsMagasinUtilises ADD CONSTRAINT FK_outilsMagasinUtilises__outilsMagasin FOREIGN KEY (idOutilMagasin) REFERENCES amb_outilsMagasin(idOutilMagasin);


ALTER TABLE amb_materiauxUtilises ADD CONSTRAINT FK_materiauxUtilises__activites FOREIGN KEY (idActivite) REFERENCES amb_activites(idActivite);
ALTER TABLE amb_materiauxUtilises ADD CONSTRAINT FK_materiauxUtilises__materiaux0 FOREIGN KEY (idMateriel) REFERENCES amb_materiaux(idMateriel);

#------------------------------------------------------------
# vues
#------------------------------------------------------------

CREATE VIEW  amb_offresFormateurs as
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
    amb_formateurs AS f
INNER JOIN amb_animation AS a ON f.idUser = a.idUser
INNER JOIN amb_offres AS o ON a.idOffre = o.idOffre;


CREATE VIEW  amb_stagiairesFichesInterventions as
SELECT
    s.idUser,
    s.dateDebutFormation,
    s.dateFinFormation,
    s.numeroBeneficiaire,
    fi.idFicheIntervention,
    fi.dateDemande,
    fi.demandeur,
    fi.telDemandeur,
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
    amb_stagiaires AS s
INNER JOIN amb_stagiairesAffectes AS r ON s.idUser = r.idUser
INNER JOIN amb_fichesInterventions AS fi ON r.idFicheIntervention = fi.idFicheIntervention
INNER JOIN amb_lieux AS li ON fi.idLieu = li.idLieu
LEFT JOIN  amb_operations AS op ON op.idOperation = fi.idOperation
INNER JOIN amb_mesm AS m ON m.idMesm = op.idMesm
INNER JOIN amb_blocsCompetences AS bc ON m.idBlocComp=bc.idBlocComp;



CREATE VIEW  amb_ficheActivite as
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
    fi.demandeur,
    fi.idOperation,
    mat.idMateriel,
    mat.nomMateriel,
    ne.quantiteMat,
    oucai.idOutilCaisse,
    oucai.nomOutilCaisse,
    uticai.quantiteOutilsCaisse,
    oumag.idOutilMagasin,
    oumag.nomOutilMagasin,
    utimag.quantiteOutilsMagasin

FROM
    amb_activites AS ac
INNER JOIN amb_fichesInterventions AS fi ON fi.idFicheIntervention= ac.idFicheIntervention 
LEFT JOIN  amb_causesLiees AS li ON ac.idActivite = li.idActivite
INNER JOIN amb_causes AS ca ON li.idCause = ca.idCause
INNER JOIN amb_mesm AS me ON me.idMesm = ac.idMesm
INNER JOIN amb_typesMaintenances AS tm ON tm.idTypeMaint= ac.idTypeMaint
LEFT JOIN  amb_actionsCorrespondantes AS cor ON cor.idActivite= ac.idActivite
INNER JOIN amb_actions AS a ON cor.idAction= a.idAction
LEFT JOIN  amb_materiauxUtilises AS ne ON ne.idActivite= ac.idActivite
INNER JOIN amb_materiaux AS mat ON ne.idMateriel= mat.idMateriel
LEFT JOIN  amb_outilsCaisseUtilises AS uticai ON uticai.idActivite= ac.idActivite
INNER JOIN amb_OutilsCaisse AS oucai ON uticai.idOutilCaisse= oucai.idOutilCaisse
LEFT JOIN  amb_outilsMagasinUtilises AS utimag ON utimag.idActivite= ac.idActivite
INNER JOIN amb_outilsMagasin AS oumag ON utimag.idOutilMagasin= oumag.idOutilMagasin;

