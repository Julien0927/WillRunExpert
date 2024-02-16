<?php
require_once ('lib/pdo.php');
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

<?php foreach ($allArticles as $article) { ?>
<div class="row d-flex justify-content-center mb-2">
    <div class="col-md-8">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0"><?=($article["title"])?></h3>
          <div class="mb-1 text-body-secondary"><?=($article["date"])?></div>
          <p class="card-text-blog mb-auto"><?=($article["content"])?></p>
          <a href="<?=($article["link"])?>" class="icon-link gap-1 icon-link-hover stretched-link mt-2 mx-auto">
            Lire plus...
          </a>
          <div class="mx-auto"><a href=""><img src="/assets/icones/arrow-24.png" alt=""></a></div>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="<?=($article["image"]) ?>" class="imgBlog" alt="Image">
          <!--<svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
        </div>
      </div>
    </div>
</div>
<?php } ?>
<?php
require_once 'templates/footer.php';
?>