
-- ne pas utiliser il s agit de donnes de test pour mes listes

INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,2,"Réglage");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,3,"Nettoyage");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,1,"Remplacement");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,5,"Réparation");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,7,"Contrôle");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,6,"Amélioration");
INSERT INTO `actions`(`idAction`, `numeroAction`, `libelleAction`) VALUES (NULL,4,"Dépannage");

SELECT `numeroAction`,`libelleAction` FROM `actions` ORDER BY `numeroAction`,`libelleAction`;

INSERT INTO `blocscompetences`(`idBlocComp`, `numeroBlocComp`, `libelleBlocComp`) VALUES (NULL,3,"Assurer la maintenance courante de l’installation et des équipements thermiques et sanitaires d’un bâtiment");
INSERT INTO `blocscompetences`(`idBlocComp`, `numeroBlocComp`, `libelleBlocComp`) VALUES (NULL,1,"Assurer la maintenance courante des aménagements intérieurs d’un bâtiment");
INSERT INTO `blocscompetences`(`idBlocComp`, `numeroBlocComp`, `libelleBlocComp`) VALUES (NULL,2,"Assurer la maintenance courante de l’installation et des équipements électriques d’un bâtiment");

SELECT `numeroBlocComp`, `libelleBlocComp` FROM `blocscompetences` ORDER BY `numeroBlocComp`,`libelleBlocComp`;

1	Usure
2	Détérioration
3	Manque d'entretien
4	Contrôle de routine

INSERT INTO `causes`(`idCause`, `numeroCause`, `libelleCause`) VALUES ([value-1],[value-2],[value-3])
INSERT INTO `causes`(`idCause`, `numeroCause`, `libelleCause`) VALUES ([value-1],[value-2],[value-3])
INSERT INTO `causes`(`idCause`, `numeroCause`, `libelleCause`) VALUES ([value-1],[value-2],[value-3])
INSERT INTO `causes`(`idCause`, `numeroCause`, `libelleCause`) VALUES ([value-1],[value-2],[value-3])
