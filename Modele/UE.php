<?php

class UE {

    private $id;

    private $nom;

    private $idFiliere;

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

    public function getIdFiliere(): ?Filiere
    {
        return $this->idFiliere;
    }

    public function setIdFiliere(?Filiere $idFiliere): self
    {
        $this->idFiliere = $idFiliere;

        return $this;
    }
}
