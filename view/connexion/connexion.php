<?php
$errors = $_SESSION['errors'];
$_SESSION['errors'] = [];
$data = $_POST ?? [];
?>

<form action="/connexion" method="post">
    <input type="hidden" name="_auth" id="" class="" value='<?= password_hash("auth", PASSWORD_BCRYPT) ?>'>
    <input type="text" name="username" class="" id="" autofocus autocomplete="" value='<?= $data['username'] ?? '' ?>'> <br>
    <?php if (array_key_exists("username", $errors)) : ?>
        <small>
            <?= $errors['username'][0] ?>
        </small>
    <?php endif ?> <br>
    <input type="password" name="password" id="" class="" autocomplete="" value='<?= $data['password'] ?? '' ?>'> <br>
    <?php if (array_key_exists("password", $errors)) : ?>
        <small>
            <?= $errors['password'][0] ?>  
        </small>
    <?php endif ?> <br>
    <button type="submit" id="" class="">Connexion</button>
</form>
<?php
$data = $_POST;
?>