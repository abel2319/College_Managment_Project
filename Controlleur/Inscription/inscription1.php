<?php 
session_start();
$submit1 = $_POST["btn1"];
$nom = $_POST["firstname"];
$prenom = $_POST["lastname"] ;
$sexe = $_POST["sex"];
$photo = $_POST["picture"] ;
$newURL1 = '../../Vue/inscript_2.php';
if(isset($submit1)){
    if (!preg_match("/^[a-z A-Z ]*$/", $nom) OR
                !preg_match("/^[a-z A-Z ]*$/", $prenom)) {
        echo "Veuillez bien renseigné le champ de nom et prénom. Seul les caractères et les blancs
        sont acceptés dans ces champs";
      }else{
        
        $_SESSION["n"] = $nom;
        $_SESSION["p"] = $prenom;
        $_SESSION["s"] = $sexe;
        $_SESSION["ph"] = $photo;
        header('Location: '.$newURL1);
        //echo $_SESSION["n"];
      }
     
}

?>