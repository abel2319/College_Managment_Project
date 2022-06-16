<?php
class Etudiant
{
   /* private $_matri ;
    private $_nom; 
    private $_prenom; 
    private $_sexe;
    private $_email;*/
    


    public function inscritEtudiant($n, $p, $f,  $dn, $ln, $na, $ph, $e, $g, $c, $a){
        $con = mysqli_connect("localhost", "root", "", "PROJET_WEB");
       if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "INSERT INTO Etudiant VALUES (165 , '$n', '$p', '$f', '$dn', '$ln', '$na', '$ph', '$e', '$g', '$c', '$a')";
        
        if (mysqli_query($con, $sql)) {
            echo "Complaint Registered";
          } else
          {
              echo "Erreur d'enregistrement";
          }
        
       
          mysqli_close($con);
        
      
    }
 


}

?>