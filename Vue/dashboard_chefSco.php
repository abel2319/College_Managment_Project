<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>
<link rel = "stylesheet" type= "text/css" href = "dashboard_chefSco_1.css"/>
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
        <div class="global_informations">
            <p>Globals informations</p>
        </div>
        <div class="container center">
              <div class="row">
                 <div class="col dansCentre">
                    <div class = "row">
                    <div class="col total_students">              
                    Total Students <br><br>
                    <p class="zero">0</p> 
                     </div>
                     <div class="col">
                    <img src="../Vue/images/students.png" alt=""  class="log3">
                    </div> 
                     </div> 
                </div>
                <div class="col dansCentreLogo">
                </div>
                <div class="col dansCentre">
                    Total classes <br><br>
                    <p>0</p>
                </div>      
            </div>
             </div>

             <div class="row">
                <div class="col">
                     <a href="#"><div class="tab"><img src="../Vue/images/student_report.png" alt="" width="250px" class="bul"><br><br><br><br><br><br><br><br><h1 class="text_bulletin">Bulletins</h1> </div></a>
                </div>
                <div class="col"></div>
                <div class="col"></div>    
            </div>   
    </div>
</body>
</html>
