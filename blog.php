<?php
require_once ('lib/pdo.php');
require_once ('templates/header.php');
require_once ('App/Articles.php');

$articles = new App\Articles\Articles($db);

$allArticles = $articles->getAllArticles();

require_once 'templates/header.php';

$pageActuelle = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$totalPages = $articles->getTotalPages();
$articlesPageActuelle = $articles->getArticlesByPage($pageActuelle);

 ?>

<div class="parallax-container">
    <div class="parallax-image-6"></div>
    <div class="parallax-text-3">
        <p>BLOG</p>
    </div>
</div>

<div class="row mb-2" style="margin-left: 50px; margin-right: 50px;">

  <?php foreach ($articlesPageActuelle as $article) { 
    
    include 'templates/partial_article.php';
  } 

  // Génération des liens de pagination
    echo '<nav aria-label="Page navigation example"><ul class="pagination">';
    for ($i = 1; $i <= $totalPages; $i++) {
        $active = $pageActuelle == $i ? 'active' : '';
        echo "<li class='page-item $active'><a class='page-link' href='?page=$i'>$i</a></li>";
    }
    echo '</ul></nav>';

   ?>

</div>
<?php

require_once 'templates/footer.php';