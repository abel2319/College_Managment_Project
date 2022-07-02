<?php
include('../Modele/Filiere.php');
$tab = get_filiere();
        echo'  
                  <input
                        type="text"
                        class="form-control"
                        list="course_study"
                        id="course_of_study"
                        placeholder="TIC"
                        name="course_of_study"
                        required
                        /><br />
                        <datalist id="course_study">';
 for ($i = 0; $i < count($tab) ; $i++ ){
        echo '       
                   <option value = "'.$tab[$i][0].'">'.$tab[$i][1].'</option>';
        }    
        echo '
        </datalist>';
?>