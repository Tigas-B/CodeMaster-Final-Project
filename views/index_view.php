    <?php
    $quem_somos = menuSimplesNome("quem_somos");
    $destaques = todosDestaquesHome();    
    ?>
    <main class="container">
        <div class="row mx-0">
            <div class="col px-0">
                <hr class="especial mt-4 mt-md-5">
                <h1 class="text-center lh-base mt-2 mt-md-4 py-2 px-5">Bem-vindo à <br>Cooperativa de Construção e Habitação Tripeira</h1>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col px-0 mt-3 px-4 mt-md-4 pt-md-3 texto">
                <?= substr(strip_tags($quem_somos["texto"]), 0, 400); ?>...
            </div>
        </div>
        <div class="row mx-0 mb-2">
            <div class="col text-center mt-4 pt-2 mb-5 pb-md-5">
                <a href="quem_somos.php"><button type="button" class="botao-index">Ver Mais</button></a>
            </div>
        </div>

        <div class="row mx-0">
            <div class="col text-center">
                <hr class="especial mt-1 mt-md-0">
                <h1 class="mt-2 pt-3 pb-4 py-md-0 mt-md-5">Destaques</h1>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 my-auto px-0 mt-md-5 d-flex flex-wrap justify-content-center column-gap-4 row-gap-5">
                <?php foreach($destaques as $d): ?>          
                    <div class="card h-100">
                        <img src="<?= $d["imagem"]; ?>" class="card-img-top" alt="<?= $d["imagem"]; ?>">
                        <div class="card-body px-4 pb-0 d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title"><?= $d["titulo"]; ?></h5>
                                <p class="card-text"><?= substr(strip_tags($d["texto"]), 0, 80); ?>...</p>
                            </div>
                            <div class="text-center">
                                <a href="destaque_especifico.php?id=<?= $d["id"]; ?>"><button type="button">Ver Mais</button></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>  
            </div>
        </div>
    </main>