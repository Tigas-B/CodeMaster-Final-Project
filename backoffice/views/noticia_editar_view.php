    <?php
        if(!empty($_GET["editar"])){
            $id = $_GET["editar"];
            $noticia_unica = selectSQLUnico("SELECT * FROM noticias WHERE id=$id");
            if(!empty($_GET["titulo"]) && !empty($_GET["imagem"]) && !empty($_GET["texto"])){
                $titulo = $_GET["titulo"];
                $imagem = $_GET["imagem"];
                $texto = $_GET["texto"];
                $editor = $_SESSION["usuario"]["nome"];
                $data_de_edicao = date("H:i:s - d/m/Y");
                iduSQL("UPDATE noticias SET titulo='$titulo', imagem='$imagem', texto='$texto', editor='$editor', data_de_edicao='$data_de_edicao' WHERE id='$id'");
                header("Location: noticias.php");
                exit();
            }
        }
    ?>
    <main class="container text-center">
        <?php if(empty($noticia_unica)): ?>
            <div class="row">
                <div class="col my-5">
                    <h2>Não Existe Nenhuma Notícia Com Esse Nome!</h2>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col my-4">
                    <h2>Notícia - Editar</h2>
                </div>
            </div>
            <form class="row">
                <input type="hidden" name="editar" value="<?= $id;?>">
                <div class="col">
                    <label for="titulo" class="pe-2 fs-4">Título:</label>
                    <input type="text" name="titulo" size="60" value="<?= $noticia_unica["titulo"]; ?>" required>   
                    <br><br>
                    <label for="imagem" class="pe-2 fs-4">Imagem:</label>
                    <input type="text" name="imagem" size="90" value="<?= $noticia_unica["imagem"]; ?>" required>   
                    <a href="../tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type="button" class="btn btn-secondary">Gestor de Ficheiros</button>
                    </a>
                </div>
                <div class="col-12 mt-4">
                    <textarea id="texto" name="texto" cols="160" rows="15" required><?= $noticia_unica["texto"]; ?></textarea>
                    <script>
                        var base_url = "https://localhost/construcao_e_habitacao/";
                        tinymce.init({
                            selector: 'textarea',
                            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker permanentpen powerpaste advtable advcode editimage advtemplate tableofcontents',
                            toolbar: 'undo redo | blocks fontsize | bold italic underline strikethrough | link image media table | align lineheight | checklist numlist bullist indent outdent | emoticons charmap',
                            relative_urls: false,
                            remove_script_host : false,
                            language: "pt_PT",
                            image_advtab: true,
                        });
                    </script>
                </div>
                <div class="col-12 my-5">
                    <input type="submit" class="btn btn-outline-warning" value="Editar">
                </div>
            </form>
        <?php endif; ?>
    </main>