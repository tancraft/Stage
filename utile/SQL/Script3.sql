#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: activites
#------------------------------------------------------------

CREATE TABLE activites(
        idAcivite Int  Auto_increment  NOT NULL
	,CONSTRAINT activites_PK PRIMARY KEY (idAcivite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: formateurs
#------------------------------------------------------------

CREATE TABLE formateurs(
        idUser Int  Auto_increment  NOT NULL
	,CONSTRAINT formateurs_PK PRIMARY KEY (idUser)
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

