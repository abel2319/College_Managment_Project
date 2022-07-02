<?php
session_start();
 $filiere = $_POST["course_of_study"];
 $submit = $_POST["btn"];
 $URL = '../../Vue/matiere_filiere.php';

 if(isset($submit)){
    $_SESSION["fi"] = $filiere;
    header('Location: '.$URL); 
}

?>