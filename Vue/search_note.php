<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/search_note.css"/>

<link href="../Styles/Modules/Bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>

</head>
<body>
    <?php
      include_once('panel.php')
    ?>

        <div class="center_block" id="center_block">
           <div class="centre">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <form  action ="../Controlleur/Note/note1.php" method="post">
                    <label for="course_of_study" class="course_of_study_label">
                              <em>Filière :</em>
                            </label><br><br>
                            <?php 
                                include_once('../Controlleur/list_filiere.php');
                            ?>
                            <br>
                            <button type="submit" name = "btn" class="btn btn-outline-secondary">Rechercher</button>
                        <!--<a role="button"  href= "../Vue/note.php">Rechercher</a>-->
                    </form>
                </div>
                <div class="col"></div>          
            </div>
        </div>
</body>
</html>