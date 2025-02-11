    <?php
        $banners = todosBanners();
    ?>
    <main class="container text-center">
        <div class="row">
            <div class="col mt-4">
                <h1>Banners</h1>
            </div>
        </div>
        <div class="row">
            <div class="col my-4">
                <a href="carousel_novo.php">
                    <button type="button" class="btn btn-outline-dark">Novo</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col mb-4">
                <table class="mx-auto my-4">
                    <tr>
                        <th>Id</th>
                        <th>Página</th>
                        <th>Imagem</th>
                        <th>Editor</th>
                        <th>Data de Edição</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach($banners as $b): ?>
                        <tr>
                            <td><?= $b["id"];?></td>
                            <td><?= $b["titulo"];?></td>    
                            <td><img src="<?= $b["imagem"];?>" alt="<?= $b["imagem"];?>" width="200"></td>
                            <td><?= $b["editor"];?></td>
                            <td><?= $b["data_de_edicao"];?></td>
                            <td class="gap-2">
                                <a href="banner_editar.php?editar=<?= $b["id"];?>"><button type="button" class="btn btn-warning">Editar</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </main>


    