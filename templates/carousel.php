<?php
require_once 'templates/header.php';
?>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Première card -->
        <div class="carousel-item active">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h3 class="card-title text-center">COACHING ANNUEL</h3>
                    <p class="card-text text-center">Formule Premium</p>
                </div>
                <ul class="list-group list-group-flush text-center" id="services">
                    <!-- Ajoutez ici les éléments de votre liste -->
                </ul>
                <h3 class="mt-3">Tarif carousel?</h3>
            </div>
        </div>

        <!-- Deuxième card (et ainsi de suite) -->
        <div class="carousel-item">
            <div class="card" style="width: 40rem;">
            <div class="card-body">
                    <h3 class="card-title text-center">COACHING ANNUEL</h3>
                    <p class="card-text text-center">Formule Premium</p>
                </div>
                <ul class="list-group list-group-flush text-center" id="services">
                    <!-- Ajoutez ici les éléments de votre liste -->
                </ul>
                <h3 class="mt-3">Tarif carousel?</h3>

                <!-- Contenu de votre deuxième card -->
            </div>
        </div>
        <div class="carousel-item">
            <div class="card" style="width: 40rem;">
            <div class="card-body">
                    <h3 class="card-title text-center">COACHING ANNUEL</h3>
                    <p class="card-text text-center">Formule Premium</p>
                </div>
                <ul class="list-group list-group-flush text-center" id="services">
                    <!-- Ajoutez ici les éléments de votre liste -->
                </ul>
                <h3 class="mt-3">Tarif carousel?</h3>

                <!-- Contenu de votre deuxième card -->
            </div>
        </div>

        <!-- Ajoutez d'autres items de carousel au besoin -->

    </div>

    <!-- Contrôles du carousel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
