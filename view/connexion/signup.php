<?php
$errors = $_SESSION['signup']['errors'] ?? [];
$data = $_SESSION['signup']['user'] ?? [];
$_SESSION['signup']['errors'] = [];
$_SESSION['signup']['user'] = [];
?>

<h1>Sign Up</h1>

<form action="/signup" method="post">
    <input type="hidden" name="_auth" id="" class="" value='<?= trim(password_hash("auth", PASSWORD_BCRYPT), '$2y$10$') ?>'>
    <input type="text" name="username" class="" id="" autofocus value='<?= $data['username'] ?? '' ?>' placeholder="Username"> <br>
    <small>
            <?= $errors['username'][0] ?? '' ?>
        </small> <br>
    <input type="text" name="firstname" class="" id=""  value='<?= $data['firstname'] ?? '' ?>' placeholder="Firstname"> <br>
    <small>
            <?= $errors['firstname'][0] ?? '' ?>
        </small><br>
    <input type="text" name="lastname" class="" id=""  value='<?= $data['lastname'] ?? '' ?>' placeholder="Lastname"> <br>
        <small>
            <?= $errors['lastname'][0] ?? '' ?>
        </small><br>
    <input type="email" name="email" id="" class="" value='<?= $data['email'] ?? '' ?>' placeholder="Email"> <br>
    <small>
            <?= $errors['email'][0] ?? '' ?>
        </small><br>
    <input type="password" name="password" id="" class=""  value='<?= $data['password'] ?? '' ?>' placeholder="Password"> <br>
        <small>
            <?= $errors['password'][0] ?? '' ?>
        </small><br>
    <button type="submit" id="" class="">Sign up</button>
</form>