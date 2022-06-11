-- 1) Ouvrez un terminal
-- 2) Demarrez le serveur xampp en lançant la commande : sudo /opt/lampp/lampp start
-- 3) Ouvrez un navigateur et rdv à l'adresse localhost/phpmyadmin/
-- 4) Au niveau de la barre horizontale de navigation, cliquez sur "Import"
-- 5) Selectionnez le fichier "requetes.sql" en cliquant sur Browse...
-- 6) En bas à droite, cliquez sur Go
-- 7) Enfin, admirez le spectacle !

CREATE DATABASE PROJET_WEB;

USE PROJET_WEB;

CREATE TABLE Filiere
(
	id INT PRIMARY KEY,
  nom VARCHAR(30) NOT NULL,
	responsable_filiere VARCHAR(90) NOT NULL
);

CREATE TABLE UE
(
	id INT PRIMARY KEY,
	nom VARCHAR(30) NOT NULL
);

CREATE TABLE Matiere
(
	id INT PRIMARY KEY,
	nom VARCHAR(30) NOT NULL,
	credit SMALLINT NOT NULL CHECK(credit > 0)
);

CREATE TABLE Etudiant
(
	matricule INT PRIMARY KEY,
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(60) NOT NULL,
	date_naissance DATE NOT NULL,
	lieu_naissance VARCHAR(30) NOT NULL,
	nationalite VARCHAR(30) NOT NULL,
	email VARCHAR(30),
	genre VARCHAR(30) NOT NULL,
	contact VARCHAR(30) NOT NULL,
	adresse VARCHAR(30) NOT NULL
);
	
CREATE TABLE UE_has_many_Matiere
(
	id_UE INT REFERENCES UE(id),
	id_Matiere INT REFERENCES Matiere(id),
	PRIMARY KEY (id_UE, id_Matiere)
);

CREATE TABLE Filiere_has_many_UE
(
	id_Filiere INT REFERENCES Filiere(id),
	id_UE INT REFERENCES UE(id),
	PRIMARY KEY (id_Filiere, id_UE)
);

CREATE TABLE Filiere_has_many_Etudiant
(
	id_Filiere INT REFERENCES Filiere(id),
	id_Etudiant INT REFERENCES Etudiant(id),
	PRIMARY KEY (id_Filiere, id_Etudiant)
);

CREATE TABLE Etudiant_has_note_in_Matiere
(
	note REAL CHECK (note >= 0. AND note <= 20.),
	note_ratrappage REAL CHECK (note_ratrappage >= 0. AND note_ratrappage <= 20.),
	id_Etudiant INT REFERENCES Etudiant(id),
	id_Matiere INT REFERENCES Matiere(id),
	PRIMARY KEY (id_Etudiant, id_Matiere)
);
