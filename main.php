<?php
require_once ('templates/header.php');
require_once ('App/Users.php');
require_once ('lib/security.php');

$messages = [];
$errors = [];

if(!empty($_POST)){
    //Le formulaire a été envoyé
    //On verifie que tous les champs sont remplis
    if(isset($_POST["email"])&& !empty($_POST["email"])){
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'adresse email n'est pas valide.";
        } else {
            // Nettoyer les entrées
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);


$user = new App\Users\Users($db);

$user->setEmail(strip_tags($_POST["email"]));

$user->registerNewsletter();

 $messages[]="Votre inscription a bien été enregistrée";
}
}else{
    $errors[]= "Le formulaire est incomplet";
}
}


  if(isset($_SESSION['user']) && $_SESSION['user']['role'] === 'ROLE_ADMIN'){?>
    <div class="session-effect">
      <div class="item">
      <h5 class="text-center">Bonjour Willy.</h5>
      </div>
    </div>
  <?php } ?>
  
  <?php foreach($messages as $message) {?>
    <div class="alert alert-success">
        <?=$message;?>
    </div>
<?php } ?>
<?php foreach($errors as $error) {?>
    <div class="alert alert-danger">
        <?=$error;?>
    </div>
<?php 
} ?>


<div class="center">
        <h2 class="mb-3">COACHING COURSE À PIED</h2>
        <h4 class="center mb-3">ACCOMPAGNEMENT DU COUREUR - STRATÉGIE DE RÉCUPÉRATION</h4>
</div>
<div class="parallax-container">
    <div class="parallax-image"></div>
    <div class="parallax-text">
        <p>Ne limite pas tes défis,<br>défis tes limites!</p>
    </div>
</div>

    <div class="row d-flex justify-content-center mb-5 mr-4">
        <div class="col-md-4">
            <img src="assets/images/photo2.webp" class="img-fluid imgAccueil ml-5" alt="Coureurs">
        </div>
        <div class="coachIndiv col-md-4">
            <h2 class="">COACHING INDIVIDUEL</h2>
            <p class="" style="text-align: justify">
                Au-delà d'un simple programme d'entraînement, 
                je vous propose un suivi sportif complet pour vous accompagner vers vos objectifs 
                en tenant compte de tous les éléments influant sur la performance. 
                Peu importe votre niveau initial et vos contraintes, 
                l'objectif du suivi personnalisé est de vous aider à concilier la pratique avec
                vos obligations professionnelles et familiales. 
                
            </p>
            <a href="coaching.php"><button class="btn-original" >En savoir plus</button></a>
        </div>
    </div>

    <div class="row d-flex justify-content-center me-4 gap-5">
        <div class="consulting col-md-4">
            <h2 class="">CONSULTING</h2>
            <p class="ms-3" style="text-align: justify">
                Au-delà d'un simple programme d'entraînement, 
                je vous propose un suivi sportif complet pour vous accompagner vers vos objectifs 
                en tenant compte de tous les éléments influant sur la performance. 
                Peu importe votre niveau initial et vos contraintes, 
                l'objectif du suivi personnalisé est de vous aider à concilier la pratique avec
                vos obligations professionnelles et familiales. 
                Ainsi, vous optimisez l'efficacité de votre temps d'entraînement et la qualité 
                de vos séances, permettant une amélioration de vos performances sans 
                compromettre votre qualité de vie.
            </p>
            <a href="coaching.php"><button class="btn-original" >En savoir plus</button></a>
        </div>
        <div class="col-md-4 mb-5">
            <img src="assets/images/photo1.webp" class="img-fluid imgAccueil2" alt="Coureurs">
        </div>
    </div>

    <?php require_once ('templates/registerNewsletter.php'); ?>

<div class="parallax-container">
        <div class="parallax-image-2"></div>
</div>

<?php
require_once 'templates/footer.php';
?>