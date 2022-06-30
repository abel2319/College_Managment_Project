<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/inscrit.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
<link href="../Styles/Modules/Bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>

</head>
<body>
    <?php
        include_once('panel.php')
    ?>

     <div class="center_block" id="center_block">
      <div class = "container inscrit">      
        <div class="row">
          <div class="col-2"></div>
            <div class="col group_inscrit">
                    <div class="menu_inscription">Menu d'Inscription</div>
                    <br><br>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col text-center inscript_student"><a href="inscript_1.php">Inscrire Etudiant</a></div>
                        <div class="col"></div>
                    </div> 
                    
                    <br><br>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col text-center edit_student"><a href="search.php">Modifier inscription Etudiant</a></div>
                        <div class="col"></div>
                    </div> 

                    <br><br>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col text-center delete_student"><a href="search.php">Supprimer inscription Etudiant</a></div>
                        <div class="col"></div>
                    </div> 
            </div>
          <div class="col-2"></div>
          </div>
        </div>
    </div>
</body>
</html>