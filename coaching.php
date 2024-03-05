<?php
require_once 'templates/header.php';
?>

<div class="parallax-container mb-0">
    <div class="parallax-image-4"></div>
    <div class="parallax-text-3">
        <p>MES FORMULES</p>
    </div>
</div>
<div>
    <h1 class="line mb-3">Le principe</h1> 
    <p class="text-center borderText mt-5 mb-3">
        Vous souhaitez vous lancer un objectif, que ce soit en termes de distance ou de performance ?<br>
    Je suis là pour vous accompagner tout au long de votre préparation !<br>
    Nous déterminons ensemble un plan d'entrainement individualisé pour réussir à atteindre votre objectif.<br>
    Je reste attentif à vos sensations après chaque séance afin d'adapter au mieux votre charge d'entrainement. L'enjeu ? Éviter les blessures !
    </p>
</div>
<div class="">
<h2 class="line2 mt-5">Suivi annuel</h2>
<div class="row d-flex justify-content-center gap-3 mt-5 mb-5">
        <div class="card m-0">
            <div class="card-body">
                <h3 class="card-title text-center">FORMULE ESSENTIEL</h3>
                <h3 class="card-text text-center">70€ / mois</h3>
            </div>
                <ul class="list-group list-group-flush services mb-5"></ul>
        </div>
        <div class="card m-0">
            <div class="card-body">
                <h3 class="card-title text-center">FORMULE PREMIUM</h3>
                <h3 class="card-text text-center">120€ / mois</h3>
            </div>
            <ul class="list-group list-group-flush servicesPremium"></ul>
        </div>
</div>
</div>

<div>
    <h2 class="line3 mb-3">Pour atteindre votre objectif</h2>
<div class="row d-flex justify-content-center gap-3 mt-5 mb-5">
    <div class="card m-0">
        <div class="card-body">
            <h3 class="card-title text-center">FORMULE SPRINT</h3>
            <h3 class="card-text text-center">3 mois</h3>
            <h3 class="card-text text-center">200€</h3>
        </div>
        <ul class="list-group list-group-flush services"></ul>
    </div>
    <div class="card m-0">
        <div class="card-body">
            <h3 class="card-title text-center">FORMULE ENDURANCE</h3>
            <h3 class="card-text text-center">6 mois</h3>
            <h3 class="card-text text-center">300€</h3>
        </div>
        <ul class="list-group list-group-flush services"></ul>
    </div>
</div>
</div>
<?php require_once ('templates/rdvVisio.php')?>


 <div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-12 d-flex flex-wrap justify-content-around square">
            <div class="p-2 text-center">
                <img src="assets/icones/black-gourou-75.png" class="mb-1" alt="plaisir bien-être" style="width: 50px; height: auto;">
                <h5>Bien-être</h5>
            </div>
            <div class="p-2 text-center">
                <img src="assets/icones/black-confiance-75.png" class="mb-1" alt="confiance" style="width: 50px; height: auto;">
                <h5>Confiance</h5>
            </div>
            <div class="p-2 text-center">
                <img src="assets/icones/black-experience-75.png" class="mb-1" alt="experience" style="width: 50px; height: auto;">
                <h5>Expérience</h5>
            </div>
            <div class="p-2 text-center">
                <img src="assets/icones/black-ecoute-75.png" class="mb-1" alt="ecoute" style="width: 50px; height: auto;">
                <h5>Ecoute</h5>
            </div>
            <div class="p-2 text-center">
                <img src="assets/icones/black-discipline-75.png" class="mb-1" alt="discipline" style="width: 50px; height: auto;">
                <h5>Discipline</h5>
            </div>
            <div class="p-2 text-center">
                <img src="assets/icones/black-prevention-75.png" class="mb-1" alt="prevention" style="width: 50px; height: auto;">
                <h5>Prévention</h5>
            </div>
        </div>
    </div>
</div>


<?php
/*require_once 'templates/carousel.php';*/
require_once 'templates/footer.php';
?>