    <?php
        $carousel = todosCarousel();
    ?>
    <main class="container text-center">
        <div class="row">
            <div class="col mt-4">
                <h1>Carousel</h1>
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
                        <th>Imagem</th>
                        <th>Editor</th>
                        <th>Data de Edição</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach($carousel as $c): ?>
                        <tr>
                            <td><?= $c["id"];?></td>    
                            <td><img src="<?= $c["imagem"];?>" alt="<?= $c["imagem"];?>" width="200"></td>
                            <td><?= $c["editor"];?></td>
                            <td><?= $c["data_de_edicao"];?></td>
                            <td class="gap-2">
                                <a href="carousel_editar.php?editar=<?= $c["id"];?>">
                                    <button type="button" class="btn btn-warning">Editar</button>
                                </a>
                                <br><br>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $c["id"];?>">Apagar</button>
                                <div class="modal fade" id="staticBackdrop<?= $c["id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel<?= $c["id"];?>"><?= $c["titulo"];?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Deseja apagar este Carousel?</div>
                                            <div class="modal-footer">
                                                <a href="empreendimentos.php"><button type="button" class="btn btn-info" data-bs-dismiss="modal">Voltar</button></a>
                                                <a href="empreendimento_apagar.php?apagar=<?= $c["id"];?>"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Apagar</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </main>