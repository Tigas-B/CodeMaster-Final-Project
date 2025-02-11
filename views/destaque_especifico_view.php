    <?php 
    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        $destaque_especifico = destaqueEspecificoID($id);
    }
    ?>
    <main class="container destaque-unico rolar">             <!-- Classe Rolar está no JavaScript -->
        <div class="row">
            <div class="col text-center mb-4">
                <hr class="especial mt-5 mb-3 my-md-5">
                <?php if(!empty($destaque_especifico)): ?>
                    <h1>Destaques</h1>
                    <h2><?= $destaque_especifico["titulo"];?></h2>
                <?php else: ?>
                    <h1 class="mb-5">Destaque Não Encontrado!</h1>
                    <a href="destaques.php"><button type="button" class="botao-destaque">Voltar para Destaques</button></a>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty($destaque_especifico)): ?>
            <div class="row">
                <div class="col-12 px-5 px-md-2 mt-4 mt-md-5 espaco">
                    <?= $destaque_especifico["texto"];?>
                </div>
                <div class="col-12 mt-1 mt-lg-5 text-end">
                    <a><button type="button" onclick="voltar()" class="botao-destaque">Voltar para Destaques</button></a>
                </div>
            </div>
        <?php endif; ?>
    </main>