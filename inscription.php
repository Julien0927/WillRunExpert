<?php
//On démarre la session PHP
session_start();
if(!isset($_SESSION["user"])){
    header("Location: index.php");
    exit;
}
//On verifie si le formulaire est envoyé
if(!empty($_POST)){
    //Le formulaire a été envoyé
    //On verifie que tous les champs sont remplis
    if(isset($_POST["email"], $_POST["password"])
        && !empty($_POST["email"]) && !empty($_POST["password"])
    ){
        //Le formulaire est complet
        //On récupère les données en les protégeant
        $email = strip_tags($_POST["email"]);

        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            die("L'email n'est pas valide");
        }

        //On va hasher le mot de passe
        $password = password_hash($_POST["password"], PASSWORD_ARGON2ID);

        //Ajoutez ici tous les controles souhaités

        //On enregistre en base de donnees
        $query = $db->prepare("INSERT INTO `users`(email, password, roles) VALUES (:email, :password, '[\"ROLE_USER\",\"ROLE_ADMIN\"]')");
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->bindValue(":password", $password, PDO::PARAM_STR);

        $query->execute();

        //On recupere l'id de l'utilisateur
        $id = $db->lastInsertId();

        //On connectera l'utilisateur
        //On démarre la session PHP
        session_start();

        //On stocke dans $_SESSION les informations de l'utilisateur
        $_SESSION["user"] = [
            "id" => $id,
            "email" => $_POST["email"],
            "roles" => ["ROLE_USER", "ROLE_ADMIN"]
        ];

        //On peut rediriger l'utilisateur vers la page d'accueil
        header("Location: index.php");
        }
    }

    else{
        die("Le formulaire est incomplet");
    }

require_once ('templates/header.php');


?>

<h2>Inscription</h2>
<div>
    <form  method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Votre email">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Votre mot de passe">
        </div>
        <div>
            <button type="submit" value="Se connecter">Connexion</button>
        </div>
    </form>
</div>

<?php
require_once ('templates/footer.php');
?>