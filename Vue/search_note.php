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
                    <form   method="post"><!--action ="../Controlleur/Note/note.php"-->
                    <label for="course_of_study" class="course_of_study_label">
                              <em>Filière :</em>
                            </label><br><br>
                            <input
                              type="text"
                              class="form-control"
                              list="course_study"
                              id="course_of_study_label"
                              name="course_of_study_label"
                              required
                            /><br />
                            <datalist nom = "course_of_study" id="course_study">
                              <option value="Data Science"></option>
                              <option value="Genie logiciel"></option>
                              <option
                                value="Base de données et intelligence artificielle"
                              ></option>
                            </datalist>
                            <br>
                        <a role="button" class="btn btn-outline-secondary" href= "../Vue/note.php">Rechercher</a>
                    </form>
                </div>
                <div class="col"></div>          
            </div>
        </div>
</body>
</html>