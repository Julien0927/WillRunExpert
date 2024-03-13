<?php
session_start();

require_once ('App/Newsletter.php');
require_once ('lib/pdo.php');

$messages = [];
$errors = [];

$newsletters = new App\Newsletter\Newsletter($db);


$allNewsletters = $newsletters->getAllEmails();


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deleteEmail'])) {
    foreach ($_POST['emailBox'] as $idToDelete) {
        $newsletters->setId($idToDelete);
        $newsletters->deleteEmail();
    }
    if (count($_POST['emailBox']) > 1) {

        $_SESSION['messages'] = ["Les utilisateurs ont bien été supprimés"];
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $_SESSION['messages'] = ["L'utilisateur a bien été supprimé"];
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;

    }
}

require_once ('templates/messages.php');

require_once ('templates/header.php');
?>

<h2>Liste des utilisateurs</h2>
<form method="POST">
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="">
                <table class="table table-striped table-responsive text-center nowrap">
                    <thead>
                        <tr>
                            <th>Emails</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allNewsletters as $newsletters) { ?>
                        <tr class="allArticles text-start">
                            <td><?=($newsletters["email"])?></td>
                            <td><input type="checkbox" name="emailBox[]" value="<?= $newsletters['id'] ?>"></td>
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
                 <button type="submit" class="btn btn-original" name="deleteEmail">Supprimer</button>
            </div>
        </div>
    </div>
</div>
</form>
<?php
require_once ('templates/footer.php');
?>