    <?php
        if(!empty($_GET["titulo"]) && !empty($_GET["imagem"]) && !empty($_GET["texto"]) && isset($_GET["esta_na_home"])){
            $titulo = $_GET["titulo"];
            $imagem = $_GET["imagem"];
            $texto = $_GET["texto"];
            $esta_na_home = $_GET["esta_na_home"];
            $editor = $_SESSION["usuario"]["nome"];
            $data_de_edicao = date("H:i:s - d/m/Y");
            iduSQL("INSERT INTO destaques (titulo, imagem, texto, esta_na_home, editor, data_de_edicao) VALUES ('$titulo', '$imagem', '$texto', $esta_na_home, '$editor', '$data_de_edicao')");
            header("Location: destaques.php");
            exit();
        }
    ?>
    <main class="container text-center">
        <div class="row">
            <div class="col my-4">
                <h1>Destaque - Novo</h1>
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
                    <select name="esta_na_home" required>
                        <option selected> ---Está na Home---</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                    <br>
                    <input type="submit" class="btn btn-outline-success mt-5" value="Registar">
                </form>
            </div>
        </div>
    </main>