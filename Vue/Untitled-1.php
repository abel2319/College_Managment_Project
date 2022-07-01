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
                <div class="col"></div>
                <div class="col">
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col" class="table_head_1">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td contenteditable='true'>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                            </tbody>
                    </table>   
                </div>   
                <div class="col">
                    <table>
<thead>
<tr>Heading 1</tr>
<tr>Heading 2</tr>
</thead>
<tbody>
<tr>
<td contenteditable='true'>cc</td>
<td contenteditable='true'>cc</td>
</tr>
<tr>
<td contenteditable='true'>cc</td>
<td contenteditable='true'>cc</td>
</tr>
</tbody>
</table>
                </div>
          </div>          
        <div>   
    </div>
</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
