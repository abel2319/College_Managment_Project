<?php
include_once("Connection.php");
class Filiere
{
    private $_id;
    private $_nom;
    private $_nbr;
    private $_responsable_filiere;

    public function __construct($_id, $_nom, $_nbr, $_responsable_filiere)
    {
        $this->_id = $_id;
        $this->_nom = $_nom;
        $this->_nbr = $_nbr;
        $this->_responsable_filiere = $_responsable_filiere;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getNbr()
    {
        return $this->_nbr;
    }

    public function getResp()
    {
        return $this->_responsable_filiere;
    }

    public function enregistrerFiliere($n, $respoF)
    {
        $filiere = new Filiere();
        $id = $filiere->getId() + 1;
        
        $con = mysqli_connect("localhost", "root", "", "PROJET_WEB");
        
        if (!$con)
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO Filiere VALUES ('$id', '$n', '$respoF')";
        
        if (mysqli_query($con, $sql))
        {
            echo "Filière enregistrée avec succès";
        }
        
        else
        {
            echo "Echec d'enregistrement";
        }
        
        mysqli_close($con);
    }

    public function deleteFiliere($idF)
    {
        $con = mysqli_connect("localhost", "root", "", "PROJET_WEB");
        
        if (!$con)
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "Delete FROM Filiere where id = $idF";

        if(mysqli_query($con, $sql))
        {
            echo "Filière supprimée avec succès";
        }
        
        else
        {
            echo "Erreur lors de la suppression, veillez réessayer";
        }
    
        mysqli_close($con);
    }

    public function modifierResponsableOfFiliere($idF, $respoF)
    {
        $con = mysqli_connect("localhost", "root", "", "PROJET_WEB");
        
        if (!$con)
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "UPDATE  Filiere SET responsable_filiere = '$respoF' WHERE id = 'idF' ";
        
        if(mysqli_query($con, $sql))
        {
            echo "Responsable modifié avec succès";
        }
        
        else
        {
            echo "Erreur lors de la modification";
        }
    
        mysqli_close($con);
    }

    public function modifierNomOfFiliere($idF, $n)
    {
        $con = mysqli_connect("localhost", "root", "", "PROJET_WEB");
        
        if (!$con)
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "UPDATE  Filiere SET nom = '$n' WHERE id = 'idF' ";
        
        if(mysqli_query($con, $sql))
        {
            echo "Nom de la filière modifié avec succès";
        }
        
        else
        {
            echo "Erreur lors de la modification";
        }
    
        mysqli_close($con);
    }

}

function func1liste()
{
    $con = mysqli_connect("localhost", "root", "", "PROJET_WEB");

    if (!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        $sql = "SELECT * FROM Filiere";
        $result = mysqli_query($con, $sql);
        $lim = mysqli_num_rows($result);
        $tab = array();
        for($i = 0; $i < $lim;  $i++)
        {
            $row = mysqli_fetch_assoc($result);
	    $id_F = $row['id'];
            $name_F = $row['nom'];
            $resp_F = $row['responsable_filiere'];
            $sql = 'SELECT * FROM Etudiant WHERE id_Filiere='.$row['id'];
            $resultt = mysqli_query($con, $sql);
	    $nb = mysqli_num_rows($resultt);
	    $obj = new Filiere($id_F, $name_F, $nb, $resp_F);
            $tab[$i] = $obj;
        }
        mysqli_close($con);
        return $tab;
    }
}

function filiere_UE($f){
    $con = new Connect();
    $con = $con->connector();
    $sql = "SELECT * FROM UE where id_Filiere = ". $f;
    $result = mysqli_query($con, $sql);
    $lim = mysqli_num_rows($result);
        $tab = array();
        $k = 0;
        for($i = 0; $i < $lim;  $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $id_ue = $row['id'];

            $sql_1 = "SELECT * FROM Matiere where id_UE = ".$id_ue;
            $result1 = mysqli_query($con, $sql_1);
            $lim1 = mysqli_num_rows($result1);
            for($j = 0; $j < $lim1;  $j++)
            {
                $row1 = mysqli_fetch_assoc($result1);
                $nom = $row1['nom'];
                $tab[$k] = $nom;
                $k++; 
            }

               
        }

        return $tab;
}

?>
