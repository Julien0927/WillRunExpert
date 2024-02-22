<?php
require_once 'templates/header.php';
?>

<div class="parallax-container mb-0">
    <div class="parallax-image-4"></div>
    <div class="parallax-text-3">
        <p>MES FORMULES</p>
    </div>
</div>
<!--  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
        <div class="carousel-inner">
            <div class="carousel-item active">-->                
<!--             </div>
    </div>
    
    <div class="carousel-item">-->  
    <h1 class="line mb-3">Le principe</h1> 
    <p class="text-center borderText mt-5 mb-3">
        Vous souhaitez vous lancer un objectif, que ce soit en termes de distance ou de performance ?<br>
    Je suis là pour vous accompagner tout au long de votre préparation !<br>
    Nous déterminons ensemble un plan d'entrainement individualisé pour réussir à atteindre votre objectif.<br>
    Je reste attentif à vos sensations après chaque séance afin d'adapter au mieux votre charge d'entrainement. L'enjeu ? Éviter les blessures !
    </p>

<h2 class="line2 mt-5">Suivi annuel</h2>
<div class="row d-flex justify-content-center gap-3 mt-5 mb-5">
        <div class="card m-0" style="width: 25rem;">
            <div class="card-body">
                <h3 class="card-title text-center">FORMULE ESSENTIEL</h3>
                <h3 class="card-text text-center">70€ / mois</h3>
            </div>
                <ul class="list-group list-group-flush services mb-5"></ul>
        </div>
        <div class="card m-0" style="width: 25rem;">
            <div class="card-body">
                <h3 class="card-title text-center">FORMULE PREMIUM</h3>
                <h3 class="card-text text-center">120€ / mois</h3>
            </div>
            <ul class="list-group list-group-flush servicesPremium"></ul>
        </div>
</div>
    <h2 class="line3 mb-3">Pour atteindre votre objectif</h2>
<div class="row d-flex justify-content-center gap-3 mt-5 mb-5">
    <div class="card m-0" style="width: 25rem;">
        <div class="card-body">
            <h3 class="card-title text-center">FORMULE SPRINT</h3>
            <h3 class="card-text text-center">3 mois</h3>
            <h3 class="card-text text-center">200€</h3>
        </div>
        <ul class="list-group list-group-flush services"></ul>
    </div>
    <div class="card m-0" style="width: 25rem;">
        <div class="card-body">
            <h3 class="card-title text-center">FORMULE ENDURANCE</h3>
            <h3 class="card-text text-center">6 mois</h3>
            <h3 class="card-text text-center">300€</h3>
        </div>
        <ul class="list-group list-group-flush services"></ul>
    </div>

</div>



<!--       <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 -->
<!-- <div class="container">-->
<?php require_once ('templates/rdvVisio.php')?>

<div class="container-fluid mt-5">
    <div class="row justify-content-center mb-5">
        <div class="d-flex justify-content-center gap-5 col-md-12 col-sm-6 square">
            <div class="flex-column text-center">
                <img src="assets/icones/black-gourou-75.png" class="mb-2" alt="plaisir bien-être">
                <h4>Bien-être</h4>
            </div>
            <div class="flex-column text-center">
                <img src="assets/icones/black-confiance-75.png" class="mb-2" alt="confiance">
                <h4>Confiance</h4>
            </div>
            <div class="flex-column text-center">
                <img src="assets/icones/black-experience-75.png" class="mb-2" alt="experience">
                <h4>Expérience</h4>
            </div>
            <div class="flex-column text-center">
                <img src="assets/icones/black-ecoute-75.png" class="mb-2" alt="ecoute">
                <h4>Ecoute</h4>
            </div>
            <div class="flex-column text-center">
                <img src="assets/icones/black-discipline-75.png" class="mb-2" alt="discipline">
                <h4>Discipline</h4>
            </div>
            <div class="flex-column text-center">
                <img src="assets/icones/black-prevention-75.png" class="mb-2" alt="prevention">
                <h4>Prévention</h4>
            </div>
        </div>
    </div>
</div>


<?php
/*require_once 'templates/carousel.php';*/
require_once 'templates/footer.php';
?>