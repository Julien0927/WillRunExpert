<?php
session_start();

require_once ('App/Users.php');
require_once ('lib/pdo.php');

$messages = [];
$errors = [];


$users = new App\Users\Users($db);


$allUsers = $users->getAllUsers();
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
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allUsers as $users) { ?>
                        <tr class="allArticles text-start">
                            <td><?=($users["firstName"])?></td>
                            <td><?=($users["lastName"])?></td>
                            <td><?=($users["email"])?></td>
<!--                             <td><input type="checkbox" name="articleBox[]" value="<?= $users['id'] ?>"></td>
 -->                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-flex justify-content-end">
            <div class=" my-3">
<!--                 <button type="submit" class="btn btn-original" name="deleteArticle">Supprimer</button>
 -->            </div>
        </div>
    </div>
</div>
</form>
<?php
require_once ('templates/footer.php');
?>