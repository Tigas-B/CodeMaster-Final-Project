    <?php
        $empreendimentos = todosEmpreendimentos();
    ?>
    <main class="container text-center">
        <div class="row">
            <div class="col mt-4">
                <h1>Empreendimentos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col my-4">
                <a href="empreendimento_novo.php">
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
                        <th>Editor</th>
                        <th>Data de Edição</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach($empreendimentos as $e): ?>
                        <tr>
                            <td><?= $e["id"];?></td>    
                            <td><img src="<?= $e["imagem"];?>" alt="<?= $e["imagem"];?>" width="200"></td>
                            <td><?= $e["titulo"];?></td>
                            <td><?= substr(strip_tags($e["texto"]), 0, 200);?>...</td>
                            <td><?= $e["editor"];?></td>
                            <td><?= $e["data_de_edicao"];?></td>
                            <td class="gap-2">
                                <a href="empreendimento_editar.php?editar=<?= $e["id"];?>">
                                    <button type="button" class="btn btn-warning">Editar</button>
                                </a>
                                <br><br>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $e["id"];?>">Apagar</button>
                                <div class="modal fade" id="staticBackdrop<?= $e["id"];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel<?= $e["id"];?>"><?= $e["titulo"];?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Deseja apagar este Empreendimento?</div>
                                            <div class="modal-footer">
                                                <a href="empreendimentos.php"><button type="button" class="btn btn-dark" data-bs-dismiss="modal">Voltar</button></a>
                                                <a href="empreendimento_apagar.php?apagar=<?= $e["id"];?>"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Apagar</button>
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