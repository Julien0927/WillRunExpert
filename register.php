<?php
//On démarre la session PHP
//session_start();
//if(!isset($_SESSION["user"])){
    //header("Location: index.php");
    //exit;
//}
//On verifie si le formulaire est envoyé

        //Le formulaire est complet
        //On récupère les données en les protégeant

        //if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        //    die("L'email n'est pas valide");
        //}

        //On va hasher le mot de passe
        //$password = password_hash($_POST["password"], PASSWORD_ARGON2ID);

        //Ajoutez ici tous les controles souhaités

        //On enregistre en base de donnees
        //$query = $db->prepare("INSERT INTO `users`(email, password, roles) VALUES (:email, :password, '[\"ROLE_USER\",\"ROLE_ADMIN\"]')");
        //$query->bindValue(":email", $email, PDO::PARAM_STR);
        //$query->bindValue(":password", $password, PDO::PARAM_STR);

        //$query->execute();

        //On recupere l'id de l'utilisateur
        //$id = $db->lastInsertId();

        //On connectera l'utilisateur
        //On démarre la session PHP
        //session_start();

        //On stocke dans $_SESSION les informations de l'utilisateur
        //$_SESSION["user"] = [
            //"id" => $id,
            //"email" => $_POST["email"],
            //"roles" => ["ROLE_USER", "ROLE_ADMIN"]
        //];

        //On peut rediriger l'utilisateur vers la page d'accueil
        //header("Location: index.php");
        //}
    

    //else{
    //    die("Le formulaire est incomplet");
    //}
//}

require_once ('templates/header.php');
require_once ('lib/pdo.php');
require_once ('App/users.php');

$messages = [];
$errors = [];

if(!empty($_POST)){
    //Le formulaire a été envoyé
    //On verifie que tous les champs sont remplis
    if(isset($_POST["firstName"], $_POST["lastName"],$_POST["email"], $_POST["password"])
        && !empty($_POST["firstName"]) && !empty($_POST["lastName"]) && !empty($_POST["email"]) && !empty($_POST["password"])
    ){

$user = new App\Users\Users($db);

$user->setFirstName(strip_tags($_POST["firstName"]));
$user->setLastName(strip_tags($_POST["lastName"]));
$user->setEmail(strip_tags($_POST["email"]));
$user->setPassword($_POST["password"]);
$user->setRole(App\Users\Users::ROLE_ADMIN);

$user->register();

 $messages[]="L'utilisateur a bien été enregistré";
 header('location: index.php');
}
else{
    $errors[]= "Le formulaire est incomplet";
}
}

?>

<h2>Inscription</h2>
<div>
    <?php require_once ('templates/messages.php'); ?>

    <form  method="POST" action="register.php" class="formRegister">
        <div class="mb-3">
            <label for="firstName" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Votre prénom">
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Votre nom">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn-secondary px-5" value="S'inscrire">S'inscrire</button>
        </div>
    </form>
</div>

<?php
require_once ('templates/footer.php');
?>