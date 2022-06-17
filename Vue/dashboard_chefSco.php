<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>
<link rel = "stylesheet" type= "text/css" href = "projet.css"/>
</head>
<body>

    <div class="block">     
        
        <div class="block_gauche">
            <nav class = "menu">
                <ul>
                     <br>
                     <img src="profil.jpg" alt="" width="80px">
                    <li  class="li1"> <a href="#"> </a> Accueil</li> <br>
                    <li  class="li1"> <a href="#"> </a> Inscription </li> <br>
                    <li  class="li1">  <a href="#"> </a> Notes </li>  <br>
                    <li  class="li1">  <a href="#"> </a> Bulletins </li> <br> <br> <br> <br>
                    <img src = "logo.jpeg"  width = 80px class="logo2"> 
                </ul>
            </nav> 
        </div>
        <div class="block_droit">
            <div class="block_droit_haut"> 
                Welcome to your Dashboard  
              <label for="log out"> </label> 
            <input type="Button"value="log out">
            </div>
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
                <a href="#"><div class="tab"><img src="all-2.jpg" alt="" width="250px" class="bul"><br><h1>Notes</h1> </div></a>
                <a href="#"><div class="tab"><img src="all-1.jpg" alt="" width="250px" class="bul"><br> <br><h1>Diplomes</h1></div></a>
         </div>
        </div>
    </div>
</body>
</html>