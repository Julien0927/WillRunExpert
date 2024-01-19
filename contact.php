<?php
require_once 'templates/header.php';
?>
<div>
    <form method="post">
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" placeholder="Votre nom">
        </div>
        <div>
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" placeholder="Votre prénom">
        </div>
        <div>
            <label for="phone">Téléphone</label>
            <input type="tel" name="phone" id="phone" placeholder="Votre téléphone">            
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Votre email">
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
</div>

<?php
require_once 'templates/footer.php';
?>