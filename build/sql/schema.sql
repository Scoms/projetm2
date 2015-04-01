
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- livre
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS livre;

CREATE TABLE livre
(
    id INTEGER NOT NULL AUTO_INCREMENT COMMENT 'Id du Livre',
    titre VARCHAR(255) NOT NULL COMMENT 'Titre du livre',
    isbn VARCHAR(24) NOT NULL COMMENT 'ISBN',
    prix FLOAT COMMENT 'Prix du livre',
    description VARCHAR(2048) COMMENT 'Description du livre',
    photo VARCHAR(2048) COMMENT 'Photo du livre',
    PRIMARY KEY (id)
) ENGINE=InnoDB COMMENT='Livre Table';

-- ---------------------------------------------------------------------
-- client
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS client;

CREATE TABLE client
(
    id INTEGER NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL COMMENT 'nom',
    prenom VARCHAR(255) NOT NULL COMMENT 'Prenom',
    adresse VARCHAR(1024) COMMENT 'Adresse',
    tel DECIMAL(10) COMMENT 'tel',
    codePostal VARCHAR(5) COMMENT 'codePostal',
    sexe VARCHAR(1) COMMENT 'Sexe',
    login VARCHAR(25) NOT NULL COMMENT 'login',
    email VARCHAR(1024) COMMENT 'email',
    pass VARCHAR(25) NOT NULL COMMENT 'Password',
    PRIMARY KEY (id)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
