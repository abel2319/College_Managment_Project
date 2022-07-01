<?php
include('../Modele/Employes.php');

$table = func1liste();

if(count($table) > 0){
echo '
	<table class="table_inf">
            <tr class="table_line">
                <th class="table_col">Matricule</td>
                <th class="table_col">Nom</td>
                <th class="table_col">Prenom</td>
                <th class="table_col">Statut</td>
                <th class="table_col"><a href="#"><img src="../Vue/images/mod.jpg" alt="" class="img_a"></a></td>
            </tr>';
foreach($table as $obj)
{
    echo '
            <tr class="table_line">
                <td class="table_col">'.$obj->getId().'</td>
                <td class="table_col">'.$obj->getNom().'</td>
                <td class="table_col">'.$obj->getPrenom().'</td>
                <td class="table_col">'.$obj->getStatut().'</td>
                <td class="table_col"><a href="#"><img src="../Vue/images/mod.jpg" alt="" class="img_a"></a></td>
            </tr>';
}
echo '
	</table>';
}
?>
