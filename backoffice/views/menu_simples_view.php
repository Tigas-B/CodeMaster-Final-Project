    <?php
        $menu_simples = menuSimples();
    ?>
    <main class="container text-center">
        <div class="row">
            <div class="col mt-4">
                <h1>Menu Simples</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mb-4">
                <table class="mx-auto my-4">
                    <tr>
                        <th>Página</th>
                        <th>Texto</th>
                        <th>Editor</th>
                        <th>Data de Edição</th>
                        <th>Editar</th>
                    </tr>
                    <?php foreach($menu_simples as $m): ?>
                        <tr>
                            <td><?= $m["titulo"];?></td>
                            <td><?= substr(strip_tags($m["texto"]), 0, 200);?>...</td>    
                            <td><?= $m["editor"];?></td>
                            <td><?= $m["data_de_edicao"];?></td>
                            <td class="gap-2">
                                <a href="menu_simples_editar.php?pagina=<?= $m["nome_pagina"];?>"><button type="button" class="btn btn-warning">Editar</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </main>