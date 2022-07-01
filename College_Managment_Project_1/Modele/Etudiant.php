<?php
class Etudiant
{
    /* public static $_matri  ;
   private $_nom; 
    private $_prenom; 
    private $_sexe;
    private $_email;*/
    
    public function getInfoMatricule(){

        $con = mysqli_connect("localhost", "root", "", "PROJET_WEB");
        if (!$con) {
         die("Connection failed: " . mysqli_connect_error());
         }

        $sql = "SELECT matricule FROM Etudiant";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $i = 0;
        while($row = mysqli_fetch_assoc($result)) {
           $mat[$i] = $row["matricule"];
           $i++;
        }
        } else {
        echo "0 results";
        }
          return $mat[mysqli_num_rows($result)-1];
    
        mysqli_close($con);
    }


    public function inscritEtudiant($n, $p, $f,  $dn, $ln, $na, $ph, $e, $g, $c, $a){
        $etu = new Etudiant();
        $mat = $etu->getInfoMatricule() + 1;
        
        
        $con = mysqli_connect("localhost", "root", "", "PROJET_WEB");
       if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "INSERT INTO Etudiant VALUES ('$mat', '$n', '$p', '$f', '$dn', '$ln', '$na', '$ph', '$e', '$g', '$c', '$a')";
        
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