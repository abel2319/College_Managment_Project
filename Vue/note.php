<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/note.css"/>
<link href="../Styles/Modules/Bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>
</head>
<body>
    <?php
        include_once('panel.php')
    ?>
    <div class="center_block" id="center_block">
        <div class="container"> 
          <div class="row">
            <div class="col">
                <br>
                 <label for ="id" class ="id_label"><b>Matricule :</b></label>
                 <input type = "text" name = "id" class ="id_input" size = "10" maxlength = "30" />
                 <br><br>
                 <label for ="course_of_study" class ="course_of_study_label">Filière : </label>
                 <input type = "text" name = "course_of_study" class ="course_of_study_input" size = "20" maxlength = "30" />
            </div>
            <div class="col"></div>      
            <div class="col">
                <br>
                <label for ="firstname" class ="firstname_label"><b>Nom :</b></label>
                <input type = "text" name = "firstname" class ="firstname_input" size = "15" maxlength = "30" />
                <br><br>
                <label for ="lastname" class ="lastname_label">Prénom : </label>
                <input type = "text" name = "lastname" class ="lastname_input" size = "15" maxlength = "30" />
            </div>
          </div>
          <div class="row">
                <div class="col-1"></div>
                <div class="col">
                    <table class="table_1">
                        <tr>
                            <th class="table_head_1">Matière</th>
                            <th class="table_head_2">Note session normale</th>
                            <th class="table_head_3">Note session rattrapage</th>
                        </tr> 
                        <tr>
                            <td contenteditable='true' class="table_body_1">Anglais</td>
                            <td contenteditable='true' class="table_body_2">17</td>
                            <td contenteditable='true' class="table_body_3">14</td>
                        </tr>    
                    </table>    
                </div>   
                <div class="col-1"></div>
          </div> 
            <div class="all_button">
             <a role="button" class="btn btn-outline-secondary" href= "#">Modifier</a>
             <a role="button" class="btn btn-outline-secondary" href= "#">Enregistrer</a>
          <div> 
        <div>   
    </div>
</body>
</html>
