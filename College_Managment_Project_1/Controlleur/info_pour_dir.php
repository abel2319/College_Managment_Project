<?php
include('../Modele/filiere.php');

$table = func1liste();

echo '
        <table class="table_inf">';
foreach($table as $obj)
{
    echo '
            <tr class="table_line">
                <td class="table_col">'.$obj->getNom().'</td>
                <td class="table_col">Etudiants : '.$obj->getNbr().'</td>
                <td class="table_col">Responsable : '.$obj->getResp().'</td>
            </tr>';
}
echo '
	</table>';
?>
