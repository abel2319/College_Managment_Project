<?php

namespace App\Modele;
    
class Note { 
   
    public  $IdEtu;
    public  $IdMat;
    public  $Note;
    public  $NoteRat;
    public  $Status; 

    public function __construct($_idEU, $_idMat, $_note=null, $_NotesRat=null, $_Statut=null)
    {
          $this->IdEtu = $_idEU;
          $this->IdMat = $_idMat;
          $this->Note = $_note;
          $this->NoteRat  = $_NotesRat;
          $this->Status = $_Statut;      
    }

    public function getIdEtu(): ?int
    {
        
        return $this->IdEtu;
    }


    public function getNote(): ?int
    {
        return $this->Note;
    }

    public function setNote(int $noteEtudiant): self
    {
        $this->Note = $noteEtudiant;

        return $this;
    }


    public function getNoteRat(): ?int
    {
        return $this->NoteRat;
    }

    public function setNoteRat(?int $noteRattrapage): self
    {
        $this->NoteRat = $noteRattrapage;

        return $this;
    }

    public function getIdMat(): ?int
    {
        return $this->IdMat;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(?string $statut): self
    {
        $this->Status = $statut;

        return $this;
    }
    
    public function connection(){
        $con = mysqli_connect("localhost", "root", "", "PROJET_WEB");
        if (!$con) {
         die("Connection failed: " . mysqli_connect_error());
         }else{
            return $con;
         }
    }
    public function addNote($Note , $NoteRat, $IdEtu, $IdMat,$Status){
        $n = new Note($Note , $NoteRat, $IdEtu, $IdMat,$Status);
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
        $no = new Note($Note , $NoteRat, $IdEtu, $IdMat,$Status);
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



    

    
