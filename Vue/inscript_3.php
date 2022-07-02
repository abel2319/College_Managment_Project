<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/inscrit.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/inscrit_i.css"/>
<link href="../Styles/Modules/Bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>
</head>
<body>
    <?php
        include_once('panel.php')
    ?>

      <div class="center_block" id="center_block">
      <form  action ="../Controlleur/Inscription/inscription3.php" method="post">
      <div class = "container inscript_3">
        <div class="row">
          <div class="col-2"></div>
          <div class="col group_of_step-inscript_3">
        <div class="row ">
           
              <div class="col display-6 text_inscript_3_step-1">
                <b>Etape 1</b>
              </div>
              <div class="col  display-6 text_inscript_3_step-2">
                <b>Etape 2</b>
              </div>
              <div class="col  display-6 text_inscript_3_step-3">
                <b>Etape 3</b>
              </div>
             
            </div>
            
           <div class="row course_study">
                     <div class="col "></div>
                          <div class="col">
                            <br />
                          
                            <label for="course_of_study" class="label_course_of_study"
                              ><em>Filière :</em>
                            </label>
                            <?php 
                                include_once('../Controlleur/list_filiere.php');
                            ?>
                             </div>
                <div class="col"></div>
              </div> 

              <div class="row email">
                     <div class="col "></div>
                          <div class="col">
                            <br />
                <label for="email" class="label_email"><em>Email :</em> </label>
                <input
                  type="texte"
                  class="form-control"
                  id="email"
                  placeholder="assogba_pierre01@gmail.com"
                  name="email"
                  required
                /><br />
                 </div>
                <div class="col"></div>
              </div> 

                <div class="row contact">
                     <div class="col "></div>
                          <div class="col">
                            <br />
                <label for="contact" class="label_contact"
                  ><em>Contact :</em></label
                >
                <input
                  type="text"
                  class="form-control"
                  id="contact"
                  placeholder="Contact"
                  name="contact"
                  required
                /><br />
                   </div>
                <div class="col"></div>
              </div> 

              <div class="row address">
                     <div class="col "></div>
                          <div class="col">
                            <br />
                <label for="address" class="label_address"
                  ><em>Adresse :</em></label
                >
                <input
                  type="text"
                  class="form-control"
                  id="address"
                  placeholder="RUE 1547"
                  name="address"
                  required
                /><br />
                 </div>
                <div class="col"></div>
              </div> 
               <br />
              <div class="row save_previous-inscript_3">
                <div class="col"></div>
                          <div class="col"> 
                <a role="button" class="btn btn-outline-secondary" href="inscript_2.php">Précédent</a>
                <button class="btn btn-outline-secondary"  type = "submit" name = "btn3">Enregistrer</button>
                <!--<a role="button" class="btn btn-outline-secondary">Enregistrer</a>-->
                
              </div> 
          <div class="col"></div>
        </div>
        </div>
        <div class="col-2"></div>
        </div>
        </div>
      </div>
      </form>
    </div>
  </body>
</html>