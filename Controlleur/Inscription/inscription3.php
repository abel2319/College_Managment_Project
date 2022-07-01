<?php
session_start();

$submit3 = $_POST["btn3"];
$filiere = $_POST["course_of_study"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$adresse = $_POST["address"];


if(isset($submit3)){
    $nom = $_SESSION['n'];
    $prenom = $_SESSION['p'];
    $dateNaiss = $_SESSION['dn'];
    $lieuNaiss = $_SESSION['ln'];
    $nationalite = $_SESSION['na'];
    $photo = $_SESSION['ph']; 
    $sexe = $_SESSION['s'];
    
    include("../../Modele/Etudiant.php");
    $etu = new Etudiant($nom, $prenom, $dateNaiss, $lieuNaiss, $nationalite, $email,
        $sexe, $contact, $adresse, $photo, $filiere);   
    $etu->inscritEtudiant();
    
    
    
}
?>