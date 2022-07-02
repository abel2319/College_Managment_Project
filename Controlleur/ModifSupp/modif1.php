<?php
session_start();
include("../../Modele/Etudiant.php");
    $nom = $_POST["firstname"];
    $prenom = $_POST["lastname"] ;
    $sexe = $_POST["sex"];
    $photo = $_POST["picture"] ;
    $dateNaiss = $_POST["datebirth"];
    $lieuNaiss = $_POST["placebirth"] ;
    $nation = $_POST["nationality"];
    $filiere = $_POST["course_of_study"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $adresse = $_POST["address"];
   
    
    $etu = new Etudiant($nom, $prenom, $dateNaiss, $lieuNaiss, $nation, $email,
        $sexe, $contact, $adresse, $photo, $filiere); 
    $etu->setMatricule($_SESSION['m']);
    
if(isset($_POST["btn1"])){
    $etu->modifierEtudiant(); 
    echo "
    <a href= '../../Vue/search.php'>Cliquez ici pour retourner</a>
 ";
}elseif(isset($_POST["btn2"])){
    $etu->deleteEtudiant();
    echo "
   <a href= '../../Vue/search.php'>Cliquez ici pour retourner</a>
";
}
?>