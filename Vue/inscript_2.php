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
      <div class = "container inscript_2">
        <div class="row">
          <div class="col-2"></div>
          <div class="col group_of_step-inscript_2">
                <div class="row ">
           
                    <div class="col  display-6 text_inscript_2_step-1">
                      <b>Etape 1</b>
                    </div>
                    <div class="col  display-6 text_inscript_2_step-2">
                      <b>Etape 2</b>
                    </div>
                    <div class="col  display-6 text_inscript_2_step-3">
                      <b>Etape 3</b>
                    </div>
             
            </div>

            <div class="row datebirth">
              <div class="col"></div>
                  <div class="col">
                        <br />
                        <form action="../../Controlleur/Inscription/inscription2.php" method="post">
                        <label for="datebirth" class="label_datebirth"
                          ><em>Date de Naissance :</em>
                        </label>
                        <input
                          type="date"
                          class="form-control"
                          id="datebirth"
                          placeholder="Date de naissance"
                          name="datebirth"
                          required
                        /><br />
                    </div>
                     <div class="col"></div>
              </div> 
              <div class="row placebirth">
                <div class="col"></div>
                  <div class="col"> 
                    <br />  
                        <label for="placebirth" class="label_placebirth"
                          ><em>Lieu de Naissance :</em>
                        </label>
                        <input
                          type="text"
                          class="form-control"
                          id="placebirth"
                          placeholder="Lieu de naissance"
                          name="placebirth"
                          required
                        /><br />
                    </div>
                    <div class="col"></div>
              </div> 
              <div class="row nationality">
                <div class="col"></div>
                          <div class="col"> 
                            <br />  
                        <label for="nationality" class="label_nationality"
                          ><em>Nationalité :</em></label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="nationality"
                          placeholder="Nationalité"
                          name="nationality"
                          required
                        />
                 </div>
                    <div class="col"></div>
              </div> 
                <br /><br />
                <div class="row next_previous-inscript_2">
                <div class="col"></div>
                          <div class="col">  
                <a role="button" class="btn btn-outline-secondary" href="inscript_1.php">Précédent</a>
                
                <a role="button" class="btn btn-outline-secondary" href="inscript_3.php">Suivant</a>
                </form>
              </div>
              <div class="col"></div>
            </div>
          </div>
          <div class="col-2"></div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>