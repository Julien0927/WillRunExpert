<?php
require_once ('lib/config.php');
$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="WillRunExpert - Coach individuel running - courses">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style.scss" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="assets/js/script.js" defer></script>
        <title>WillRunExpert - Officiel</title>
    </head>
<body>
  <header class="navbar" >
    <div class="d-flex col-md-3">
      <a href="index.php"><img class="logo" src="assets/images/logo2.png" alt="Coaching individuel"></a>
    </div>
          <nav class="d-flex navbar navbar-expand-lg mx-auto ">
              <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="custom navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav link-offset-3">
                  <?php foreach ($menu as $key => $value) { ?>
                    <li class="nav-item <?php echo ($currentPage === $key) ? 'active' : ''; ?>">
                        <a href="<?= $key; ?>" class="nav-link"><?= $value; ?></a>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
            </nav>
            <div>
              <a class="nav-link" href="connexion.php" >
                <img src="assets/icones/cadenas-orange-24.png" class="mx-5"/>
              </a>
            </div>
  </header>