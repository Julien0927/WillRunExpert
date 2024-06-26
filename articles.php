<?php
ob_start();
session_start();

$messages = [];
$errors = [];
require_once ('templates/header.php');
/*require_once ('lib/gestion_session.php'); // Assure la gestion des sessions et des rôles
 */
// Vérifier que l'utilisateur est un administrateur
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'ROLE_ADMIN') {
    $_SESSION['errors'] = ["Accès refusé. Vous devez être administrateur pour accéder à cette page."]; // Stocker le message
    header('Location: login.php'); // Rediriger vers la page de connexion
    exit;
}

require_once ('App/Articles.php');
require_once ('lib/pdo.php');



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
?>

<h2>Liste des articles</h2>
<form method="POST">
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="table-responsive-sm">
                <table class="table table-striped table-responsive text-center nowrap">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Titre</th>
                            <th class="d-none d-md-table-cell">Contenu</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allArticles as $article) { ?>
                        <tr class="allArticles text-start">
                            <td><?=($article["date"])?></td>
                            <td><?=($article["title"])?></td>
                            <td class="content d-none d-md-table-cell"><?=($article["content"])?></td>
                            <td class="text-center"><img src="<?=($article["image"])?>" class="imgArticle"></td>
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