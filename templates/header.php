<?php
require_once ('lib/config.php');
require_once ('lib/pdo.php');
require_once ('App/Users.php');
require_once ('lib/session.php');

$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=
          " Coaching course à pied : accompagnement du coureur par un expert kinésithérapeute, 
          spécialisé dans l’accompagnement des débutants. Limite les blessures et prends du plaisir à courir ! 
          ">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style.scss" rel="stylesheet">
        <link href="assets/images/logo2.png" rel="icon">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="assets/js/script.js" defer></script>
        <title>WillRunExpert - Officiel</title>
        <!-- Google Tag Manager -->
        <script>
          (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
          'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-WR9Z2FQT');
        </script>
        <!-- End Google Tag Manager -->
    </head>
<body>
<!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WR9Z2FQT"
    height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
  </noscript>
<!-- End Google Tag Manager (noscript) -->
  <header class="navbar" >
    <div class="d-flex col-md-3">
      <a class="logo-link" href="index.php"><img class="logo" src="assets/images/logo2.png" alt="logo WillRunExpert"></a>
    </div>
          <nav class="navbar navbar-expand-lg ms-auto ">
              <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                  <button class="custom navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav link-offset-3">
                    <?php require_once ('lib/gestion_session.php') ?>
                    <?php
                    if(isset($_SESSION['user'])){?>
                      <a class="btn btn-original me-5" href="logout.php">Se déconnecter</a>
                      <?php } else { ?>
                        <a class="nav-link" href="login.php" >
                          <img src="assets/icones/cadenas-orange-24.png" class="mx-5" alt="connexion"/>
                        </a>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </nav>
  </header>