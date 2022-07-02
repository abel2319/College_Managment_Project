<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>

<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>

</head>
<body>
    <div class="block" id="block">
        <nav class = "menu">
            <div class="user">
                <div class="user_img"><img src = "images/profil.jpg" class="profil"></div>
                <p class="user_mail">directuer@imsp-uac.org</p>
            </div>
            <ul class="liens_gauche"> 
                <li class="accueil"><a href="dir_home.php">Accueil</a></li> 
                <li class="filiere"><a href="dir_filieres.php">Filière</a></li>
            </ul>
            <div class="logo">
                <img src = "images/logo.jpeg"x>
            </div>
        </nav> 
    </div>
    <div class="header_block" id="header_block">
        <p class="header_text">Welcome to your Dashboard</p>
        <div class="log_btn"><form method="post" action="../inndex.php"><button type="submit" name="bouton" formaction="../index.php">log out</button></form></div>
    </div>
    <div class="center_block" id="center_block">
        <p>just to see all</p>
    </div>
  </body>
</html>