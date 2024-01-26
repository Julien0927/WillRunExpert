<?php
require_once ('lib/config.php');

if (isset($_SESSION['user'])) {
    ?>
        <?php foreach ($admin as $key => $value) { ?>
            <li class="nav-item <?php echo ($currentPage === $key) ? 'active' : ''; ?>">
                <a href="<?= $key; ?>" class="nav-link"><?= $value; ?></a>
            </li>
        <?php } ?>
    <?php } else {
        foreach ($menu as $key => $value) { ?>
            <li class="nav-item <?php echo ($currentPage === $key) ? 'active' : ''; ?>">
                <a href="<?= $key; ?>" class="nav-link"><?= $value; ?></a>
            </li><?php } 
            ?>
        <?php } ?>

