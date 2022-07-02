<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant</title>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
 <link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/note_2.css"/>
<link href="../Styles/Modules/Bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>
</head>
<body>
    <?php
        include_once('panel.php')
    ?>
    <div class="center_block" id="center_block">
        <h1 class="aah">Informations sur les filières</h1>
        <div class="first_row">
            <table>
                <tr class="table_line"> 
                    <th class="table_col">Nom</th>
                    <th class="table_col">Prenom</th>
                    <th class="table_col">Matiere</th>
                    <th class="table_col">Session Normale</th>
                    <th class="table_col">Session Rattrappage </td>
	            </tr>;
            </table>
        </div>
    <div class="all_page">
    <?php
        include_once('../Controlleur/Note/note.php');
    ?>  
    </div>
    </div>
</body>
</html>
