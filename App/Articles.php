<?php

namespace App\Articles;

use PDO;
use PDOException;

class Articles {
    private PDO $db;
    private int $id;
    private string $title;
    private string $content;
    private string $image;
    private string $link;
    private string $date;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function setContent(string $content) {
        $this->content = $content;
    }

    public function setImage(string $image) {
        $this->image = $image;
    }

    public function setLink(string $link) {
        $this->link = $link;
    }

    public function setDate(string $date) {
        $this->date = $date;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getContent(): string{
        return $this->content;
    }

    public function getImage(): ? string{
        return $this->image;
    }

    public function getLink(): ? string {
        return $this->link;
    }

    public function getDate(): string {
        return $this->date;
    }

    //Fonction d'ajouter un article
    public function addArticle(): void {

        $sql = "INSERT INTO `articles`(`title`, `content`, `image`, `link`, `date`) VALUES (:title, :content, :image, :link, :date)";
        $query = $this->db->prepare($sql);

        $query->bindValue(":title", $this->title, PDO::PARAM_STR);
        $query->bindValue(":content", $this->content, PDO::PARAM_STR);
        $query->bindValue(":image", $this->image, PDO::PARAM_STR);
        $query->bindValue(":link", $this->link, PDO::PARAM_STR);
        $query->bindValue(":date", $this->date, PDO::PARAM_STR);

       $query->execute();
    }

    //Fonction permettant de recuperer tous les articles
    public function getAllArticles() {
        $sql = "SELECT * FROM `articles` ORDER BY `date` DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
       
        return $query->fetchAll(PDO::FETCH_ASSOC);;
    }

    //Fonction permmettant de mofifier un article
    public function updateArticle(): void {
        $sql = "UPDATE `articles` SET `title`=:title,`content`=:content,`image`=:image,`link`=:link,`date`=:date WHERE id=:id";
        $query = $this->db->prepare($sql);

        $query->bindValue(":title", $this->title, PDO::PARAM_STR);
        $query->bindValue(":content", $this->content, PDO::PARAM_STR);
        $query->bindValue(":image", $this->image, PDO::PARAM_STR);
        $query->bindValue(":link", $this->link, PDO::PARAM_STR);
        $query->bindValue(":date", $this->date, PDO::PARAM_STR);
        $query->bindValue(":id", $this->id, PDO::PARAM_INT);

        $query->execute();
    }

    //Fonction permettant de supprimer un article
    public function deleteArticle(): void {
        $sql = "DELETE FROM `articles` WHERE id=:id";
        $query = $this->db->prepare($sql);

        $query->bindValue(":id", $this->id, PDO::PARAM_INT);

        $query->execute();
    }

    //Fonction permettant de sauvegarder une image
    public function saveImage(): void {
        $sql = "INSERT INTO `articles`(`image`) VALUES (:image)";
        $query = $this->db->prepare($sql);

        $query->bindValue(":image", $this->image, PDO::PARAM_STR);

        $query->execute();
    }


}