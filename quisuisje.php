<?php
require_once 'templates/header.php';
?>
<div class="parallax-container">
    <div class="parallax-image-3"></div>
    <div class="parallax-text-3">
        <p>QUI SUIS-JE ?</p>
    </div>
</div>
<div class="container">
  <h1 class="center mb-3">Willy BIDAULT</h1>
  <p class="text-center mb-5 lh-base">
    Diplômé depuis 2013 et installé en 2019 au centre médico-sportif de La Rochelle.<br> 
    Je travaille en étroite collaboration avec les médecins du sport, podologues, ostéopathes et chirurgiens.<br>
    Je travaille parallèlement au Stade Rochelais depuis la saison 2021-2022, ce qui m'a permis de participer aux deux titres de Champions d'Europe.
</p>
  <div class="profil row d-flex justify-content-center mb-5">
      <div class="photo col-md-5">
          <img class="shadow" src="assets/images/photo.webp" alt="Willy Bidault">
      </div>
      <div class="col-md-7 flex-column">
          <h3 class="formation mx-auto">Diplômes</h3>
          <ul class="my-5" style="list-style-type: none" id="diplomes"></ul>

          <h3 class="formation mx-auto">Formations</h3>
          <ul class="my-5" style="list-style-type: none" id="formations"></ul>

      </div>
    </div>
  </div>
<!-- <div class="container">
  <h3 class="formation d-flex justify-content-center mx-auto mt-5 mb-3">Expériences</h3>
  <p class="mb-5 lh-base">
    Diplômé depuis 2013 et installé en 2019 au centre médico-sportif de La Rochelle.<br> 
    Je travaille en étroite collaboration avec les médecins du sport, podologues, ostéopathes et chirurgiens.<br>
    Je travaille parallèlement au Stade Rochelais depuis la saison 2021-2022, ce qui m'a permis de participer aux deux titres de Champions d'Europe.
</p>

</div>
 --><?php require_once ('templates/rdvVisio.php')?>

<div class="d-flex justify-content-center">
  <img src="assets/images/logo2.png" alt="logo WillRunExpert">
</div>
<?php
require_once 'templates/footer.php';
?>