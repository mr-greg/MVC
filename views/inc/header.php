<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.1/sketchy/bootstrap.min.css" integrity="sha512-ekVfi4ctYpVeTlxoAjQHeTnaqoJsZ5xLHhNJHYCYC63vFquzBQQVQzM5JCpqoCKKxIAkC6xGtZvcjKSN55Kq9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=  BASE_PATH  ?>">MyLibrary.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= BASE_PATH ?>">Accueil

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gestion</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= BASE_PATH.'book/list' ?>">Gestion Livres</a>
                        <a class="dropdown-item" href="<?= BASE_PATH.'genre/list' ?>">Gestion Genres</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container mt-4">


<?php if (isset($_SESSION['messages'])): ?>
    <?php foreach ($_SESSION['messages'] as $type => $messages): ?>
        <?php foreach ($messages as $message): ?>
            <div class="alert alert-<?=$type ?>"><?= $message  ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <?php  unset($_SESSION['messages']);  ?>
<?php endif; ?>
