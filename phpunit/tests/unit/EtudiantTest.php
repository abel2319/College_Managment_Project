<?php


class EtudiantTest extends \PHPUnit\Framework\TestCase{


    /**@expectedException*/
    public function test_constructor_returns_an_error_if_not_initialized(){
      
        $this->expectException(ArgumentCountError::class);
        $etudiants = new \App\Modele\Etudiant();

    }

//      public function test_constructor_is_working(){

         
//          $etudiant = new \App\Modele\Etudiant('Amanda', 'Palmer', '2004-10-05','Kampala', "Ouganda", 'amandapalmer@gmail.com','F','90807865','','Dangbo', 1);

//         $this->assertEquals("Amanda", $etudiant->getNom());
//         $this->assertEquals("Palmer", $etudiant->getPrenom());
//         $this->assertEquals("2004-10-05", $etudiant->getDateNaissance());
//         $this->assertEquals("Kampala", $etudiant->getLieuNaissance());             
//         $this->assertEquals("Ouganda", $etudiant->getNationalite());
//         $this->assertEquals("amandapalmer@gmail.com", $etudiant->getEmail());
//         $this->assertEquals("F", $etudiant->getGenre());
//         $this->assertEquals("90807865", $etudiant->getContact());
//         $this->assertEquals("Dangbo", $etudiant->getAdresse());
//         $this->assertEquals(1, $etudiant->getIdFiliere());
        

//     }
       
//     public function test_That_We_Got_The_Name_Right(){

        
//          $etudiant = new \App\Modele\Etudiant('Amanda', 'Palmer', '2004-10-05','Kampala', "Ouganda", 'amandapalmer@gmail.com','F','90807865','','Dangbo', 1);
//          $etudiant->setNom("Alexander");
//          $this->assertEquals($etudiant->getNom(), "Alexander");

//     }

//      public function test_That_We_Can_Get_The_Last_Name(){

//          $etudiant = new \App\Modele\Etudiant('Amanda', 'Palmer', '2004-10-05','Kampala', "Ouganda", 'amandapalmer@gmail.com','F','90807865','','Dangbo', 1);
//          $etudiant->setPrenom("Jones");
//          $this->assertEquals($etudiant->getPrenom(), "Jones");

//      }

//      public function test_That_We_Can_Get_The_Gender(){
//           $etudiant = new \App\Modele\Etudiant('Amanda', 'Palmer', '2004-10-05','Kampala', "Ouganda", 'amandapalmer@gmail.com','F','90807865','','Dangbo', 1);
//          $etudiant->setGenre("M");
//          $this->assertEquals($etudiant->getGenre(), "M");
        
//      }

//      public function test_That_We_Can_Get_The_Address(){
        
//          $etudiant = new \App\Modele\Etudiant('Amanda', 'Palmer', '2004-10-05','Kampala', "Ouganda", 'amandapalmer@gmail.com','F','90807865','','Dangbo', 1);
//          $etudiant->setAdresse("Porto-Novo");
//          $this->assertEquals($etudiant->getAdresse(), "Porto-Novo");
        
//      }
    
//       public function test_That_We_Can_Get_The_Origin(){
        
//          $etudiant = new \App\Modele\Etudiant('Amanda', 'Palmer', '2004-10-05','Kampala', "Ouganda", 'amandapalmer@gmail.com','F','90807865','','Dangbo', 1);
//         $etudiant->setNationalite("Ougandais");
//         $this->assertEquals($etudiant->getNationalite(), "Ougandais");
        
//      }

//      public function test_That_We_Can_Get_The_Birth_Day_Place(){
        
//          $etudiant = new \App\Modele\Etudiant('Amanda', 'Palmer', '2004-10-05','Kampala', "Ouganda", 'amandapalmer@gmail.com','F','90807865','','Dangbo', 1);
//          $etudiant->setLieuNaissance("Yaounde");
//         $this->assertEquals($etudiant->getLieuNaissance(), "Yaounde");
        
//      }

//      public function test_That_We_Can_Get_The_Birth_Day(){
        
//          $etudiant = new \App\Modele\Etudiant('Amanda', 'Palmer', '2004-10-05','Kampala', "Ouganda", 'amandapalmer@gmail.com','F','90807865','','Dangbo', 1);
//          $etudiant->setDateNaissance('1970-09-05');
//          $this->assertEquals($etudiant->getDateNaissance(), "2005-05-09");
        
//      }

//      public function test_That_We_Can_Get_The_Phone_Number(){
        
//         $etudiant = new \App\Modele\Etudiant('Amanda', 'Palmer', '2004-10-05','Kampala', "Ouganda", 'amandapalmer@gmail.com','F','90807865','','Dangbo', 1);
//         $etudiant->setContact("90807865");
//         $this->assertEquals($etudiant->getContact(), "90807865");
        
//      }



}





?>
