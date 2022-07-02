<?php
session_start();
$nom = $_POST['nom'];
$url = '../Vue/note.php';

if($nom){
    $_SESSION["nom"] = $nom;
    header('Location: '.$url); 
    include($url);
}


?>