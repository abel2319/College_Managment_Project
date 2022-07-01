<?php
<<<<<<< HEAD
class Employes
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_statut;

    public function __construct($_id, $_nom, $_prenom, $_statut)
    {
        $this->_id = $_id;
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_statut = $_statut;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getStatut()
    {
        return $this->_statut;
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
        $sql = "SELECT id, nom, prenom, statut FROM Employes";
        $result = mysqli_query($con, $sql);
        $lim = mysqli_num_rows($result);
        $tab = array();
        for($i = 0; $i < $lim;  $i++)
        {
            $row = mysqli_fetch_assoc($result);
	    $obj = new Employes($row['id'], $row['nom'], $row['prenom'], $row['statut']);
            $tab[$i] = $obj;
        }
        mysqli_close($con);
        return $tab;
    }
}
?>
