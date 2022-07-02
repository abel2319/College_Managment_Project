<?php

    session_start();
    include("../Modele/Etudiant.php");
    $valid = $_POST['impBtn'];
    $matricule = $_POST['mat_etu'];
    $nom = $_POST['nom_etu'];
    $prenom = $_POST['prenom_etu'];
    $date_naiss = $_POST['naiss_etu'];
    $filiere = $_POST['filiere_etu'];
    $URL = "../Vue/bulletinI.php";
    $URL1 = "../Vue/bulletin.php";
   

    if(isset($valid)){
        if($matricule == ""){
            header('Location: '.$URL1);
        }else { 
        $obj = search($matricule, $nom, $prenom);
        $etudiant = search($matricule, $nom, $prenom);
        $_SESSION['m'] = $matricule;
        $_SESSION['nom'] = $etudiant->getNom();
        $_SESSION['prenom'] = $etudiant->getPrenom();
        $_SESSION['dateNaiss'] = $etudiant->getDateNaiss();
        $_SESSION['idF'] = $etudiant->getIdFiliere();
        header('Location: '.$URL);
    }
    }
?>