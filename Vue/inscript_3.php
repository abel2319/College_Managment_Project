<!DOCTYPE html>
<html>
  <head>
    <title>Gestion Parcours Etudiant</title>
    <link
      href="../../Styles/Modules/Bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="../../Styles/Modules/inscrit_i.css" />
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
        <div class="centre_page_3">
          <div class="container-fluid mt-3 group_etape_page_3">
            <div class="row">
              <div class="col p-3 text-center display-6 Etape_1">
                <div class="text_etape_1"><b>Etape 1</b></div>
              </div>
              <div class="col p-3 text-center display-6 Etape_2_page_2">
                <b>Etape 2</b>
              </div>
              <div class="col p-3 text-center display-6 Etape_3_page_3">
                <b>Etape 3</b>
              </div>
            </div>
            <div class="row">
              <div class="col p-2"></div>
              <div class="col p-6" class="name">
              <form action="../../Controlleur/Inscription/inscription3.php" method="post">
                <label for="course_of_study" class="label_course_of_study"
                  ><em>Filière :</em>
                </label>
                <input
                  type="text"
                  class="form-control"
                  list="course_study"
                  id="course_of_study"
                  placeholder="TIC"
                  name="course_of_study"
                  required
                /><br />
                <datalist id="course_study">
                  <option value="Data Science"></option>
                  <option value="Genie logicel"></option>
                  <option
                    value="Base de données et intelligence artificielle"
                  ></option>
                </datalist>

                <label for="email" class="label_email"><em>Email :</em> </label>
                <input
                  type="texte"
                  class="form-control"
                  id="email"
                  placeholder="assogba_pierre01@gmail.com"
                  name="email"
                  required
                /><br />

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
                <br /><br />
                <button
                  type="button"
                  class="btn btn-small previous_page_3"
                  width="30px"
                >
                  <a href="inscript_2.php" class="link_previous_page_2"
                    >Précédent</a
                  >
                </button>
                <button type="submit" class="btn btn-small save" name = "btn3" width="30px">
                  Enregistrer
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
