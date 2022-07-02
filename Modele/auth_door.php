<?php

$server = "localhost";
$user = "root";
$pwd = "";
$db = "PROJET_WEB";

/*function crypter($ch)
{
  for($i=0; $i<strlen($ch); $i++){
    if('A' <= $ch[$i] AND $ch[$i] <= 'Z'){
      $ch[$i] = chr(ord('A')+(ord($ch[$i])-ord('A')+3)%26);
    }
    elseif('a' <= $ch[$i] AND $ch[$i] <= 'z'){
      $ch[$i] = chr(ord('a')+(ord($ch[$i])-ord('a')+3)%26);
    }
  }
  return $ch;
}*/

$conn = mysqli_connect($server, $user, $pwd, $db);
if($conn AND isset($_POST['user_name']) AND isset($_POST['user_pwd'])){
  $n = $_POST['user_name'];
  $p = $_POST['user_pwd'];
  $sql = "SELECT statut FROM Employes WHERE email='$n' AND mot_de_passe='$p'";
  $result = mysqli_query($conn, $sql);
  $nrow = mysqli_num_rows($result);
  if($nrow == 1){
    $row = mysqli_fetch_assoc($result);
    if($row['statut'] == 'Directeur')
      $url = '../Vue/dir_home.php';
    elseif($row['statut'] == 'Administrateur')
      $url = '../Vue/admin.php';
    elseif($row['statut'] == 'Chef Scolarite')
      $url = '../Vue/sco_home.php';
    else
      $url = '../Vue/auth.php';
    header('Location: '.$url);
    exit();
  }
  mysqli_close($conn);
}

$url = '../Vue/auth.php';
header('Location: '. $url);


?>
