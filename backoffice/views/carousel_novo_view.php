    <?php
        if(!empty($_GET["imagem"])){
            $imagem = $_GET["imagem"];
            $editor = $_SESSION["usuario"]["nome"];
            $data_de_edicao = date("H:i:s - d/m/Y");
            iduSQL("INSERT INTO carousel (imagem, editor, data_de_edicao) VALUES ('$imagem', '$editor', '$data_de_edicao')");
            header("Location: carousels.php");
            exit();
        }
    ?>
    <main class="container text-center">
        <div class="row">
            <div class="col my-4">
                <h1>Carousel Novo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mb-5">
                <form>
                    <input type="text" name="imagem" placeholder="Imagem" size="75" required>
                    <a href="../tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type="button" class="btn btn-secondary">Gestor de Ficheiros</button>
                    </a>
                    <br><br>
                    <input type="submit" class="btn btn-outline-success mt-5" value="Registar">
                </form>
            </div>
        </div>
    </main>