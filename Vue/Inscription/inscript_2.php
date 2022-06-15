<?php session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Gestion Parcours Etudiant</title>
    <link
      href="Bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="projet.css" />
  </head>
  <body>
    <div class="block">
      <div class="block_gauche">
        <nav class="menu">
          <ul>
            <br />
            <li class="li1"><a href="#"> </a> Accueil</li>
            <br />
            <li class="li1"><a href="#"> </a> Inscription</li>
            <br />
            <li class="li1"><a href="#"></a> Notes</li>
            <br />
            <li class="li1"><a href="#"></a> Bulletins</li>
            <br />
            <br />
            <br />
            <br />
            <img src="logo.jpeg" width="60px" class="logo2" />
          </ul>
        </nav>
      </div>
      <div class="block_droit">
        <div class="block_droit_haut">
          Welcome to your Dashboard
          <label for="log out"> </label>
          <input type="Button" value="log out" />
        </div>
        <div class="centre">
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
                <form action="../../Modele/inscrit.php" method="post">
                <label for="datebirth" class="label_datebirth"
                  ><em>Date de Naissance :</em>
                </label>
                <input
                  type="date"
                  class="form-control"
                  id="datebirth"
                  placeholder="Date de naissance"
                  name="datebirth"
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
