<?php

require_once ('templates/header.php');
require_once ('lib/pdo.php');
require_once ('App/Users.php');
require_once ('lib/security.php');

$messages = [];
$errors = [];

if(!empty($_POST)){
    //Le formulaire a été envoyé
    //On verifie que tous les champs sont remplis
    if(isset($_POST["firstName"], $_POST["lastName"],$_POST["email"], $_POST["password"])
        && !empty($_POST["firstName"]) && !empty($_POST["lastName"]) && !empty($_POST["email"]) && !empty($_POST["password"])
    ){
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'adresse email n'est pas valide.";
        } else {
            // Nettoyer les entrées
            $firstName = filter_var($_POST["firstName"]);
            $lastName = filter_var($_POST["lastName"]);
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $password = $_POST["password"]; 


$user = new App\Users\Users($db);

$user->setFirstName(strip_tags($_POST["firstName"]));
$user->setLastName(strip_tags($_POST["lastName"]));
$user->setEmail(strip_tags($_POST["email"]));
$user->setPassword($_POST["password"]);
$user->setRole(App\Users\Users::ROLE_ADMIN);

$user->register();

 $messages[]="Votre inscription a bien été enregistrée";
 header('location: index.php');
    exit();
}
}else{
    $errors[]= "Le formulaire est incomplet";
}
}

?>
<div class="parallax-container">
    <div class="parallax-image-7"></div>
    <div class="parallax-text-3">
        <p>INSCRIPTION</p>
    </div>
</div>
<div class="formCenter">
    <?php require_once ('templates/messages.php'); ?>

    <form  method="POST" action="register.php" class="formRegister">
        <div class="mb-3">
            <label for="firstName" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Votre prénom" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Votre nom" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe" required>
        </div>
        
        <p><!--<input type="checkbox" id="cgu" name="cgu" required class="me-2">-->En utilisant ce formulaire, vous acceptez que nous stockions vos données sur ce site web.</p>
        <div class="formCenter mb-3">
        <?php addCSRFTokenToForm() ?>
            <button type="submit" class="btn-secondary px-5" value="S'inscrire">S'inscrire</button>
        </div>
    </form>
</div>

<?php
require_once ('templates/footer.php');
?>