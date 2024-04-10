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
        <h1 class="mb-3">COACHING COURSE À PIED</h1>
<!--         <h4 class="center mb-3">ACCOMPAGNEMENT DU COUREUR - STRATÉGIE DE RÉCUPÉRATION</h4>-->
 </div>
<div class="parallax-container">
    <div class="parallax-image"></div>
    <div class="parallax-text">
        <p>Ne limite pas tes défis,<br>défis tes limites!</p>
    </div>
</div>
<section class="mb-5">
    <h2>Découvrez le Plaisir de Courir Sans Limites avec WillRunExpert</h2>
    <p class="textCenter mx-auto ms-5 fs-5">
        Tu as déjà tenté l'aventure de la course à pied, pourtant chaque pas t'a semblé être un défi insurmontable ? <br>
        Une blessure t'a découragé et tu penses que ce sport n'est pas fait pour toi ? ⛔<br>
        Avec WillRunExpert, je t'invite à redécouvrir le bonheur de courir. <br>
        En tant que kinésithérapeute spécialisé, ma mission est de te préparer pour la course sans douleur ni blessure.<br>
        Grâce à une planification d'entraînement progressive, spécialement conçue pour les coureurs débutants, <br>tu verras tes progrès chaque semaine, adoptant ainsi les bonnes pratiques et évitant les blessures courantes.<br>
        Alors, enfile vite tes chaussures et lance-toi dès aujourd'hui avec notre essai gratuit ! 🚀
    </p>
</section>
<section class="flex-column mb-5">
    
        <div class="col-md-6 mx-auto mb-3">
            <h2 class="textCenter">WillRunExpert : Ton Allié dans la Course à Pied</h2>
                <p class="textAlign">
                    Fort de 5 années d'expérience dans le domaine de la course à pied, 
                    j'ai accompagné près de 300 patients blessés. Grâce à cela j'ai développé une approche qui limite les blessures, 
                    spécialement adaptée aux coureurs débutants.
                </p>
        </div>
        <div class="col-md-6 mx-auto mt-4">
            <h2 class="textCenter">Des Offres de Coaching Personnalisées</h2>
                <p class="textAlign">
                    Je m'adapte à toi et à tes contraintes, conscients que chacun mène une vie personnelle et professionnelle bien remplie.
                </p>
        </div>
</section>
    <div class="row d-flex justify-content-center mb-5 mr-4">
        <div class="col-md-4">
            <img src="assets/images/photo2.webp" class="img-fluid imgAccueil ml-5" alt="Coureurs">
        </div>
        <div class="coachIndiv col-md-4">
            <h3 class="">Les Formules de Coaching</h3>
            <p class="textAlign">
                Découvre nos différentes formules de coaching, toutes conçues pour t'aider à atteindre tes objectifs en course à pied, 
                en évitant les blessures.<br>Tu les retrouveras en <a href="coaching.php" class="articleLink">cliquant ici</a>
            </p>
        </div>
    </div>

    <div class="row d-flex justify-content-center me-4 gap-5">
        <div class="consulting col-md-4 mb-5">
            <h3>Des Stages pour l'Excellence</h3>
                <p class="textAlign ms-4">
                    Participe à nos stages de cinq jours, alliant course à pied, nutrition et récupération, 
                    pour une expérience sportive inoubliable.<br>
                    <a href="stage.php" class="articleLink">En savoir plus</a>.
                </p>
            <!--<a href="coaching.php"><button class="btn-original" >En savoir plus</button></a>-->
        </div>
        <div class="col-md-4 mb-5">
            <img src="assets/images/photo1.webp" class="img-fluid imgAccueil2" alt="Coureurs">
        </div>
    </div>
    <div class="row d-flex justify-content-center mb-5 mr-4">
        <div class="col-md-4">
            <img src="assets/images/people.jpg" class="img-fluid imgAccueil ml-5" alt="Coureurs">
        </div>
        <div class="coachIndiv col-md-4">
            <h2 class="textCenter">Des Programmes de Coaching Adaptés à Toi</h2>
                <p class="textAlign">
                    Nos programmes sur-mesure s'adaptent à tes besoins et à tes objectifs pour t'accompagner vers le succès sportif, sans risque de douleurs ni de blessures.
                    Rejoins-moi dès maintenant et ensemble, faisons de la course à pied une expérience enrichissante et sans limites !
                </p>
        </div>
    </div>

    <?php require_once ('templates/registerNewsletter.php'); ?>

<div class="parallax-container">
        <div class="parallax-image-2"></div>
</div>

<?php
require_once 'templates/footer.php';
?>