<?php
function mettreNote($con, $id_etudiant,$id_matiere) {
    $matricule = $_SESSION['m'];
    $query = "SELECT note FROM EtudiantHasNoteInMatiere WHERE id_Etudiant = $matricule AND id_Matiere = $id_matiere";
    $result = mysqli_query($con,$query);
    $note = mysqli_fetch_row($result); //obtention de la note pour la matiere
    if(!$note[0]) {
            echo "<p style=\"color:orange;\">Fonction verif_rattrapage: Avertissement: L'etudiant $id_etudiant n'a pas de note pour la matiere $id_matiere.</p>";
            return array("Batard", 0);
    }
    else {
            if($note[0] < 12) {
                $query1 = "SELECT note_ratrappage FROM EtudiantHasNoteInMatiere WHERE id_Etudiant = $matricule AND id_Matiere = $id_matiere";
                $result1 = mysqli_query($con,$query1);
                $note_rattrap = mysqli_fetch_row($result1);
                return array("Rattrapage",$note_rattrap[0]);
            }
            else
                return array("Session normale",$note[0]);
    }
}

function trouveECparUE() {
    include("../Modele/Connection.php");
    $conn = new Connect();
    $conn = $conn->connector();

    $matricule = $_SESSION['m'];
    $query = "SELECT id FROM UE";
    $result = mysqli_query($conn, $query);
    $nb_ue = mysqli_num_rows($result);
    while($ligne = mysqli_fetch_row($result)){
        $query1 = "SELECT id FROM Matiere WHERE id_UE = $ligne[0]";
        $result1 = mysqli_query($conn, $query1);
        $nb_ec = mysqli_num_rows($result1);
        $query2 = "SELECT nom FROM UE WHERE id = $ligne[0]";
        $result2 = mysqli_query($conn, $query2);
        while($ligne1 = mysqli_fetch_row($result2)) {
            $nom_ue = $ligne1[0];
        }
        echo "<tr class=\"body_tabl\">
        <td  rowspan=\"$nb_ec\">$nom_ue</td>";
        $i = 0;
        while($ligne2 = mysqli_fetch_row($result1)) {
            $i++;
            $query3 = "SELECT nom FROM Matiere WHERE id = $ligne2[0]";
            $result3 = mysqli_query($conn, $query3);
            while($ligne3 = mysqli_fetch_row($result3)) {
                $nom_ec = $ligne3[0];
            }
            echo "<td>$nom_ec</td>";
            $note = mettreNote($conn, $matricule, $ligne2[0])[1];
            echo "<td>$note</td>";
            $query4 = "SELECT credit FROM Matiere WHERE id = $ligne2[0]";
            $result4 = mysqli_query($conn, $query4);
            while($ligne4 = mysqli_fetch_row($result4)) {
                $credit_ec = $ligne4[0];
            }
            echo "<td>$credit_ec</td>";
            $sessionn = mettreNote($conn, $matricule, $ligne2[0])[0];
            echo "<td>$sessionn</td>";
            if($i == 1) {
                echo "<td rowspan=\"$nb_ec\">Validé</td>";
                echo "<td rowspan=\"$nb_ec\">Moyenne 1</td> </tr>";
            }
            if($i == $nb_ec) {
                $i = 0;
            }
        }
    }
    echo "<tr>
    <td colspan=\"4\">Total des crédits validés: Valeur</td>
    <td colspan=\"3\">Moyenne générale: Valeur</td>
</tr>";
}

trouveECparUE();
?>
