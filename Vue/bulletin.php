<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>

<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/bulletin.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>

</head>
<body>
    <div class="block" id="block">
        <nav class = "menu">
            <div class="user">
                <div class="user_img"><img src = "images/profil.jpg" class="profil"></div>
                <p class="user_mail">chefsco@imsp-uac.org</p>
            </div>
            <ul class="liens_gauche"> 
                <li class="accueil"><a href="sco_home.php">Accueil</a></li> 
                <li class="inscription"><a href="inscrit.php">Inscription</a></li>
                <li class="notes"><a href="note.php">Notes</a></li>
                <li class="bulletin"><a href="bulletin.php">Bulletins</a></li>
                <li class="filiere"><a href="filiere.php">Filière</a></li>
</ul>
            <div class="logo">
                <img src = "images/logo.jpeg"x>
            </div>
        </nav> 
    </div>
    <div class="header_block" id="header_block">
        <p class="header_text">Consulter Bulletin</p>
        <div class="log_btn"><button type="submit" name="bouton" formaction="../index.php" autofocus>log out</button></div>
    </div>
    <div class="center_block" id="center_block">
    <form action="../Controlleur/bulletinControl.php" method = "post">
            <div class = "bulletinI">
                <div class="bulletin_gauche">
                    <div class="bulletin_head">
                        <div class="bulletin_head_image1">
                            <img src="images/uac.png">
                        </div>
                        <div class="bulletin_head_text">
                        <h1>UNIVERSITE D'ABOMEY CALAVI</h1>
                        <hr class="tiret">
                        <br>
                        <h1>INSTITUT DE MATHEMATIQUES ET DE SCIENCES PHYSIQUES</h1>
                        <hr class="tiret">
                        <br>
                        </div>
                        <div class="bulletin_head_image2">
                            <img src="images/imsp_m.png">
                        </div>
                    </div>
                    <br/><br/>
                    <div class="bulletin_body">
                        <p><h1 id="head_bull">RELEVÉ DE NOTE<br/><br/><br/></h1></p>
                        <p>
                        
                            <span class="infos_etu">Numéro matricule:</span> <input type=text id="mat_etu" name = "mat_etu"/><br/><br/>
                            <span class="infos_etu">Nom:</span> <input type=text id="nom_etu" name = "nom_etu" readonly/><br/><br/>
                            <span class="infos_etu">Prénom:</span> <input type=text id="prenom_etu" name = "prenom_etu" readonly/><br/><br/>
                            <span class="infos_etu">Date de naissance:</span> <input type=text id="naiss_etu" name = "naiss_etu" readonly/><br/><br/>
                            <span class="infos_etu">Filière:</span> <input type=text id="filiere_etu" name = "filiere_etu" readonly/><br/><br/><br/>
                        </p>
                        <table id="tabl_bull">
                            <tr id="head_tabl">
                                <th>Unités d'enseignement</th>
                                <th>Eléments constitutifs</th>
                                <th>Notes</th>
                                <th>Crédits</th>
                                <th>Sessions</th>
                                <th>Observation</th>
                                <th>Moyenne</th>
                            </tr>
                        </table>
                        <br><br>
                    </div>
                </div>
                <div class="bulletin_droit">
                       <button type="submit"  name = "impBtn">Imprimer</button> 
               </div>
            </div>
        </form>
    </div>
  </body>
</html>

