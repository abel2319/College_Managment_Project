<!DOCTYPE html>
<html>
  <head>
    <title>Gestion Parcours Etudiant</title>
    <link
      href="../../Styles/Modules/Bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel ="stylesheet" type = "text/css" href = "../Styles/Modules/inscrit_i.css" />
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
              <div class="col p-3 text-center display-6 Etape_2_page_2">
                <b>Etape 2</b>
              </div>
              <div class="col p-3 text-center display-6 Etape_3_page_2">
                <div class="triangle-etape_3"></div>
                <b>Etape 3</b>
              </div>
            </div>
            <div class="row">
              <div class="col p-2"></div>
              <div class="col p-6 inscription_page_2">
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
                /><br />
                <br /><br />
                <button
                  type="button"
                  class="btn btn-small previous"
                  width="30px"
                >
                  <a href="inscript_1.php" class="link_previous_page_2"
                    >Précédent</a
                  >
                </button>
                
                <button
                  type="submit"
                  class="btn btn-small next_page_2"
                  width="30px"
                  name ="btn2"
                >
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
