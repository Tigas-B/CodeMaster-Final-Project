    <?php
    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        $empreendimento_especifico = empreendimentoEspecificoID($id);
    }
    ?>
    <main class="container empreendimento rolar">       <!-- Classe Rolar está no JavaScript -->
        <div class="row">
            <div class="col text-center mb-4">
                <hr class="especial mt-5 mb-3 my-md-5">

                <?php if(!empty($empreendimento_especifico)): ?>
                    <h1>Empreendimentos</h1>
                    <h2><?=$empreendimento_especifico["titulo"];?></h2>
                <?php else: ?>
                    <h1 class="mb-5"> Empreendimento Não Encontrado!</h1>
                    <a href="index.php"><button type="button" class="botao-destaque">Voltar para Home</button></a>
                <?php endif; ?>

            </div>
        </div>
        <?php if(!empty($empreendimento_especifico)): ?>
            <div class="row">
                <div class="col-12 px-5 px-md-0 mt-4 mt-md-5 espaco">
                    <?=$empreendimento_especifico["texto"];?>
                </div>
            </div>
        <?php endif; ?>
    </main>