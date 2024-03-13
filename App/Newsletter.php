<?php

namespace App\Newsletter;

use PDO;
use PDOException;

class Newsletter {
    private PDO $db;
    private int $id;
    private string $email;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function addEmail() {
        $query = $this->db->prepare("INSERT INTO newsletter (email) VALUES (:email)");
        $query->bindValue(':email', $this->email, PDO::PARAM_STR);
        $query->execute();
    }

    public function getAllEmails() {
        $query = $this->db->prepare("SELECT * FROM newsletter");
        $query->execute();
        return $query->fetchAll();
    }

    public function deleteEmail() {
        $query = $this->db->prepare("DELETE FROM newsletter WHERE id = :id");
        $query->bindValue(':id', $this->id, PDO::PARAM_INT);
        $query->execute();
    }
}