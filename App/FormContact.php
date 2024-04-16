<?php

namespace App\FormContact;

use PDO;
use PDOException;

class FormContact {
    private PDO $db;
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $phone;
    private string $ask;
    private string $situation;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function setFirstName(string $firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName) {
        $this->lastName = $lastName;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setPhone(string $phone) {
        $this->phone = $phone;
    }

    public function setAsk(string $ask) {
        $this->ask = $ask;
    }

    public function setSituation(string $situation) {
        $this->situation = $situation;
    }


    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string{
        return $this->lastName;
    }

    //methode permettant de recuperer l'email de l'utilisateur
    public function getEmail(): string{
        return $this->email;
    }

    public function getPhone(): string{
        return $this->phone;
    }

    public function getAsk(): string{
        return $this->ask;
    }

    public function getSituation(): string{
        return $this->situation;
    }

    //methode permettant de recuperer les informations de l'utilisateur
    public function formRegister() {
        $query = $this->db->prepare("INSERT INTO `formContact`(firstName, lastName, email, phone, ask, situation) VALUES (:firstName, :lastName, :email, :phone, :ask, :situation)");

        $query->bindValue(":firstName", $this->firstName, PDO::PARAM_STR);
        $query->bindValue(":lastName", $this->lastName, PDO::PARAM_STR);
        $query->bindValue(":email", $this->email, PDO::PARAM_STR);
        $query->bindValue(":phone", $this->phone, PDO::PARAM_STR);
        $query->bindValue(":ask", $this->ask, PDO::PARAM_STR);
        $query->bindValue(":situation", $this->situation, PDO::PARAM_STR);

        $query->execute();
    }
}

