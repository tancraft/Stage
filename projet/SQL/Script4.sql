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

