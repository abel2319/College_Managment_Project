<?php 
session_start();
$_SESSION["btn1"] = $_POST["btn1"];
$_SESSION["btn2"]= $_POST["btn2"];
$_SESSION["firstname"]= $_POST["firstname"];
$_SESSION["btn3"] = $_POST["btn3"];
$newURL1 = '../Vue/Inscription/inscript_2.php';
$newURL2 = '../Vue/Inscription/inscript_3.php';
if(isset($_SESSION["btn1"])){
    //header('Location: '.$newURL1); 
    echo $_SESSION["firstname"];
}
if(isset($_SESSION["btn2"])){
    header('Location: '.$newURL2); 
}
 if(isset($_SESSION["btn3"])){
    echo "Tu es trop bon";
}
?>