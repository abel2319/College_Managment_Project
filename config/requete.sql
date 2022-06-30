-- 1) Ouvrez un terminal
-- 2) Demarrez le serveur xampp en lançant la commande : sudo /opt/lampp/lampp start
-- 3) Ouvrez un navigateur et rdv à l'adresse localhost/phpmyadmin/
-- 4) Au niveau de la barre horizontale de navigation, cliquez sur "Import"
-- 5) Selectionnez le fichier "requetes.sql" en cliquant sur Browse...
-- 6) En bas à droite, cliquez sur Go
-- 7) Enfin, admirez le spectacle !


-- DB CREATION
CREATE DATABASE PROJET_WEB;

USE PROJET_WEB;

-- EMPLOYEES INFORMARIONS

CREATE TABLE ChefScolarite
(
	id INT ,
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(60) NOT NULL,
	date_naissance DATE NOT NULL,
	lieu_naissance VARCHAR(30) NOT NULL,
	nationalite VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	genre VARCHAR(30) NOT NULL,
	contact VARCHAR(30) NOT NULL,
	adresse VARCHAR(30) NOT NULL,
	mot_de_passe VARCHAR(50) NOT NULL,
	id_Etudiant INT REFERENCES Etudiant(matricule),
	PRIMARY KEY (id, id_Etudiant)
);

CREATE TABLE Directeur
(
	id INT NOT NULL,
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(60) NOT NULL,
	date_naissance DATE NOT NULL,
	lieu_naissance VARCHAR(30) NOT NULL,
	nationalite VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	genre VARCHAR(30) NOT NULL,
	contact VARCHAR(30) NOT NULL,
	adresse VARCHAR(30) NOT NULL,
	mot_de_passe VARCHAR(50) NOT NULL,
	id_Etudiant INT REFERENCES Etudiant(matricule),
	PRIMARY KEY (id, id_Etudiant)
);

-- COURSES

CREATE TABLE Matiere
(
	id INT PRIMARY KEY,
	nom VARCHAR(30) NOT NULL,
	credit SMALLINT NOT NULL CHECK(credit > 0),
	id_UE INT REFERENCES UE(id)
	
);

CREATE TABLE UE
(
	id INT PRIMARY KEY,
	nom VARCHAR(30) NOT NULL,
	id_Filiere INT REFERENCES Filiere(id)
);

-- CLASSES

CREATE TABLE Filiere
(
	id INT PRIMARY KEY,
   	nom VARCHAR(30) NOT NULL,
	responsable_filiere VARCHAR(90) NOT NULL,

);

-- STUDENTS

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
	adresse VARCHAR(30) NOT NULL,
	photo VARCHAR(60) NOT NULL,
	id_Filiere REFERENCES Filiere (id)

);

-- RELATION BETWEEN TABLES

CREATE TABLE EtudiantHasNoteInMatiere
(
	note REAL CHECK (note >= 0. AND note <= 20.),
	note_ratrappage REAL CHECK (note_ratrappage >= 0. AND note_ratrappage <= 20.),
	id_Etudiant INT REFERENCES Etudiant(matricule),
	id_Matiere INT REFERENCES Matiere(id),
	PRIMARY KEY (id_Etudiant, id_Matiere)
);
