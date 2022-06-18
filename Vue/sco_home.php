<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chef Sco Dashboard</title>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/sco_home.css"/>
</head>
<body>
    <?php
        include_once('panel.php')
    ?>
    <div class="center_block" id="center_block">
        <h1 class="aah">Globals informations</h1>
        <div class="centre">
            <div class="dansCentre">              
                Total Students <br><br>
                <input type="text" name="totalStudent" id="totalStudent"/> 
            </div>
            <div class="dansCentreLogo">
                <img src="students.png" alt="" width="100px" class="log3">
            </div>
            <div class="dansCentre">
                Total classes <br><br>
                <input type="text" name="classe" id="classe" class="classes" />
            </div>      
        </div>
        <div class="container">
                <a href="#"><div class="tab"><img src="student_report.png" alt="" width="250px" class="bul"><br><br><br><br><br><br><br><br><h1>Bulletins</h1> </div></a>
                <a href="#"><div class="tab"><img src="images/all-2.jpg" alt="" width="250px" class="bul"><br><h1>Notes</h1> </div></a>
                <a href="#"><div class="tab"><img src="images/all-1.jpg" alt="" width="250px" class="bul"><br> <br><h1>Diplomes</h1></div></a>
        </div>
    </div>
</body>
</html>