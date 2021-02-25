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
# Table: roles
#------------------------------------------------------------

CREATE TABLE roles(
        idRole      Int  Auto_increment  NOT NULL ,
        libelleRole Varchar (50) NOT NULL
	,CONSTRAINT roles_PK PRIMARY KEY (idRole)
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
# Table: environnements
#------------------------------------------------------------

CREATE TABLE environnements(
        idEnv   Int  Auto_increment  NOT NULL ,
        typeEnv Varchar (50) NOT NULL
	,CONSTRAINT environnements_PK PRIMARY KEY (idEnv)
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

