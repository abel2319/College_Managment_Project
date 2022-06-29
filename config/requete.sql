-- 1) Ouvrez un terminal
-- 2) Demarrez le serveur xampp en lançant la commande : sudo /opt/lampp/lampp start
-- 3) Ouvrez un navigateur et rdv à l'adresse localhost/phpmyadmin/
-- 4) Au niveau de la barre horizontale de navigation, cliquez sur "Import"
-- 5) Selectionnez le fichier "requetes.sql" en cliquant sur Browse...
-- 6) En bas à droite, cliquez sur Go
-- 7) Enfin, admirez le spectacle !

CREATE DATABASE PROJET_WEB;

USE PROJET_WEB;

CREATE TABLE Matiere
(
	id INT PRIMARY KEY,
	nom VARCHAR(30) NOT NULL,
	credit SMALLINT NOT NULL CHECK(credit > 0)
);

CREATE TABLE UE
(
	id INT,
	nom VARCHAR(30) NOT NULL,
	id_Matiere INT REFERENCES Matiere(id),
	PRIMARY KEY (id, id_Matiere)
);

CREATE TABLE Filiere
(
	id INT,
    nom VARCHAR(30) NOT NULL,
	responsable_filiere VARCHAR(90) NOT NULL,
	id_UE INT REFERENCES UE(id),
	PRIMARY KEY (id, id_UE)
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
	adresse VARCHAR(30) NOT NULL,
	photo VARCHAR(60) NOT NULL,
	id_Filiere INT REFERENCES Filiere(id)
);

CREATE TABLE ChefScolarite
(
	id INT PRIMARY KEY,
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(60) NOT NULL,
	date_naissance DATE NOT NULL,
	lieu_naissance VARCHAR(30) NOT NULL,
	nationalite VARCHAR(30) NOT NULL,
	email VARCHAR(30),
	genre VARCHAR(30) NOT NULL,
	contact VARCHAR(30) NOT NULL,
	adresse VARCHAR(30) NOT NULL,
	mot_de_passe VARCHAR(50) NOT NULL
);

CREATE TABLE Directeur
(
	id INT PRIMARY KEY,
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(60) NOT NULL,
	date_naissance DATE NOT NULL,
	lieu_naissance VARCHAR(30) NOT NULL,
	nationalite VARCHAR(30) NOT NULL,
	email VARCHAR(30),
	genre VARCHAR(30) NOT NULL,
	contact VARCHAR(30) NOT NULL,
	adresse VARCHAR(30) NOT NULL,
	mot_de_passe VARCHAR(50) NOT NULL
);

CREATE TABLE Etudiant_has_note_in_Matiere
(
	note REAL CHECK (note >= 0. AND note <= 20.),
	note_ratrappage REAL CHECK (note_ratrappage >= 0. AND note_ratrappage <= 20.),
	id_Etudiant INT REFERENCES Etudiant(id),
	id_Matiere INT REFERENCES Matiere(id),
	PRIMARY KEY (id_Etudiant, id_Matiere)
);

CREATE TABLE ChefScolarite_manage_Etudiant
(
	id_ChefScolarite INT REFERENCES ChefScolarite(id),
	id_Etudiant INT REFERENCES Etudiant(matricule),
	PRIMARY KEY (id_ChefScolarite, id_Etudiant)
);
