<?php
require_once ('lib/pdo.php');
require_once ('templates/header.php');
require_once ('App/Articles.php');

$articles = new App\Articles\Articles($db);

$allArticles = $articles->getAllArticles();

require_once 'templates/header.php';
?>

<div class="parallax-container">
    <div class="parallax-image-6"></div>
    <div class="parallax-text-3">
        <p>BLOG</p>
    </div>
</div>

<div class="row mb-2" style="margin-left: 50px; margin-right: 50px;">

<?php foreach ($allArticles as $article) { 
  
  include 'templates/partial_article.php';
} ?>

</div>
<?php

require_once 'templates/footer.php';