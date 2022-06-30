<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>

<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/note.css"/>
</head>
<body>

    <div class="block">     
        
        <div class="block_gauche">
            <nav class = "menu">
                <ul>
                     <br>
                    <li  class="li1"> <a href="#"> </a> Accueil</li> <br>
                    <li  class="li1"> <a href="#"> </a> Inscription </li> <br>
                    <li  class="li1">  <a href="#"> </a> Notes </li>  <br>
                    <li  class="li1">  <a href="#"> </a> Bulletins </li> <br> <br> <br> <br>
                    <img src = "logo.jpeg"  width = 60px class="logo2"> 
                </ul>
            </nav> 
        </div>
        <div class="block_droit">
            <div class="block_droit_haut"> 
                Welcome to your Dashboard  
              <label for="log out"> </label> 
            <input type="Button"value="log out">
            </div>
            <div class="centre">
            <label for ="firstname" class ="id1">Matricule </label>
            <input type = "text" name = "firstname" class ="id2" placeholder = "Entrez matricule" size = "30" maxlength = "30" />
            <br>
            <br>
            <br>
            <br>
            <label for ="firstname" class ="id3">Nom </label>
            <input type = "text" name = "firstname" class ="id4" placeholder = "Entrez nom de l'étudiant" size = "30" maxlength = "30" />
            <br>
            <br>
            <br>
            <br>
            <label for ="lastname" class ="id5">Prénom </label>
            <input type = "text" name = "lastname" class ="id6" placeholder = "Entrez prenom de l'étudiant" size = "30" maxlength = "50"/>
            <br>
            <br>
            <br>
            <br>
            <input type = "submit" class ="id7" value = "Rechercher" />
            </div>
        </div>
    </div>
</body>
</html>
