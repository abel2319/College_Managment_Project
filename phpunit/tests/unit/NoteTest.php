<?php

class NoteTest extends \PHPUnit\Framework\TestCase {


    /**@expectedException*/
    public function test_constructor_returns_an_error_if_not_initialized(){
      
        $this->expectException(ArgumentCountError::class);
        $note = new \App\Modele\Note();

    }

    public function test_constructor_is_working(){       

        $note = new \App\Modele\Note(1,2,15,0,'valide(e)');
        $this->assertEquals(1, $note->getIdEtu());
        $this->assertEquals(2, $note->getIdMat());
        $this->assertEquals(15,$note->getNote());
        $this->assertEquals(0, $note->getNoteRat());
        $this->assertEquals('valide(e)', $note->getStatus());
        

    }

    public function test_we_can_get_the_note_value(){

        $note = new \App\Modele\Note(1,2,null,null,null);
        $note->setNote(16);
        $this->assertEquals($note->getNote(),16);
    }

    
    public function test_we_can_get_the_note_rattrappage_value(){

        $note = new \App\Modele\Note(1,2,15,0,'valide(e)');
        $note->setNoteRat(19);
        $this->assertEquals($note->getNoteRat(),19);
    }      
    
    public function test_we_can_get_the_status_default_value(){      
        
        $note = new \App\Modele\Note(1,2,15,0);
        $this->assertTrue($note->getStatus()==null);
       
    }

}


?>
