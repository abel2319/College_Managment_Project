<?php 
session_start();
$submit2 = $_POST["btn2"];
$dateNaiss = $_POST["datebirth"];
$lieuNaiss = $_POST["placebirth"] ;
$nation = $_POST["nationality"];






$newURL2 = '../../Vue/Inscription/inscript_3.php';
if(isset($submit2)){
    $_SESSION['dn'] = $dateNaiss;
    $_SESSION['ln'] = $lieuNaiss;
    $_SESSION['na'] = $nation;
    header('Location: '.$newURL2); 
}

?>