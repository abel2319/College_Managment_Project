<?php
include_once('../Modele/Etudiant.php');

$table = select_firstname_lastname();


echo ' 
        <table class="table_inf">
            <tr class="table_line"> 
                <th class="table_col">Nom</th>
                <th class="table_col">Prenom</th>
                <th class="table_col">Matiere</th>
                <th class="table_col">Note Session Normale</th>
                <th class="table_col">Note Session Rattrappage </td>
	       </tr>';

$i = 0;

for ($i = 0; $i < count($table) ; $i++ )
{
    echo '
    <tr class="table_line_1">
		<form method="post" action="../Modele/Note.php">
                    <td class="table_col"><span>' .$table[$i][1].' </span></td>
                    <td class="table_col"><span>' .$table[$i][2].'</span></td>
                    <td class="table_col"><span>' .$table[$i][3].'</span></td>
                    <td class="table_col"><input class="entree" type="text" name="note_1" value="'.$table[$i][4].'" /></td>
                    <td class="table_col"><input class="entree" type="text" name="note_2" value="'.$table[$i][5].'" /></td>
                    <td class="table_col"><input type="image" src="../Vue/images/mod.jpg" class="img_a" /></td>
                
        </form>
	</tr>';
}
echo '
	</table>';

?>
