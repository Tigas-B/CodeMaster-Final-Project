<?php

require_once("./requisitos.php");

$empreendimentos = todosEmpreendimentos();
$carousel = todosCarousel();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Fontes -->
    <link rel="stylesheet" href="public/fontes/fontes.css">
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/estilo.css">
    <!-- JS -->
    <script src="./scripts/main.js" defer></script>

    <title>Construção e Habitação</title>
</head>
<body>
    <header class="container-fluid px-0">
        <div class="row mx-0">
            <div class="col px-0">
                <nav class="navbar navbar-expand-lg px-4 px-lg py-3 p-lg-0">
                    <div class="container-fluid justify-content-lg-center align-items-end mt-lg-2 pt-lg-5 gap-3">
                        <a class="navbar-brand" href="index.php">
                            <img class="mb-lg-3" src="public/imagens/logo.png">
                        </a>
                        <button onclick="mudar()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavHeader" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-grow-0" id="navbarNavHeader">
                        <ul class="navbar-nav ps-lg-3 gap-lg-3 ">
                        <li class="nav-item ">
                                <a class="nav-link <?= ($menu == 'home') ? 'active' : '' ?>" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($menu == 'quem_somos') ? 'active' : '' ?>" href="quem_somos.php">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($menu == 'socios') ? 'active' : '' ?>" href="socios.php">Sócios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($menu == 'noticias') ? 'active' : '' ?>" href="noticias.php">Notícias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($menu == 'destaques') ? 'active' : '' ?>" href="destaques.php">Destaques</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="menu_emp" class="nav-link <?= ($menu == 'empreendimentos') ? 'active' : '' ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Empreendimentos
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach($empreendimentos as $i => $e): ?>
                                    <li><a class="dropdown-item py-3 <?= ($i == count($empreendimentos)-1) ? 'border-0' : ''; ?>" href="empreendimento.php?id=<?= $e["id"]; ?>"><?= $e["titulo"]; ?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($menu == 'centro_de_ferias') ? 'active' : '' ?>" href="centro_de_ferias.php">Centro de Férias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ultimo <?= ($menu == 'contactos') ? 'active' : '' ?> " href="contactos.php">Contactos</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row mx-0 m-0">
            <div class="col p-0">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">

                        <?php foreach($carousel as $i => $c): ?>
                            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="<?= $i; ?>" <?= ($i == 0) ? 'class="active" aria-current="true"': ""; ?> aria-label="Slide<?= $i+1; ?>"></button>
                        <?php endforeach; ?>

                    </div>
                    <div class="carousel-inner">
                        <?php foreach($carousel as $i => $c): ?>
                            <div class="carousel-item <?= ($i == 0) ? 'active': ''; ?>" data-bs-interval="10000">
                                <img src="<?= $c["imagem"]; ?>" class="d-block" alt="<?= $c["imagem"]; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        
    </header>