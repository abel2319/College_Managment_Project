<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant</title>
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
        <div class="row">
            <div class="col">
                <br>
                 <label for ="id" class ="id_label">Matricule :</label>
                 <input type = "text" name = "id" class ="id_input" size = "10" maxlength = "30" />
                 <br><br>
                 <label for ="id" class ="id_label">Filière : </label>
                 <input type = "text" name = "id" class ="id_input_course_of_study" size = "10" maxlength = "30" />
            </div>
            <div class="col"></div>      
            <div class="col"></div>
        </div>   
    </div>
</body>
</html>
