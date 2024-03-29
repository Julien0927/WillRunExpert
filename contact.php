<?php
require_once 'templates/header.php';
?>

<div class="parallax-container">
    <div class="parallax-image-5"></div>
    <div class="parallax-text-3">
        <p>CONTACT</p>
    </div>
</div>
<div>
    <div>
        <h2 class="center contact mx-auto mb-5 ">COORDONNÉES</h2>
    </div>
    <div class="row d-flex mb-5">
        <div class="map col-md-6 d-flex align-items-center justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2763.5462512732283!2d-1.1951303000000002!3d46.1597809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480154882c48e5bd%3A0x36848a1c01391562!2sBidault%20Willy!5e0!3m2!1sfr!2sfr!4v1705768824852!5m2!1sfr!2sfr" width="400" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6 d-flex mx-auto">
            <div class="d-flex flex-column">
                <h2 class="text-center mb-4">Willy BIDAULT</h2>
                <ul style="list-style: none">
                    <li class="mb-4"><img src="assets/icones/instagram-24.png" alt="@willrunexpert" class="me-3">@willrunexpert</li>
                    <li class="mb-4"><img src="assets/icones/email-24.png" alt="email" class="me-3">willy.physio@gmail.com</li>
                    <li class="mb-4"><img src="assets/icones/localisation-24.png" alt="localisation" class="me-3">Rue des Trois Frères Bât. C, 17000 La Rochelle</li>
                    <li class="mb-4"><img src="assets/icones/phone-24.png" alt="telephone" class="me-3">06 09 33 00 93</li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <h2 class="rdv center contact mx-auto mt-5 mb-5 ">PRISE DE RENDEZ-VOUS</h2>
    </div>
    <div class="d-flex flex-column justify-content-center text-center gap-2">
        <div class="items-start">
            <img src="assets/icones/utilisateur-24.png" alt="Patient">
            Accepte les nouveaux patients sur Doctolib
        </div>
        <div class="items-start">
            <img src="assets/icones/marqueur-24.png" alt="localisation">
            Cabinet de kinésithérapie IR2S - La Rochelle<br> rue des Trois Frères 17000 La Rochelle
        </div>
    </div>
    <?php require_once ('templates/rdvVisio.php')?>
</div>

<?php
require_once 'templates/footer.php';
?>