<?php foreach($messages as $message) {?>
        <div class="alert alert-success">
            <?= $message ?>
        </div>
    <?php } ?>
    <?php foreach($errors as $error) {?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php } ?>