    <?php
    $quem_somos = menuSimplesNome("quem_somos");
    ?>
    <main class="container quem-somos rolar">       <!-- Classe Rolar está no JavaScript -->
        <div class="row">
            <div class="col text-center">
                <hr class="especial mt-5 mb-3 my-md-5">
                <h1><?= $quem_somos["titulo"]; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-5 px-md-2 mt-4 mt-md-5 espaco">
                <?= $quem_somos["texto"]; ?>
            </div>
        </div>
    </main>