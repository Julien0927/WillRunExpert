
    
<div class="d-flex justify-content-evenly col-md-4 mb-5">
    <div class="card-blog" style="width: 25rem;">
      <img src="<?=($article["image"]) ?>" class="card-img-top imgBlog" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=($article["title"])?></h5>
        <p class="card-text-date ms-2"><?=($article["date"])?></p>
        <p class="card-text-blog ms-2" ><?=($article["content"])?></p>
        <button type="button" class="btn btn-original btn-fixed" data-bs-toggle="modal" data-bs-target="#staticBackdrop-<?=($article["id"])?>">
          Lire plus...
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop-<?=($article["id"])?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel-<?=($article["id"])?>"><?=($article["title"])?></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <p class="ms-3"><?=($article["date"])?></p>
        <div class="modal-body">
          <img src="<?=($article['image'])?>" class="imgModal" alt="">
        <?php
        
        $fullArticle = $articles->getArticleById($article['id']);
        echo $fullArticle['content']; // Affiche le contenu complet
        ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary px-5" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
</div>

      </div>
    </div>
</div>
