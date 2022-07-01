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
    <form  action ="../Controlleur/Inscription/inscription1.php" method="post">
      <div class = "container inscript_1">
        <div class="row">
          <div class="col-2"></div>
          <div class="col group_of_step-inscript_1">
        <div class="row ">
           
              <div class="col display-6 text_inscript_1_step-1">
                <b>Etape 1</b>
         </div>
              <div class="col  display-6 text_inscript_1_step-2">
                <b>Etape 2</b>
              </div>
              <div class="col  display-6 text_inscript_1_step-3">
                <b>Etape 3</b>
              </div>
             
            </div>
       
            <div class="row firstname">
                     <div class="col "></div>
                               <div class="col">
                                <br />
                                <label for="firstname" class="label_firstname"
                                 ><em>Nom :</em>
                            </label>
                            <input
                              type="text"
                              class="form-control"
                              id="firstname"
                              placeholder="ASSOGBA"
                              name="firstname"
                              width="50px"
                              required
                            /><br />
                            </div>
                        <div class="col"></div>    
            </div> 
            <div class="row lastname">
            <div class="col"></div>    
                    <div class="col">
                    <br />
                  <label for="lastname" class="label_lastname"
                                  ><em>Prénom :</em>
                                </label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="lastname"
                                  placeholder="Pierre"
                                  name="lastname"
                                  required
                                /><br />  
                    </div> 
                    <div class="col"></div>                 
        </div>
        <div class="row king">
            <div class="col"></div>    
                    <div class="col">
                    <br />
                  <label for="sex" class="label_sex"><em>Sexe :</em> </label>
                                <input
                                  type="text"
                                  class="form-control"
                                  list="kind"
                                  id="sex"
                                  placeholder="Masculin ou Féminin"
                                  name="sex"
                                  required
                                /><br />
                                <datalist id="kind">
                                  <option value="Féminin"></option>
                                  <option value="Masculin"></option>
                                </datalist>
                    </div> 
                    <div class="col"></div>
                </div> 
                <div class="row picture">
            <div class="col"></div>    
                    <div class="col">
                    <br />
                   <label for="picture" class="label_picture"
                                  ><em>Photo :</em>
                                </label>
                                <input
                                  type="file"
                                  class="form-control"
                                  id="picture"
                                  name="picture"
                                /><br />
                    </div> 
                    <div class="col"></div> 
            </div>
            <br />
            <div class="row button-next">
                <div class="col "></div>    
                    <div class="col">
                     <button class="btn btn-outline-secondary"  type = "submit" name = "btn1">Suivant</button>
                     <!--<a role="button" class="btn btn-outline-secondary" href= "../Controlleur/Inscription/inscription1.php" >Suivant</a>
                    -->
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