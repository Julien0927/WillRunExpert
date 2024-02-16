<?php
session_start();

require_once ('App/Articles.php');
require_once ('lib/pdo.php');

$messages = [];
$errors = [];


$articles = new App\Articles\Articles($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteArticle'])) {
    foreach ($_POST['articleBox'] as $idToDelete) {
        $articles->setId($idToDelete);
        $articles->deleteArticle();
    }
    if (count($_POST['articleBox']) > 1) {

        $_SESSION['messages'] = ["Les articles ont bien été supprimés"];
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $_SESSION['messages'] = ["L'article a bien été supprimé"];
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;

    }
}

$allArticles = $articles->getAllArticles();
require_once ('templates/messages.php');

require_once ('templates/header.php');
?>

<h2>Liste des articles</h2>
<form method="POST">
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="">
                <table class="table table-striped table-responsive text-center nowrap">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Lien</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allArticles as $article) { ?>
                        <tr class="text-start">
                            <td><?=($article["date"])?></td>
                            <td><?=($article["title"])?></td>
                            <td><?=($article["content"])?></td>
                            <td><?=($article["link"])?></td>
                            <td class="text-center"><img src="<?=($article["image"])?>" style="width:10%; height:10%"></td>
                            <td><input type="checkbox" name="articleBox[]" value="<?= $article['id'] ?>"></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-flex justify-content-end">
            <div class=" my-3">
                <a href="addArticles.php" class="btn btn-secondary">Ajouter un article</button></a>
                <button type="submit" class="btn btn-original" name="deleteArticle">Supprimer</button>
            </div>
        </div>
    </div>
</div>
</form>
<?php
require_once ('templates/footer.php');
?>