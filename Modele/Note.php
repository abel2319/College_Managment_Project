<?php
class Note
{ 
   
    public  $IdEtu;
    public  $IdMat;
    public  $Note;
    public  $NoteRat;
    public  $Status; 

    public function connection(){
        $con = mysqli_connect("localhost", "root", "", "PROJET_WEB");
        if (!$con) {
         die("Connection failed: " . mysqli_connect_error());
         }else{
            return $con;
         }
    }
    public function addNote($Note , $NoteRat, $IdEtu, $IdMat,$Status){
        $n = new Note();
        $con = $n->connection();
        $sql = "INSERT INTO EtudiantHasNoteInMatiere VALUES ('$Note', '$NoteRat', '$IdEtu', '$IdMat','$Status')";
        
        if (mysqli_query($con, $sql)) {
            echo "Enregistrement réussi";
          } else
          {
              echo "Enregistrement echoué";
          }
        
       
          mysqli_close($con);
    }

     public function editNote($Note,$NoteRat,$IdEtu,$IdMat, $Status){
        $no = new Note();
        $con = $no->connection();
        /*$sql = "UPDATE EtudiantHasNoteInMatiere SET note='$Note',note_ratrappage='$NoteRat', where 'EtudiantHasNoteInMatiere'.Id_Etudiant=$IdEtu AND 'EtudiantHasNoteInMatiere'.Id_Matiere= $IdMat";*/
        $sql = "INSERT INTO EtudiantHasNoteInMatiere (note,note_ratrappage) VALUES ('$Note', '$NoteRat') where Id_Etudiant='$IdEtu' AND Id_Matiere ='$IdMat'";
        
        if (mysqli_query($con, $sql)) {
            echo "Modification Effectuée";
          } else
          {
              echo "Modification Echouée";
          }
        
       
          mysqli_close($con);
     }
          
}
?>