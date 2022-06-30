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

CREATE TABLE Employes
(
	id INT PRIMARY KEY,
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(60) NOT NULL,
	date_naissance DATE NOT NULL,
	lieu_naissance VARCHAR(30) NOT NULL,
	nationalite VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	genre VARCHAR(30) NOT NULL,
	contact VARCHAR(30) NOT NULL,
	adresse VARCHAR(30) NOT NULL,
        statut VARCHAR(30) NOT NULL,
	mot_de_passe VARCHAR(50) NOT NULL,
	id_Etudiant INT REFERENCES Etudiant(matricule)
	
);
-- COURSES

CREATE TABLE Matiere
(
	id INT PRIMARY KEY,
	nom VARCHAR(60) NOT NULL,
	credit SMALLINT NOT NULL CHECK (credit > 0),
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
	responsable_filiere VARCHAR(90) NOT NULL
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
	email VARCHAR(70) NOT NULL,
	genre VARCHAR(30) NOT NULL,
	contact VARCHAR(30) NOT NULL,
	adresse VARCHAR(30) NOT NULL,
	photo VARCHAR(60) NOT NULL,
	id_Filiere INT REFERENCES Filiere(id)

);

-- RELATION BETWEEN TABLES

CREATE TABLE EtudiantHasNoteInMatiere
(
	note REAL CHECK (note >= 0. AND note <= 20.),
	note_ratrappage REAL CHECK (note_ratrappage >= 0. AND note_ratrappage <= 20.),
	statut VARCHAR(15),
	id_Etudiant INT REFERENCES Etudiant(matricule),
	id_Matiere INT REFERENCES Matiere(id),
	PRIMARY KEY (id_Etudiant, id_Matiere)
);

-- INSERTION DES INFORMATIONS

-- FAIRE LES INSERTIONS DANS L'ORDRE QU'ILS APPARAISSENT DANS CE FICHIER


   -- INSERTION DANS FILIERE
   
   INSERT INTO Filiere (id, nom, responsable_filiere) VALUES ('1', 'L3 TIC', 'Daniel Collier');

   INSERT INTO Filiere (id, nom, responsable_filiere) VALUES ('2', 'L3 MATHEMATIQUES', 'Sabine EGLOBA');
   


   -- INSERTION DANS UE
   
   INSERT INTO UE (id,id_Filiere, nom) VALUES ('1', '2', 'Maths 1');
   
   INSERT INTO UE (id,id_Filiere, nom) VALUES ('2', '2', 'Maths 2');

   INSERT INTO UE (id,id_Filiere, nom) VALUES ('3', '1', 'Unite de Specialite');

   INSERT INTO UE (id,id_Filiere, nom) VALUES ('4', '1', 'Unite Fondamentale');

   -- INSERTION DANS MATIERE
   
   INSERT INTO Matiere (id, credit, id_UE, nom) VALUES ('1', '15','1', 'Géometrie des courbes et Surfaces');

   INSERT INTO Matiere (id, credit, id_UE, nom) VALUES ('2', '15', '1', 'Equation aux derivés ordinaires');

   INSERT INTO Matiere (id, credit, id_UE, nom) VALUES ('3', '15','2', 'Equation aux derives partielles');

   INSERT INTO Matiere (id, credit, id_UE, nom) VALUES ('4', '15','2', 'Vecteurs aleatoires');

   INSERT INTO Matiere (id, credit, id_UE, nom) VALUES ('5', '15','3', 'Conception Web');

   INSERT INTO Matiere (id, credit, id_UE, nom) VALUES ('6', '15', '3', 'Réseaux');

   INSERT INTO Matiere (id, credit, id_UE, nom) VALUES ('7', '15','4', 'Programmation Système');

   INSERT INTO Matiere (id, credit, id_UE, nom) VALUES ('8', '15','4', 'Base de données');

   -- INSERTION DANS Employes

      INSERT INTO Employes (id, nom, prenom, date_naissance, lieu_naissance, nationalite, email, genre, contact, adresse, statut,mot_de_passe) VALUES ('1', 'Kim', 'Molina', '1980-01-03', 'Avrankou', 'Benin', 'kim.molina@gmail.com', 'F', '60602400', 'Calavi', 'Secrétaire','prw_gh_sdvvh');

      INSERT INTO Employes (id, nom, prenom, date_naissance, lieu_naissance, nationalite, email, genre, contact, adresse, statut,mot_de_passe) VALUES ('2', 'Constant', 'HOUEDJO', '1970-06-05', 'Abomey', 'Benin', 'constant.houedjo@gmail.com', 'M', '93000401', 'Cotonou','Directeur','prw_gh_sdvvh');


      INSERT INTO Employes (id, nom, prenom, date_naissance, lieu_naissance, nationalite, email, genre, contact, adresse, statut,mot_de_passe) VALUES ('3', 'Steven', 'Wiley', '1969-03-01', 'Houêto', 'Benin', 'steven.wiley@gmail.com', 'M', '23000901', 'Parakou','Administrateur','prw_gh_sdvvh');

    -- INSERTION DANS Etudiant
    INSERT INTO Etudiant (matricule, nom, prenom, date_naissance, lieu_naissance, nationalite, email, genre, contact, adresse, photo, id_Filiere ) VALUES ('1', 'Day', 'Christine', '2000-06-05', 'Cotonou', 'Benin', 'day.christine@gmail.com', 'F', '98327890', 'Dangbo', "Lien vers la photo", DEFAULT);

    INSERT INTO Etudiant (matricule, nom, prenom, date_naissance, lieu_naissance, nationalite, email, genre, contact, adresse, photo, id_Filiere ) VALUES ('2', 'Christine', 'Ewing', '2000-07-04', 'Calavi', 'Benin', 'christine.ewing@gmail.com', 'F', '91337870', 'Dangbo', "Lien vers la photo", DEFAULT);

    INSERT INTO Etudiant (matricule, nom, prenom, date_naissance, lieu_naissance, nationalite, email, genre, contact, adresse, photo, id_Filiere ) VALUES ('3', 'Hector', 'Watts', '2000-03-05', 'Libreville', 'Gabon', 'hector.watt@gmail.com', 'M', '92189000', 'Dangbo', "Lien vers la photo", DEFAULT);


    INSERT INTO Etudiant (matricule, nom, prenom, date_naissance, lieu_naissance, nationalite, email, genre, contact, adresse, photo, id_Filiere ) VALUES ('4', 'Brooke', 'Henry', '2002-07-08', 'Cotonou', 'Benin', 'day.christine@gmail.com', 'M', '97837890', 'Dangbo', "Lien vers la photo", DEFAULT);

    INSERT INTO Etudiant (matricule, nom, prenom, date_naissance, lieu_naissance, nationalite, email, genre, contact, adresse, photo, id_Filiere ) VALUES ('5', 'ADAGBOTO', 'Flych', '2004-09-05', 'Abidjan', "Cote d'Ivoire", 'day.christine@gmail.com', '', '97347890', 'Calavi', "Lien vers la photo", DEFAULT);
       
