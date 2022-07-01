<!Doctype html>
<html>
<head>
<title>Gestion Parcours Etudiant </title>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Layouts/panel_layaouts.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/reset.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Bases/base.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/panel.css"/>
<link rel = "stylesheet" type= "text/css" href = "../Styles/Modules/modSupp.css"/>

<link href="../Styles/Modules/Bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>

</head>
<body>
    <?php
        include_once('panel.php')
    ?>

        <div class="center_block" id="center_block">
            <div class="row">
                <div class="col">
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
                            /><br /><br />
                  <label for="lastname" class="label_lastname"
                                  ><em>Prénom :</em>
                                </label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="lastname"
                                  placeholder="Pierre"
                                  name="lastname"
                                /><br /><br />
                  <label for="sex" class="label_sex"><em>Sexe :</em> </label>
                                <input
                                  type="text"
                                  class="form-control"
                                  list="kind"
                                  id="sex"
                                  placeholder="Masculin ou Féminin"
                                  name="sex"
                                /><br />
                                <datalist id="kind">
                                  <option value="Féminin"></option>
                                  <option value="Masculin"></option>
                                </datalist>   
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
                <div class="col">
        
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
                        /><br /><br />
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
                        /><br /><br />
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
                <div class="col">
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
                            <br />
                <label for="email" class="label_email"><em>Email :</em> </label>
                <input
                  type="texte"
                  class="form-control"
                  id="email"
                  placeholder="assogba_pierre01@gmail.com"
                  name="email"
                  required
                />
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
                /><br /><br />
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
                /><br />  <br /> 
             </div>
            </div>
            <div class="all_button">
             <a role="button" class="btn btn-outline-secondary button_edit" width="100px" href="#"><img src = "../Vue/images/modifier.png" class=""></a>
             <a role="button" class="btn btn-outline-secondary" width="100px" href="#"><img src = "../Vue/images/delete.png" class="button_delete"></a>
            </div>    
        </div>
</body>
</html>