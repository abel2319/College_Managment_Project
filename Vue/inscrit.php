<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/inscrit.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
</head>
<body>
    <?php
        include_once('panel.php')
    ?>

    <div class="center_block" id="center_block"> 
        <div class="content">            
            <div class="centre_haut">
            Menu d'inscription
            </div>
            <div class="centre_bas">
                <button class="Inscription">
                    <a href="inscript_1.php">Inscrire Nouveau étudiant</a>
                     </button>  <br>
                <button class="modifier">
                <a href="modifSupp.php">Modifier un étudiant</a></button> <br>
                <button class="supprimer"><a href="modifSupp.php">Supprimer un étudiant</a></button>
            </div>
        </div>
    </div>
</body>
</html>