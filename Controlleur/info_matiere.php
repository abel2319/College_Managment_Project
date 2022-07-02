<?php
session_start();
include('../Modele/Filiere.php');
$filiere = $_SESSION["fi"];

$nom_matiere = filiere_UE($filiere);
if(count($nom_matiere) > 0){
echo '
        <table class="table_inf">
            <tr class="table_line">
                <th class="table_col" colspan = "3">Matiere</th>
                
            </tr>';
foreach($nom_matiere as $obj)
{
    echo '
    <form method="post" action="note.php">
            <tr class="table_line">
            <td class="table_col" colspan = "2"><input class="entree" type="text" 
            style = "padding: 15px 25px; font-size: 20px; font-weitgh : bold;" readonly="true" name="nom" value="'.$obj.'" /></td>
           
                <td class="table_col"><input name = "img" type="image" src="../Vue/images/mod.jpg" class="img_a" /></td>  
            </tr>
    </form>';
}
echo '
	</table>';
}
?>
