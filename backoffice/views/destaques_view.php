    <?php
        $destaques = todosDestaques();
    ?>
    <main class="container text-center">
        <div class="row">
            <div class="col mt-4">
                <h1>Destaques</h1>
            </div>
        </div>
        <div class="row">
            <div class="col my-4">
                <a href="destaque_novo.php">
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
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Está na Home</th>
                        <th>Editor</th>
                        <th>Data de Edição</th>
                        <th>Ações</th>
                    </tr>

                    <?php foreach($destaques as $d): ?>
                        <tr>
                            <td><?= $d["id"];?></td>    
                            <td><img src="<?= $d["imagem"];?>" alt="<?= $d["imagem"];?>" width="200"></td>
                            <td><?= $d["titulo"];?></td>
                            <td><?= substr(strip_tags($d["texto"]), 0, 200);?>...</td>
                            <td><?= $d["esta_na_home"] ? "Sim" : "Não";?></td>
                            <td><?= $d["editor"];?></td>
                            <td><?= $d["data_de_edicao"];?></td>
                            <td class="gap-2">
                                <a href="destaque_editar.php?editar=<?= $d["id"];?>">
                                    <button type="button" class="btn btn-warning">Editar</button>
                                </a>
                                <br><br>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $d["id"];?>">Apagar</button>
                                <div class="modal fade" id="staticBackdrop<?= $d["id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel<?= $d["id"];?>"><?= $d["titulo"];?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Deseja apagar este Destaque?</div>
                                            <div class="modal-footer">
                                                <a href="destaques.php"><button type="button" class="btn btn-info" data-bs-dismiss="modal">Voltar</button></a>
                                                <a href="destaque_apagar.php?apagar=<?= $d["id"];?>"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Apagar</button>
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