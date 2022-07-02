<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chef Dirlo Dashboard</title>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/dir_home.css"/>
</head>
<body>
    <?php
        include_once('panel_directeur.php')
    ?>
    <div class="center_block" id="center_block">
        <h1 class="aah">Globals informations</h1>
	<div class="centre"> 
            <div class="bloc_1_a">
                <div class="dansCentre">
                    <span class="stuclas">Total Students</span>
                    <span name="totalStudent" id="totalStudent" class="stuclas">562</span>
                </div>
                <div class="dansCentreLogo">
                    <img src="images/students.png" alt="" class="log3" />
	        </div>
            </div>
            <div class="bloc_2_a">
                <div class="dansCentre">
                    <span class="stuclas">Total classes</span>
                    <span name="classe" id="classe" class="stuclas">16</span>
                </div>
                <div class="dansCentreLogo">
                    <img src="images/claxss.jpeg" alt="" class="log3" />
                </div>
            </div>
        </div>
        <div class="container">
                <div class="tab1"><a href="#"><img src="images/research.png" alt="" class="bul1"><h1>Rechercher Etudiants</h1></a></div>
                <div class="tab2"><a href="note.php"><img src="images/all-2.jpg" alt="" class="bul2"><h1>Filières</h1></a></div>
        </div>
    </div>
</body>
</html>
