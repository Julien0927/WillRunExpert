<?php

namespace App\Users;

use PDO;
use PDOException;

class Users {
    private PDO $db;
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    private string $role;

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

    public function setPassword(string $password) {
        //On va hasher le mot de passe
        $this->password = password_hash($password, PASSWORD_ARGON2ID);
    }

    public function setRole(string $role) {
        // Vérifier si le rôle est valide avant de l'affecter
        if (in_array($role, [self::ROLE_USER, self::ROLE_ADMIN])) {
            $this->role = $role;
        }
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

    //methode permettant de recuperer le mot de passe de l'utilisateur
    public function getPassword(): string{
        return $this->password;
    }

    //methode permettant de recuperer le role de l'utilisateur
    public function getRole(): string {
        return $this->role;
    }
    //methode permettant de recuperer les informations de l'utilisateur
    public function register() {
        $query = $this->db->prepare("INSERT INTO `users`(firstName, lastName, email, password, role) VALUES (:firstName, :lastName, :email, :password, role)");

        $role = ["ROLE_USER", "ROLE_ADMIN"];
        $query->bindValue(":firstName", $this->firstName, PDO::PARAM_STR);
        $query->bindValue(":lastName", $this->lastName, PDO::PARAM_STR);
        $query->bindValue(":email", $this->email, PDO::PARAM_STR);
        $query->bindValue(":password", $this->password, PDO::PARAM_STR);

        $query->execute();
    }


    //methode permettant de verifier le mot de passe
    public function verifyPassword($password, $hash) {
        return password_verify($password, $hash);
    }

    public function login(string $email, string $password) {
        //On verifie que l'email est valide
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new \Exception("Les identifiants ne sont pas valides");
        }

        try {
        $query = $this->db->prepare("SELECT * FROM `users` WHERE email = :email");
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();

        if(!$user || !password_verify($password, $user["password"])){
            throw new \Exception("Les identifiants ne sont pas valides");
        }

        session_start();
            $_SESSION["user"] = [
                "id" => $user["id"],
                "email" => $user["email"],
                "role" => $user["role"]
            ];

            return true;
        } catch (PDOException $e) {
            throw new \Exception("Erreur de connexion à la base de données");
        }
    }

    const ROLE_USER = "ROLE_USER";
    const ROLE_ADMIN = "ROLE_ADMIN";

//Fonction permettant de recuperer les informations de l'utilisateur
    public function getAllUsers() {
        $query = $this->db->prepare("SELECT * FROM `users` ORDER BY `lastName` ASC");
        $query->execute();
        return $query->fetchAll();
    }

    public function logout() {
        session_start();
        session_destroy();
    }
}


