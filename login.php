<?php
require_once ('lib/pdo.php');
require_once ('App/Users.php');

use App\Users\Users;

session_start();
require_once ('lib/security.php');

$messages = [];
$errors = [];

if(isset($_SESSION["user"])){
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
        try {
            $user = new Users($db);

            if($user->login($_POST["email"], $_POST["password"])){
                header("Location: index.php");
                exit;
            }
         else {
            die("Les identifiants ne sont pas valides");
        }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
}

 require_once ('templates/header.php');

?>
<div class="parallax-container">
    <div class="parallax-image-8"></div>
    <div class="parallax-text-3">
        <p>CONNEXION</p>
    </div>
</div>

<div class="formCenter mt-0">
    <form  method="post" action="login.php" class="formRegister">
        <div>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe">
        </div>
        <div class="formCenter mb-3">
            <?php addCSRFTokenToForm() ?>
            <button type="submit" class="btn-secondary px-5" value="Se connecter">Connexion</button>
        </div>
    </form>
</div>

<?php
require_once ('templates/footer.php');
?>