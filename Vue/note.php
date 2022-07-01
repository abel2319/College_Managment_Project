<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant</title>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
 <link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/sco_filieres_1.css"/>
<link href="../Styles/Modules/Bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>
</head>
<body>
    <?php
        include_once('panel.php')
    ?>
    <div class="center_block" id="center_block">
     <h1 class="aah">Informations sur les filières</h1>
     <div class="all_page">
    <?php
        include_once('../Controlleur/Note/note.php');
    ?>  
    </div>
    </div>
</body>
</html>
