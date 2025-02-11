    <?php 
    $centro_de_ferias = menuSimplesNome("centro_de_ferias");
    ?>
    <main class="container centro-ferias rolar">        <!-- Classe Rolar está no JavaScript -->
        <div class="row">
            <div class="col text-center">
                <hr class="especial mt-5 mb-3 my-md-5">
                <h1><?= $centro_de_ferias["titulo"];?></h1>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-12 px-5 px-md-0 mt-4 mt-md-5 espaco">
                <?= $centro_de_ferias["texto"];?>
            </div>
        </div>
    </main>