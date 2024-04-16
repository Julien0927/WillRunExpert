<?php
ob_start();
require_once ('templates/header.php');
require_once ('lib/pdo.php');
require_once ('App/FormContact.php');
require_once ('lib/security.php');

$messages = [];
$errors = [];

if(!empty($_POST)){
    if(isset($_POST["firstName"], $_POST["lastName"],$_POST["email"], $_POST["phone"], $_POST["ask"], $_POST["situation"])
        && !empty($_POST["firstName"]) && !empty($_POST["lastName"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["ask"]) && !empty($_POST["situation"])
    ){
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'adresse email n'est pas valide.";
        } else {
            // Nettoyer les entrées
            $firstName = filter_var($_POST["firstName"]);
            $lastName = filter_var($_POST["lastName"]);
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $phone = $_POST["phone"]; 
            $ask = $_POST["ask"];
            $situation = $_POST["situation"];


$user = new App\FormContact\FormContact($db);

$user->setFirstName(strip_tags($_POST["firstName"]));
$user->setLastName(strip_tags($_POST["lastName"]));
$user->setEmail(strip_tags($_POST["email"]));
$user->setPhone($_POST["phone"]);
$user->setAsk($_POST["ask"]);
$user->setSituation($_POST["situation"]);

$user->formRegister();

 $_SESSION['messages'][]="Votre demande a bien été envoyée";
    header('location: contact.php');
        exit();

}
}else{
    $errors[]= "Le formulaire est incomplet";
}
}
?>

   <form  method="POST" action="form.php" class="formRegister">
        <div class="row center">
            <div class="col-md-4">
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
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="phone" class="form-control" name="phone" id="phone" placeholder="Votre numéro de téléphone" required>
                </div>
            </div>
            <div class="col-md-4 me-3">
                 <div class="mb-3">
                    <label for="ask" class="form-label">Nature de votre demande</label>
                    <textarea class="form-control" name="ask" id="ask" placeholder="Nature de votre demande" rows="3" required></textarea>
                 </div>
                 <div class="mb-3">
                    <label for="situation" class="form-label">Votre situation</label>
                    <textarea class="form-control" name="situation" id="situation" placeholder="Description de votre situation" rows="6" required></textarea>
                 </div>
            </div>
        </div>
        <p class="center">En utilisant ce formulaire, vous acceptez que nous stockions vos données sur ce site web.</p>
        <div class="formCenter mb-5">
        <?php addCSRFTokenToForm() ?>
            <button type="submit" class="btn-secondary px-5" value="S'inscrire">Envoyer</button>
        </div>
    </form>

<?php
ob_end_flush();
?>