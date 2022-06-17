<?php
session_start();
include("../../Modele/Etudiant.php");
$submit3 = $_POST["btn3"];
$f = $_POST["course_of_study"];
$e = $_POST["email"];
$c = $_POST["contact"];
$a = $_POST["address"];


if(isset($submit3)){
    $n = $_SESSION['n'];
    $p = $_SESSION['p'];
    $dn = $_SESSION['dn'];
    $ln = $_SESSION['ln'];
    $na = $_SESSION['na'];
    $ph = $_SESSION['ph']; 
    $g = $_SESSION['s'];
    $etu = new Etudiant();
   // $etu->getInfoMatricule();
    $etu->inscritEtudiant($n, $p, $f, $dn, $ln, $na, $ph, $e, $g, $c, $a);
    
    
    
}
?>