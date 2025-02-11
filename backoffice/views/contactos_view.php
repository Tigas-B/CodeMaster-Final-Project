    <?php
        $infos = todosContactos();
    ?>
    <main class="container text-center">
        <div class="row">
            <div class="col mt-4">
                <h1>Contactos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mb-4">
                <table class="mx-auto my-4">
                    <tr>
                        <th>Telefone</th>
                        <th>Morada</th>
                        <th>Fax</th>
                        <th>E-mail</th>
                        <th>Facebook</th>
                        <th>Editor</th>
                        <th>Data de Edição</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach($infos as $i): ?>
                        <tr>
                            <td><?= $i["telefone"];?></td>
                            <td><?= $i["morada"];?></td>    
                            <td><?= $i["fax"];?></td>
                            <td><?= $i["email"];?></td>
                            <td><?= $i["facebook"];?></td>
                            <td><?= $i["editor"];?></td>
                            <td><?= $i["data_de_edicao"];?></td>
                            <td class="gap-2">
                                <a href="contactos_editar.php?"><button type="button" class="btn btn-warning">Editar</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                
            </div>
        </div>
    </main>