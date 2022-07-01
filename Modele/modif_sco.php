<?php

$server = "localhost";
$user = "root";
$pwd = "";
$db = "PROJET_WEB";

$conn = mysqli_connect($server, $user, $pwd, $db);
if($conn AND isset($_POST['nom']) AND isset($_POST['resp']) AND isset($_POST['id'])){
  $n = $_POST['nom'];
  $p = $_POST['resp'];
  $id = $_POST['id'];

  $sql = "UPDATE Filiere SET nom='$n', responsable_filiere='$p' WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  mysqli_close($conn);
}

$url = '../Vue/sco_filieres.php';
header('Location: '. $url);


?>
