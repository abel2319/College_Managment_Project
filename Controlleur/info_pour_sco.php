<?php
include('../Modele/filiere.php');

$table = func1liste();

echo '
        <table class="table_inf">';
foreach($table as $obj)
{
    echo '
            <tr class="table_line">
                <td class="table_col"><span contenteditable="true">'.$obj->getNom().'</span>'.'</td>
                <td class="table_col">Etudiants : <span contenteditable="true">'.$obj->getNbr().'</span></td>
                <td class="table_col">Responsable : <span contenteditable="true">'.$obj->getResp().'</span></td>
            </tr>';
}
echo '
	</table>';
?>
