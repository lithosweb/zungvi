<?php
$errors = $_SESSION['connexion']['errors'] ?? [];
$_SESSION['connexion']['errors'] = [];
$data = $_SESSION['connexion']['user'] ?? [];
$_SESSION['connexion']['user'] = [];
?>

<h1>Connexion</h1>

<form action="/connexion" method="post">
    <input type="hidden" name="_auth" id="" class="" value='<?= trim(password_hash("auth", PASSWORD_BCRYPT), '$2y$10$') ?>'>
    <input type="text" name="username" class="" id="" autofocus value='<?= $data['username'] ?? '' ?>' placeholder="Username"> <br>
    <?php if (array_key_exists("username", $errors)) : ?>
        <small>
            <?= $errors['username'][0] ?>
        </small>
    <?php endif ?> <br>
    <input type="password" name="password" id="" class="" autocomplete="" value='<?= $data['password'] ?? '' ?>' placeholder="Password"> <br>
    <?php if (array_key_exists("password", $errors)) : ?>
        <small>
            <?= $errors['password'][0] ?>  
        </small>
    <?php endif ?> <br>
    <button type="submit" id="" class="">Connexion</button>
</form>
