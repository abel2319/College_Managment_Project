<?php


class EmployesTest extends \PHPUnit\Framework\TestCase{


    /**@expectedException*/
    public function test_constructor_returns_an_error_if_not_initialized(){
      
        $this->expectException(ArgumentCountError::class);
        $employes = new \App\Modele\Employes();

    }

    public function test_constructor_is_working(){

        $employes = new \App\Modele\Employes(1,'Anthony', 'Jopkins', 'Directeur', '1970-10-06','M','New-york', "USA", 'anthonyjopkins@imsp-uac.org', 'mot_de_passe', '67985609','Dangbo');

        $this->assertEquals(1, $employes->getId());
        $this->assertEquals("Anthony", $employes->getNom());
        $this->assertEquals("Jopkins", $employes->getPrenom());
        $this->assertEquals("Directeur", $employes->getStatut());
        $this->assertEquals("1970-10-06", $employes->getDateNaissance());
        $this->assertEquals("M", $employes->getGenre());
        $this->assertEquals("New-york", $employes->getLieuNaissance());
        $this->assertEquals("USA", $employes->getNationalite());
        $this->assertEquals("anthonyjopkins@imsp-uac.org", $employes->getEmail());
        $this->assertEquals("mot_de_passe", $employes->getPassword());
        $this->assertEquals("67985609", $employes->getContact());
        $this->assertEquals("Dangbo", $employes->getAdresse());
        

    }
       
    public function test_That_We_Got_The_Employe_Name_Right(){


         $employe = new \App\Modele\Employes(1,'Anthony', 'Jopkins', 'Directeur', '1970-10-06','M','New-york', "USA", 'anthonyjopkins@imsp-uac.org', 'mot_de_passe', '67985609','Dangbo');
         $employe->setNom("Alexander");
         $this->assertEquals($employe->getNom(), "Alexander");

    }

     public function test_That_We_Can_Get_The_Last_Name(){

         $employe = new \App\Modele\Employes(1,'Anthony', 'Jopkins', 'Directeur', '1970-10-06','M','New-york', "USA", 'anthonyjopkins@imsp-uac.org', 'mot_de_passe', '67985609','Dangbo');
         $employe->setPrenom("Jones");
         $this->assertEquals($employe->getPrenom(), "Jones");

     }

     public function test_That_We_Can_Get_The_Gender(){
         $employe = new \App\Modele\Employes(1,'Anthony', 'Jopkins', 'Directeur', '1970-10-06','M','New-york', "USA", 'anthonyjopkins@imsp-uac.org', 'mot_de_passe', '67985609','Dangbo');
         $employe->setGenre("M");
         $this->assertEquals($employe->getGenre(), "M");
        
     }

     public function test_That_We_Can_Get_The_Address(){
        
         $employe = new \App\Modele\Employes(1,'Anthony', 'Jopkins', 'Directeur', '1970-10-06','M','New-york', "USA", 'anthonyjopkins@imsp-uac.org', 'mot_de_passe', '67985609','Dangbo');
         $employe->setAdresse("Porto-Novo");
         $this->assertEquals($employe->getAdresse(), "Porto-Novo");
        
     }
    
      public function test_That_We_Can_Get_The_Origin(){
        
        $employe = new \App\Modele\Employes(1,'Anthony', 'Jopkins', 'Directeur', '1970-10-06','M','New-york', "USA", 'anthonyjopkins@imsp-uac.org', 'mot_de_passe', '67985609','Dangbo');
        $employe->setNationalite("Ougandais");
        $this->assertEquals($employe->getNationalite(), "Ougandais");
        
     }

     public function test_That_We_Can_Get_The_Birth_Day_Place(){
        
         $employe = new \App\Modele\Employes(1,'Anthony', 'Jopkins', 'Directeur', '1970-10-06','M','New-york', "USA", 'anthonyjopkins@imsp-uac.org', 'mot_de_passe', '67985609','Dangbo');
         $employe->setLieuNaissance("Yaounde");
        $this->assertEquals($employe->getLieuNaissance(), "Yaounde");
        
     }

     public function test_That_We_Can_Get_The_Birth_Day(){
        
         $employe = new \App\Modele\Employes(1,'Anthony', 'Jopkins', 'Directeur', '1970-10-06','M','New-york', "USA", 'anthonyjopkins@imsp-uac.org', 'mot_de_passe', '67985609','Dangbo');
         $employe->setDateNaissance('1970-09-05');
         $this->assertEquals($employe->getDateNaissance(), "1970-09-05");
        
     }

     public function test_That_We_Can_Get_The_Phone_Number(){
        
        $employe = new \App\Modele\Employes(1,'Anthony', 'Jopkins', 'Directeur', '1970-10-06','M','New-york', "USA", 'anthonyjopkins@imsp-uac.org', 'mot_de_passe', '67985609','Dangbo');
        $employe->setContact("67985609");
        $this->assertEquals($employe->getContact(), "67985609");
        
     }
    
     public function test_That_We_Can_Get_The_Email(){

         $employe = new \App\Modele\Employes(1,'Anthony', 'Jopkins', 'Directeur', '1970-10-06','M','New-york', "USA", 'anthonyjopkins@imsp-uac.org', 'mot_de_passe', '67985609','Dangbo');
        
         $employe->setNom("Alexander");
         $employe->setPrenom("Jones");
         $employe->setEmail("alexanderjones@gmail.com");
         $emailVariables = $employe->getEmailVariables();    

         $this->assertArrayHasKey('full_name', $emailVariables);
         $this->assertArrayHasKey('email', $emailVariables);
                
         $this->assertEquals($emailVariables['full_name'], "Alexander Jones");
         $this->assertEquals($emailVariables['email'], 'alexanderjones@gmail.com');
        
     }

    
}



?>
