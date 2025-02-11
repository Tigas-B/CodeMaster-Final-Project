    <?php
        $encontrado = $_SESSION["usuario"];
    ?>
    <main class="container text-center py-5">
        <div class="row">
            <div class="col">
                <h1 class="mb-4">Home</h1>
                <a href="carousel_novo.php">
                    <button type="button" class="btn btn-outline-dark mb-4">Novo</button>
                </a>    
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Bem-vindo (<?=$encontrado["nome"]; ?>)</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5>Data do último acesso: (<?=$encontrado["ultimo_acesso"]; ?>)</h5>
            </div>
        </div>
    </main>