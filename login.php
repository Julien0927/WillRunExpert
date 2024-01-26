<?php
require_once ('lib/pdo.php');
require_once ('App/Users.php');

use App\Users\Users;

session_start();


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
        //On verifie que l'email est valide
       /*  if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            die("L'email n'est pas valide");
        }

        //On se connecte à la base de données
        require_once 'connect.php';

        $slq = "SELECT * FROM `users` WHERE email = :email";
        $query = $db->prepare($slq);
        $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();
        
        if($user){
            die("Identifiants invalides");
        }
        // Ici on a un user existant, on vérifie le mot de passe
        else{
            //On verifie le mot de passe
            if(!password_verify($_POST["password"], $user["password"])){
                die ("Identifiants invalides");
            }

            //Ici mot de passe et l'utilisateur sont valides
            //On va pouvoir connecter l'utilisateur
            //On démarre la session PHP
            session_start();

            //On stocke dans $_SESSION les informations de l'utilisateur
            $_SESSION["user"] = [
                "id" => $user["id"],
                "email" => $user["email"],
                "roles" => $user["roles"]
            ];
            //On peut rediriger l'utilisateur vers la page d'accueil
            header("Location: index.php");
            }
        }
}

 */

 require_once ('templates/header.php');

?>
<h2>Connexion</h2>
<div>
    <form  method="post" action="login.php">
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