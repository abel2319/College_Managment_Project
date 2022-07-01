<?php
session_start();
include("../../Modele/Etudiant.php");
$submit = $_POST['Sbtn'];
$matricule = $_POST['id'];
$nom = $_POST['firstname'];
$prenom = $_POST['lastname'] ;
$newURL = '../../Vue/modifSupp.php';

 
if(isset($submit)){
    $etudiant = search($matricule, $nom, $prenom);
    $_SESSION['m'] = $matricule;
    $_SESSION['nom'] = $etudiant->getNom();
    $_SESSION['prenom'] = $etudiant->getPrenom();
    $_SESSION['dateNaiss'] = $etudiant->getDateNaiss();
    $_SESSION['lieuNaiss'] = $etudiant->getLieuNaiss();
    $_SESSION['nation'] = $etudiant->getNationalite();
    $_SESSION['email'] = $etudiant->getEmail();
    $_SESSION['genre'] = $etudiant->getGenre();
    $_SESSION['contact'] = $etudiant->getContact();
    $_SESSION['adresse'] = $etudiant->getAdresse();
    $_SESSION['photo'] = $etudiant->getPhoto();
    $_SESSION['idF'] = $etudiant->getIdFiliere();
    
   
    header('Location: '.$newURL); 
}

?>