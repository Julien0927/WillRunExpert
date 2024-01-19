<?php

class maPersonne {
    public string $nom;
    public string $prenom;
    public int $age;

    public function getNom() {
        return $this->nom;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge(int $age) {
        $this->age = $age;
    }

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function afficherInformations() {
        return "Bonjour, je m'appelle ".$this->nom ." ".$this->prenom." et j'ai ".$this->age. "ans.";
    }
}

$maPersonne = new maPersonne("Doe", "John");
$maPersonne->setAge(42);
echo ($maPersonne->afficherInformations());

class User {
    public string $email;
    public string $password;


    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(string $password) {
        $this->password = $password;
    }
    
    public function __construct(string $email, string $password) {
        $this->email = $email;
        $this->password = $password;
    }
}