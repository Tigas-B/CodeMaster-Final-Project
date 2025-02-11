    <?php
        if(!empty($_GET["editar"])){
            $id = $_GET["editar"];
            $banner_unico = bannerID($id);
            if(!empty($_GET["imagem"])){
                $imagem = $_GET["imagem"];
                $editor = $_SESSION["usuario"]["nome"];
                $data_de_edicao = date("H:i:s - d/m/Y");
                iduSQL("UPDATE banners SET imagem ='$imagem', editor='$editor', data_de_edicao='$data_de_edicao' WHERE id='$id'");
                header("Location: banners.php");
                exit();
            }
        }
    ?>
    <main class="container text-center">
        <?php if(empty($banner_unico)): ?>
            <div class="row">
                <div class="col my-5">
                    <h2>Não Existe Nenhum Destaque Com Esse Nome!</h2>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col my-4">
                    <h2>Banner - Editar (<?= $banner_unico["nome_pagina"]; ?>)</h2>
                </div>
            </div>
            <form class="row">
                <input type="hidden" name="editar" value="<?= $id;?>">
                <div class="col">
                    <input type="text" name="imagem" size="80" value="<?= $banner_unico["imagem"]; ?>" required>   
                    <br><br>
                    <a href="../tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type="button" class="btn btn-secondary">Gestor de Ficheiros</button>
                    </a>
                <div class="col-12 my-5">
                    <button class="btn btn-outline-warning">Editar</button>
                </div>
            </form>
        <?php endif; ?>
    </main>