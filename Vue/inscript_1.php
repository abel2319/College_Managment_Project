<!DOCTYPE html>
<html>
  <head>
    <title>Gestion Parcours Etudiant</title>
    <link
      href="../../Styles/Modules/Bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="../Styles/Modules/inscrit_i.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
    <link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
  </head>
  <body>
  <?php
        include_once('panel.php')
    ?>
    <div class="center_block" id="center_block"> 
          <div class="container-fluid mt-3 group_etape">
            <div class="row">
              <div class="col p-3 text-center display-6 Etape_1">
                <div class="text_etape_1"><b>Etape 1</b></div>
              </div>
              <div class="col p-3 text-center display-6 Etape_2">
                <div class="triangle-etape_2"></div>
                <b>Etape 2</b>
              </div>
              <div class="col p-3 text-center display-6 Etape_3">
                <b>Etape 3</b>
              </div>
            </div>
            <div class="row">
              <div class="col p-2"></div>
              <div class="col p-6" class="name">
                <br />

                <form action="../../Controlleur/Inscription/inscription1.php" method="post">
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

                <label for="picture" class="picture"
                  ><em>Photo :</em>
                </label>
                <input
                  type="file"
                  class="form-control"
                  id="picture"
                  name="picture"
                  required
                /><br />
                <br />
                <button type="submit" name ="btn1" class="btn btn-small next" width="30px">
                  Suivant
                </button>
                
              
                </form>
              </div>
              <div class="col p-2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
