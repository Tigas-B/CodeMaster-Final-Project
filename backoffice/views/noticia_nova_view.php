    <?php
        if(!empty($_GET["titulo"]) && !empty($_GET["imagem"]) && !empty($_GET["texto"])){
            $titulo = $_GET["titulo"];
            $imagem = $_GET["imagem"];
            $texto = $_GET["texto"];
            $editor = $_SESSION["usuario"]["nome"];
            $data_de_edicao = date("H:i:s - d/m/Y");
            iduSQL("INSERT INTO noticias (titulo, imagem, texto, editor, data_de_edicao) VALUES ('$titulo', '$imagem', '$texto', '$editor', '$data_de_edicao')");
            header("Location: noticias.php");
            exit();
        }
    ?>
    <main class="container text-center">
        <div class="row">
            <div class="col my-4">
                <h1>Notícia - Nova</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mb-5">
                <form>
                    <input type="text" name="titulo" placeholder="Titulo" size="60" required>
                    <br><br>
                    <input type="text" name="imagem" placeholder="Imagem" size="90" required>
                    <a href="../tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type="button" class="btn btn-secondary">Gestor de Ficheiros</button>
                    </a>
                    <br><br>
                    <textarea id="texto" name="texto" cols="160" rows="15"></textarea>
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
                    <br><br>
                    <input type="submit" class="btn btn-outline-success mt-5" value="Registar">
                </form>
            </div>
        </div>
    </main>