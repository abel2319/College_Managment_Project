<?php

class Employes {

    private $id;

    public $nom;

    private $prenom;

    private $dateNaissance;

    private $genre;

    private $lieuNaissance;

    private $nationalite;

    private $email;

    private $password;

    private $contact;
    
    private $statut;

    private $adresse;
    
    public function __construct (
        
        $_id, $_nom, $_prenom, $_statut, $_dateNaissance, $_genre, $_lieuNaissance,
        
        $_nationalite, $_email, $_password, $_contact, $_adresse
        
        )
    {

        $this->id = $_id;
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->statut = $_statut;
        $this->dateNaissance = $_dateNaissance;
        $this->genre = $_genre;
        $this->lieuNaissance = $_lieuNaissance;
        $this->nationalite = $_nationalite;
        $this->email = $_email;
        $this->password = $_password;
        $this->contact = $_contact;
        $this->adresse = $_adresse;


    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(string $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieuNaissance;
    }

    public function setLieuNaissance(string $lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getEmailVariables(){

        return [

            'full_name' => $this->getNom().' '.$this->getPrenom(),

            'email' => $this->getEmail(),
        ];

    }
}
