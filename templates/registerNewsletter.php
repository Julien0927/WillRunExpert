<?php 

require_once ('lib/pdo.php');
require_once ('App/Users.php');
require_once ('lib/security.php');

?>

<form method="POST">
    <div class="register col-sm-4 mx-auto mt-5">
            <h3>reçois mes conseils</h3>
            <div class="input-group mb-5 mt-3">
                <input type="mail" class="form-control" name="email" placeholder="Ton Email" aria-label="Ton Email" aria-describedby="button-addon2">
                <?php addCSRFTokenToForm(); ?>
                <button class="btn btn-tertiary" type="submit" id="button-addon2">S'INSCRIRE</button>
                <p>En utilisant ce formulaire, vous acceptez que nous stockions vos données sur ce site web.</p>
            </div>
        </div>
</form>
