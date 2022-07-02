<?php

class Matiere {
  
    private $id;

    private $nom;

    private $credit;

    
    private $idUE;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCredit(): ?int
    {
        return $this->credit;
    }

    public function setCredit(int $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    public function getIdUE(): ?int
    {
        return $this->idUE;
    }

    public function setIdUE(?int $idUE): self
    {
        $this->idUE = $idUE;

        return $this;
    }
}
