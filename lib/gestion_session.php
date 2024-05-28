<?php
require_once ('lib/config.php');

$linkClass = ($currentPage == 'index.php') ? 'home-page-link' : 'other-page-link';

if (isset($_SESSION['user']) && ($_SESSION['user']['role'] === 'ROLE_ADMIN')) {
    ?>
    <ul class="default-menu">
        <?php foreach ($admin as $key => $value) { ?>
            <li class="nav-item <?php echo ($currentPage === $key) ? 'active' : ''; ?>">
                <a href="<?= $key; ?>" class="nav-link" <?= $linkClass; ?>>
                <?php if (isset($value['icon'])): ?>
                    <img src="<?= $value['icon']; ?>" alt="<?= $value['label']; ?> Accueil" >
                <?php endif; ?>
                <?= $value['label']; ?>
                </a>
            </li>
        <?php } ?>
    </ul>
    <ul class="responsive-menu">
    <?php foreach ($adminResponsive as $key => $value) { ?>
            <li class="nav-item <?php echo ($currentPage === $key) ? 'active' : ''; ?>">
                <a href="<?= $key; ?>" class="nav-link" <?= $linkClass; ?>>
                <?php if (isset($value['icon'])): ?>
                    <img src="<?= $value['icon']; ?>" alt="<?= $value['label']; ?> Accueil" >
                <?php endif; ?>
                <?= $value['label']; ?>
                </a>
            </li>
        <?php } ?>
    <?php } 
        if (!isset($_SESSION['user'])) {
            ?>
        <ul class="default-menu"> 
            <?php  
            foreach ($menu as $key => $value) { ?>
                <li class="nav-item <?php echo ($currentPage === $key) ? 'active' : ''; ?>">
                    <a href="<?= $key; ?>" class="nav-link <?= $linkClass; ?>">
                    <?php if (isset($value['icon'])): ?>
                        <img src="<?= $value['icon']; ?>" alt="<?= $value['label']; ?> Accueil">
                    <?php endif; ?>
                    <?= $value['label']; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <ul class="responsive-menu">
        <?php foreach ($menuResponsive as $key => $value) { ?>
                <li class="nav-item <?php echo ($currentPage === $key) ? 'active' : ''; ?>">
                    <a href="<?= $key; ?>" class="nav-link <?= $linkClass; ?>">
                    <?php if (isset($value['icon'])): ?>
                        <img src="<?= $value['icon']; ?>" alt="<?= $value['label']; ?> Accueil">
                    <?php endif; ?>
                    <?= $value['label']; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <?php } ?>

