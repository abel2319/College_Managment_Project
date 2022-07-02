<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/search.css"/>

<link href="../Styles/Modules/Bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>

</head>
<body>
    <?php
        include_once('panel.php')
    ?>

        <div class="center_block" id="center_block">
        <form action="../Controlleur/ModifSupp/searchPane.php" method="post">
            <div class="centre">
            <br>
            <br>
            <br><br>
            <br>
            <br><br>
            <br>
            <br>
            <label for ="id" class ="id_label">Matricule </label>
            <input type = "text" name = "id" class ="id_input" placeholder = "Entrez matricule" size = "30" maxlength = "30" />
            <br>
            <br>
            <br>
            <br>
           <!-- <label for ="firstname" class ="firstname_label">Nom </label>
            <input type = "text" name = "firstname" class ="firstname_input" placeholder = "Entrez nom de l'étudiant" size = "30" maxlength = "30" />
            <br>
            <br>
            <br>
            <br>
            <label for ="lastname" class ="lastname_label">Prénom </label>
            <input type = "text" name = "lastname" class ="lastname_input" placeholder = "Entrez prenom de l'étudiant" size = "30" maxlength = "50"/>
            <br>
            <br>
            <br>
            <br>-->
            <!--<a role="button" class="btn btn-outline-secondary" href= "modifSupp.php">Rechercher</a>-->
             <button class="btn btn-outline-secondary" type = "submit" name="Sbtn">Rechercher</button>
            </div>
            </form>
        </div>
</body>
</html>