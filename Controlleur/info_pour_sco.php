<?php
include('../Modele/Filiere.php');

$table = func1liste();

if(count($table) > 0){
echo ' 
        <table class="table_inf">
            <tr class="table_line">
                <th class="table_col">Nom</td>
                <th class="table_col">Nombre d\'etudiants</td>
                <th class="table_col">Responsable</td>
	    </tr>';

foreach($table as $obj)
{
    echo '
            <tr class="table_line">
		<form method="post" action="../Modele/modif_sco.php">
                    <td class="table_col"><input class="entree" type="text" name="nom" value="'.$obj->getNom().'" /></td>
                    <td class="table_col">'.$obj->getNbr().'</td>
		    <td class="table_col"><input class="entree" type="text" name="resp" value="'.$obj->getResp().'" /></td>
                    <td class="table_col"><input class="entree1" type="text" name="id" value="'.$obj->getId().'" /><input type="image" src="../Vue/images/mod.jpg" class="img_a" /></td>
                </form>
	    </tr>';
}
echo '
	</table>';
}
?>
