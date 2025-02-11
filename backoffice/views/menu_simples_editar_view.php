    <?php
        if(!empty($_GET["pagina"])){
            $nome_pagina = $_GET["pagina"];
            $menu_simples = menuSimplesNome($nome_pagina);
            if(!empty($_GET["titulo"]) && !empty($_GET["texto"])){
                $titulo = $_GET["titulo"];
                $texto = $_GET["texto"];
                $editor = $_SESSION["usuario"]["nome"];
                $data_de_edicao = date("H:i:s - d/m/Y");
                iduSQL("UPDATE menu_simples SET titulo='$titulo', texto='$texto', editor='$editor', data_de_edicao='$data_de_edicao' WHERE nome_pagina='$nome_pagina'");
                header("Location: menu_simples.php?pagina=$nome_pagina");
                exit();
            } 
        }
    ?>
    <main class="container text-center">
        <?php if(empty($menu_simples)): ?>
            <div class="row">
                <div class="col">
                    <h2>Não Existe Nenhum Menu Com Esse Nome!</h2>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col my-4">
                    <h2>Menu Simples - Editar (<?= $menu_simples["titulo"]; ?>)</h2>
                </div>
            </div>
            <form class="row">
            <input type="hidden" name="pagina" value="<?=$menu_simples["nome_pagina"];?>">
                <div class="col">
                    <label for="titulo" class="pe-2 fs-4">Titulo:</label>
                    <input type="text" name="titulo" size="40" value="<?= $menu_simples["titulo"];?>">
                    <br>
                    <a href="../tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type="button" class="btn btn-secondary my-5">Gestor de Ficheiros</button>
                    </a>
                    <br>
                    <textarea id="texto" name="texto" rows="30"><?= $menu_simples["texto"]; ?></textarea>
                    <script>
                        var base_url = "https://localhost/construcao_e_habitacao/";
                        tinymce.init({
                            selector: '#texto',
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
                    <button class="btn btn-outline-warning">Editar</button>
                </div>
            </form>
        <?php endif; ?>
    </main>