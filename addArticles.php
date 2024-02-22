<?php
session_start();

require_once ('App/Articles.php');
require_once ('lib/pdo.php');
require_once ('lib/config.php');
require_once ('lib/tools.php');
require_once ('lib/security.php');


$messages = [];
$errors = [];
require_once ('templates/messages.php');

if(!empty($_POST)){
    if(isset($_POST["title"], $_POST["content"], $_POST["link"], $_POST["date"])
        && !empty($_POST["title"]) && !empty($_POST["content"]) && !empty($_POST["date"])){

        if (!empty($_FILES['image']['tmp_name'])) {
            $checkImage = getimagesize($_FILES['image']['tmp_name']);
            if ($checkImage !== false) {
                $rawFileName = $_FILES['image']['name'];
                $cleanedFileName = strip_tags($rawFileName);
                $fileName = uniqid() . '-' . slugify($cleanedFileName);
                move_uploaded_file($_FILES['image']['tmp_name'], _ARTICLES_IMG_PATH_ . $fileName);
                $imagePath = _ARTICLES_IMG_PATH_ . $fileName;
            } else {
                $errors[] = 'Le fichier doit être une image';
            }
        }

        $articles = new App\Articles\Articles($db);

        $_SESSION['messages'] = ["Votre article a bien été enregistré"];
        header("Location: addArticles.php");

        $articles->setTitle($_POST["title"]);
        $articles->setContent($_POST["content"]);
        $articles->setImage(isset($imagePath) ? $imagePath : null);
        $articles->setLink($_POST["link"]);
        $articles->setDate($_POST["date"]);
        $articles->addArticle();

        // Redirection ou affichage des messages ici
    } else {
        $_SESSION['errors']= ["Le formulaire est incomplet"];
    }
}

require_once ('templates/header.php');
?>

<h2>Ajouter un article</h2>

<div class="container col-md-6">
    <form method="POST" action="addArticles.php" enctype="multipart/form-data" >
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content">Texte</label>
            <textarea rows="6" class="form-control" placeholder="Contenu de l'article" name="content" id="content"></textarea>
        </div>    
<!--         <div class="mb-3">
            <label for="link">Lien</label>
            <input class="form-control" placeholder="Lien de l'article" name="link" id="link">
        </div>  
 -->        <div class="row mb-3">
                <div class="d-flex  justify-content-center  align-items-center gap-3">  
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" name="date" id="date">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
        </div>
        <div class="d-flex justify-content-center">
        <?php addCSRFTokenToForm() ?>
        <button type="submit" class="btn btn-secondary justify-content-center my-3" value="">Enregistrer</button>
        </div>
    </form>
</div>
<?php
require_once ('templates/footer.php');
?>