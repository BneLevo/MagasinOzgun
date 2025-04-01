-- Active: 1738238974711@@127.0.0.1@3306@magasinChausseursOzgun
CREATE DATABASE IF NOT EXISTS magasinChausseursOzgun;
USE magasinChausseursOzgun;

--------------------------------------------- Les Tables -------------------------------------------------

CREATE TABLE Marque(
    idMarque INT(10) AUTO_INCREMENT NOT NULL,
    nom VARCHAR(50) NOT NULL,
    description TEXT,
    logo VARCHAR(50),
    PRIMARY KEY(idMarque)
);

CREATE TABLE Chaussure(
    idChaussure INT(10) AUTO_INCREMENT NOT NULL,
    nom VARCHAR(255) NOT NULL,
    prix DECIMAL(10) NOT NULL,
    couleur VARCHAR(50),
    size DECIMAL(2),
    photo VARCHAR(255),
    description TEXT,
    modèle VARCHAR(100),
    PRIMARY KEY (idChaussure)
);

CREATE TABLE Utilisateur(
    idUtilisateur INT(10) AUTO_INCREMENT NOT NULL,
    pseudo VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY(idUtilisateur)
);

-- CREATE TABLE Couleur(
--     couleur 
-- );

-- CREATE TABLE Couleur(
--     couleur 
-- );


ALTER TABLE chaussure
RENAME TO Chaussure;


--------------------------------------------- END Les Tables ---------------------------------------------



--------------------------------------------- Insert -----------------------------------------------------
INSERT INTO Chaussure
VALUES
(1, "Nike Air Max Dn8", 220, "Red", 45, "https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/3966977d-1d2e-4d9d-844d-e5b3f1bee59b/AIR+MAX+DN8+AMD.png", "descriptionChaussure", "AirMax");