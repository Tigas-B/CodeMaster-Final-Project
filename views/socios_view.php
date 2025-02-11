    <?php 
    $socios = menuSimplesNome("socios");
    ?>
    <main class="container socios rolar">          <!-- Classe Rolar está no JavaScript -->
        <div class="row">
            <div class="col text-center">
                <hr class="especial mt-5 mb-4 my-md-5">
                <h1><?=$socios["titulo"]; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-5 px-md-0 mt-3 mt-md-5 espaco">
                <?=$socios["texto"]; ?>
            </div>
        </div>
    </main>


    