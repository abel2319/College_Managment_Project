<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/modSupp.css"/>
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
                Inscription
              <label for="log out"> </label> 
            <input type="Button"value="log out" id="log">
            </div>
            <div class="centre">
                <input type="text" name="matricule" id="saisir">
                <button>Rechercher</button>
                <table>
                    <tr>
                        <td id="nom">Nom de l'Etudiant</td>
                        <td id="prenom">Prenom de l'Etudiant</td>
                        <td id="sexe">Sexe</td>
                        <td id="date">Date de Naissance</td>
                        <td>Ville d'origine</td>
                        <td id="N">Nationalité</td>
                    </tr>
               </table>
                      
                <table id="deux">
                    <tr>
                        <td id="F">Filière</td>
                        <td id="Em">Email</td>
                        <td id="tel">Telephone</td>
                        <td>Residence</td>
                    </tr>
                </table>
                <button id="suppression">
                    <img src="../images/supp.jpg">
                <p>Supprimer</p>
                </button>
                <button id="Modification">
                    <img src="../images/mod.jpg" title="Modifier"> 
                <p>Modifier</p>
                </button>
            </div>
        </div>
    </div>
</body>
</html>